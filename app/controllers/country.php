<?php

declare(strict_types=1);

use Framy\{Model, Template};
use Vanilla\FirefoxL10n;

[$country, $europe, $open_bugs, $marketshare, $marketshare_yoy, $cloudflare, $utils] = new Model('country')->get();

new Template(
    'country.html.twig',
    [
        'page_title'      => 'Country page for ' . $europe->countries[$country]['name'],
        'css_page_id'     => 'country',
        'country_code'    => $country,
        'data'            => $europe,
        'l10n'            => new FirefoxL10n(),
        'open_bugs'       => $open_bugs,
        'marketshare'     => $marketshare,
        'marketshare_yoy' => $marketshare_yoy,
        'cloudflare'      => $cloudflare,
        'utils'           => $utils,
    ]
)->render();