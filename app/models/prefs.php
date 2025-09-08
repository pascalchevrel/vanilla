<?php

declare(strict_types=1);

use Framy\Json;
use Vanilla\World;
use Vanilla\Utils;
use Vanilla\FirefoxPrefs;

$world = new world();
$activated_features = new FirefoxPrefs()->getRegionalPrefs();
$locale_countries_matrix = [
    'de'    => ['AT', 'CH', 'DE'],
    'en-CA' => ['CA'],
    'en-GB' => ['UK'],
    'en-US' => ['US'],
    'es-AR' => ['AR'],
    'es-CL' => ['CL'],
    'es-ES' => ['ES'],
    'es-MX' => ['MX'],
    'fr'    => ['BE', 'FR', 'CH'],
    'id'    => ['ID'],
    'pl'    => ['PL'],
    'pt-BR' => ['BR'],
    'ru'    => ['RU'],
    'zh-TW' => ['TW'],
];

$support = [];
foreach ($activated_features as $key => $values) {
    $values = explode(',', $values);
    $values = array_map('trim', $values);
    $support[$key] = [];
    foreach ($values as $code) {
        if (ctype_upper($code)) {
            $support[$key][] = $code;
        } else {
            $support[$key] = array_merge($support[$key],$locale_countries_matrix[$code]);
        }
    }
}

$activated_features = $support;

$activated_countries = [];
foreach ($support as $countries) {
    $activated_countries = array_merge($activated_countries, $countries);
}
$activated_countries = array_unique($activated_countries);
sort($activated_countries);

$total_per_country = [];
foreach ($activated_countries as $code) {
    $total_per_country[$code] = 0;
    foreach ($activated_features as $values){
        if (in_array($code, $values)) {
            $total_per_country[$code]++;
        }
    }
}

return [
    $world,
    $activated_features,
    $activated_countries,
    $total_per_country,
];
