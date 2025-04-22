<?php

declare(strict_types=1);

use Framy\{Model, Template};

$data = new Model('404')->get();

http_response_code(404);

new Template(
    'regular.html.twig',
    [
        'page_title'   => '',
        'css_page_id'  => 'notfound',
        'page_content' => $data,
    ]
)->render();
