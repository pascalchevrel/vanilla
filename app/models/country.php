<?php

declare(strict_types=1);

use Vanilla\Stats\Cloudflare;
use Vanilla\Stats\Statcounter;
use \Framy\Json;
use \Vanilla\World;
use \Vanilla\Utils;

$world = new world();
$country = 'ES'; // Default to Spain

if (isset($_GET['code']) && in_array($_GET['code'], array_keys($world->countries))) {
    $country = $_GET['code'];
}

$bz_rest  = 'https://bugzilla.mozilla.org/rest/bug?';
$bz_query_open = 'bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&keywords_type=allwords&keywords='
    . $world->countries[$country]['bugzilla_keyword'];

$bz_query_fixed = 'keywords_type=allwords&keywords='
    . $world->countries[$country]['bugzilla_keyword'];

$open_bugs = [
    'count' => Json::load($bz_rest . $bz_query_open . '&count_only=1')['bug_count'],
    'url'   => 'https://bugzilla.mozilla.org/buglist.cgi?' . $bz_query_open,
];

$fixed_bugs = [
    'count' => Json::load($bz_rest . $bz_query_fixed . '&count_only=1')['bug_count'],
    'url'   => 'https://bugzilla.mozilla.org/buglist.cgi?' . $bz_query_fixed,
];

$marketshare = new Statcounter($country)->getShare('2025', '04');
$marketshare_previous = new Statcounter($country)->getShare('2024', '04');
$marketshare_yoy = ($marketshare - $marketshare_previous) / $marketshare_previous;

return [
    $country,
    $world,
    $open_bugs,
    $fixed_bugs,
    $marketshare,
    $marketshare_yoy,
    new Cloudflare(),
    new Utils(),
];
