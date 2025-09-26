<?php declare(strict_types=1);

namespace Vanilla;

/**
 * This file parses the all.js file we ship with
 * Source: https://raw.githubusercontent.com/mozilla-firefox/firefox/refs/heads/main/modules/libpref/init/all.js
 *
 * The goal is to extract prefs activated only to specific countries
 */
class NimbusPrefs
{
    public string $nimbus_records = 'https://firefox.settings.services.mozilla.com/v1/buckets/main/collections/nimbus-desktop-experiments/records';

    public function __construct() {

    }

    /**
     * Return all the information we have for a locale code in this class
     */
    public function parse(): array
    {
        // All records
        $records = json_decode(file_get_contents($this->nimbus_records), true)['data'];
        // Only rollout
        $records = array_filter($records, fn($a) => $a['isRollout'] === true);
        // Only rollout on release channel
        $records = array_filter($records, fn($a) => str_contains($a['targeting'], '"release"'));
        // Selxct one specific rollout
        // $records = array_filter($records, fn($a) => $a['slug'] == 'windows-ui-automation-release-rollout');

        $records = array_values($records);

        var_dump(count($records));
        var_dump($records);
        return $records;
    }

}