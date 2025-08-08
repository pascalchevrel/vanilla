<?php

declare(strict_types=1);

use Framy\{Model, Template};

new Template(
    'home.html.twig',
    [
        'page_title'  => 'Improve Firefox for specific countries',
        'css_page_id' => 'homepage',
        'message'     => 'Hello',
        'data'        => new Model('home')->get(),
    ]
)->render();
