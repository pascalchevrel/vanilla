<?php

declare(strict_types=1);

use Framy\{Model, Template};

[
    $data,
] = new Model('home')->get();

new Template(
    'home.html.twig',
    [
        'page_title'  => 'Make Firefox in Europe Amazing',
        'css_page_id' => 'homepage',
        'message'     => 'Hello',
        'data'        => $data,
    ]
)->render();
