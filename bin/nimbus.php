<?php
/**
 * rollouts_release_geo.php — List Nimbus rollouts on Release with geo targeting (PHP 8.4+)
 *
 * Run:
 *   php rollouts_release_geo.php
 *
 * Output:
 *   nimbus_rollouts_release_geo.csv
 */

declare(strict_types=1);

const OUT_CSV   = __DIR__ . '/nimbus_rollouts_release_geo.csv';
const RS_BASE   = 'https://firefox.settings.services.mozilla.com/v1';
const BUCKET    = 'main';
const APP_OK    = ['firefox-desktop'];
const CHANNEL_OK= ['release'];

// ---------- HTTP ----------
function http_get_json(string $url): array {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 25,
        CURLOPT_HTTPHEADER => [
            'Accept: application/json',
            'User-Agent: Nimbus-Rollouts-Release-Geo/1.0 (PHP8.4)',
        ],
    ]);
    $body = curl_exec($ch);
    if ($body === false) {
        $err = curl_error($ch);
        curl_close($ch);
        throw new RuntimeException("HTTP error for $url: $err");
    }
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($code === 404) return ['data' => []];
    if ($code < 200 || $code >= 300) throw new RuntimeException("Unexpected HTTP $code for $url");
    $json = json_decode($body, true);
    return is_array($json) ? $json : ['data' => []];
}

// ---------- Discover live Nimbus collection ----------
function discover_experiments_endpoint(string $base, string $bucket): ?string {
    $colls = http_get_json("$base/buckets/$bucket/collections");
    $names = array_map(fn($c) => $c['id'] ?? '', $colls['data'] ?? []);
    foreach (['nimbus-desktop-experiments','nimbus-experiments-desktop','nimbus-experiments'] as $cand) {
        if (in_array($cand, $names, true)) {
            return "$base/buckets/$bucket/collections/$cand/records";
        }
    }
    return null;
}

// ---------- Geo extraction (JEXL heuristics) ----------
/**
 * Return array of country codes (['US','FR',...]) if present, else [].
 * Recognizes: country, normandy.country, region; == 'US', in ['US','DE'], ["US","DE"].includes(country)
 */
function extract_geo_regions(?string $t): array {
    if (!$t) return [];
    $regions = [];

    // country == 'US' OR normandy.country == 'US' OR region == 'US'
    if (preg_match_all("/(?:^|\\W)(?:country|normandy\\.country|region)\\s*==\\s*'([A-Z]{2})'/", $t, $m)) {
        $regions = array_merge($regions, $m[1]);
    }

    // country in ['US','DE'] (accept any of the 3 identifiers)
    if (preg_match_all("/(?:country|normandy\\.country|region)\\s*in\\s*\\[([^\\]]+)\\]/", $t, $m)) {
        foreach ($m[1] as $list) {
            if (preg_match_all("/'([A-Z]{2})'/", $list, $mm)) {
                $regions = array_merge($regions, $mm[1]);
            }
        }
    }

    // ["US","DE"].includes(country|normandy.country|region)
    if (preg_match_all('/\\[([^\\]]+)\\]\\.includes\\((?:country|normandy\\.country|region)\\)/', $t, $m)) {
        foreach ($m[1] as $list) {
            if (preg_match_all('/"([A-Z]{2})"/', $list, $mm)) {
                $regions = array_merge($regions, $mm[1]);
            }
        }
    }

    // Normalize
    $regions = array_values(array_unique(array_map('strtoupper', $regions)));
    return array_values(array_filter($regions, fn($c) => preg_match('/^[A-Z]{2}$/', $c)));
}

// ---------- CSV writers (PHP 8.4: explicit args) ----------
function csv_header($fp, array $h): void { fputcsv($fp, $h, ',', '"', '\\'); }
function csv_row($fp, array $r): void    { fputcsv($fp, $r, ',', '"', '\\'); }

// ---------- Main ----------
try {
    $endpoint = discover_experiments_endpoint(RS_BASE, BUCKET);
    if (!$endpoint) {
        throw new RuntimeException("No Nimbus experiments collection found in bucket '".BUCKET."'.");
    }

    $json = http_get_json($endpoint);
    $data = $json['data'] ?? [];

    $rows = [];
    foreach ($data as $rec) {
        // Only rollouts
        $isRollout = !empty($rec['isRollout']) || !empty($rec['is_rollout']);
        if (!$isRollout) continue;

        // Channel == release (if present)
        $channel = $rec['channel'] ?? '';
        if ($channel && !in_array($channel, CHANNEL_OK, true)) continue;

        // App == firefox-desktop
        $app = $rec['appName'] ?? ($rec['application'] ?? '');
        if (!in_array($app, APP_OK, true)) continue;

        // Must have geography in targeting JEXL
        $targeting = $rec['targeting'] ?? '';
        $hasGeoHint = (bool)preg_match('/country|normandy\\.country|region/', $targeting);
        if (!$hasGeoHint) continue;

        // Extract concrete country codes if present
        $regions = extract_geo_regions($targeting);
        if (empty($regions)) {
            // If you want to STRICTLY require explicit codes, skip when none found:
            // continue;
            // Otherwise, keep but mark as "(geo present, codes unknown)"
            $regionsDetected = '';
        } else {
            $regionsDetected = implode('|', $regions);
        }

        // Collect feature IDs
        $featureIds = [];
        foreach (($rec['features'] ?? []) as $f) {
            if (!empty($f['featureId'])) $featureIds[] = (string)$f['featureId'];
        }
        $featureIds = implode('|', array_values(array_unique($featureIds)));

        $rows[] = [
            'slug'            => (string)($rec['slug'] ?? $rec['id'] ?? ''),
            'feature_ids'     => $featureIds,
            'last_modified'   => (string)($rec['last_modified'] ?? $rec['lastModified'] ?? ''),
            'channel'         => (string)$channel,
            'app'             => (string)$app,
            'regions_detected'=> $regionsDetected,
            'targeting'       => trim((string)$targeting),
        ];
    }

    // Write CSV
    $fp = fopen(OUT_CSV, 'w');
    if ($fp === false) throw new RuntimeException("Cannot write to ".OUT_CSV);
    $header = ['slug','feature_ids','last_modified','channel','app','regions_detected','targeting'];
    csv_header($fp, $header);
    foreach ($rows as $r) {
        csv_row($fp, [$r['slug'],$r['feature_ids'],$r['last_modified'],$r['channel'],$r['app'],$r['regions_detected'],$r['targeting']]);
    }
    fclose($fp);

    echo "OK: wrote ".count($rows)." rollout(s) to ".OUT_CSV.PHP_EOL;
    echo "Tip: open in your dashboard or run:\n";
    echo "  column -t -s, ".escapeshellarg(OUT_CSV)." | less -S\n";

} catch (Throwable $e) {
    fwrite(STDERR, "ERROR: ".$e->getMessage().PHP_EOL);
    exit(1);
}
