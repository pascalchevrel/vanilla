<?php

declare(strict_types=1);

use Framy\{Model, Template};

[$world, $activated_features, $activated_countries, $total_per_country] = new Model('prefs')->get();

new Template(
    'prefs.html.twig',
    [
        'page_title'        => 'Activates prefs per country',
        'css_page_id'       => 'prefs',
        'world'             => $world,
        'fx_features'       => $activated_features,
        'countries'         => $activated_countries,
        'total_per_country' => $total_per_country,
    ]
)->render();