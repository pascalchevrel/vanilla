<?php

declare(strict_types=1);

use Vanilla\Stats\Cloudflare;
use Vanilla\Stats\Statcounter;
use \Framy\Json;
use \Vanilla\Europe;
use \Vanilla\Utils;

$europe = new Europe();
$country = 'ES'; // Default to Spain

if (isset($_GET['code']) && in_array($_GET['code'], array_keys($europe->countries))) {
    $country = $_GET['code'];
}

$bz_rest  = 'https://bugzilla.mozilla.org/rest/bug?';
$bz_query = 'bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&keywords_type=allwords&keywords='
    . $europe->countries[$country]['bugzilla_keyword'];

$open_bugs = [
    'count' => Json::load($bz_rest . $bz_query . '&count_only=1')['bug_count'],
    'url'   => 'https://bugzilla.mozilla.org/buglist.cgi?' . $bz_query,
];

$marketshare = new Statcounter($country)->getShare('2025', '04');
$marketshare_previous = new Statcounter($country)->getShare('2024', '04');
$marketshare_yoy = ($marketshare - $marketshare_previous) / $marketshare_previous;

return [
    $country,
    $europe,
    $open_bugs,
    $marketshare,
    $marketshare_yoy,
    new Cloudflare(),
    new Utils(),
];
