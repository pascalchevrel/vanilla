<?php

declare(strict_types=1);

use Framy\{Model, Template};
use Vanilla\Dictionaries;

[$country, $europe, $open_bugs, $fixed_bugs, $marketshare, $marketshare_yoy, $cloudflare, $utils] = new Model('country')->get();

new Template(
    'country.html.twig',
    [
        'page_title'      => 'Country page for ' . $europe->countries[$country]['name'],
        'css_page_id'     => 'country',
        'country_code'    => $country,
        'data'            => $europe,
        'dict'            => new Dictionaries(),
        'open_bugs'       => $open_bugs,
        'fixed_bugs'      => $fixed_bugs,
        'marketshare'     => $marketshare,
        'marketshare_yoy' => $marketshare_yoy,
        'cloudflare'      => $cloudflare,
        'utils'           => $utils,
    ]
)->render();