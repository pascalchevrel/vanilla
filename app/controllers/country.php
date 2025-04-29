<?php

declare(strict_types=1);

use \Framy\{Model, Template};
use \Vanilla\Europe;

$europe = new Europe();

if (isset($_GET['code']) && in_array($_GET['code'], array_keys($europe->countries))) {
    $target = $_GET['code'];
} else {
    $target = 'ES'; // Default to Spain
}

[$data] = new Model('country')->get();

new Template(
    'country.html.twig',
    [
        'page_title'   => 'Country page for ' . $europe->countries[$target]['name'],
        'css_page_id'  => 'country',
        'country_code' => $target,
        'data'         => $data,
    ]
)->render();

