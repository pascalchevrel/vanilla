<?php

declare(strict_types=1);

use Framy\{Model, Template};

[
    $l10n,
    $europe,
    $dictionaries,
    $utils,
] = new Model('dictionaries')->get();

new Template(
    'dictionaries.html.twig',
    [
        'page_title'  => 'Inventory of dictionaries shipping in Firefox Desktop',
        'css_page_id' => 'dictionaries',
        'l10n'        => $l10n,
        'europe'      => $europe,
        'dict'        => $dictionaries,
        'utils'           => $utils,

    ]
)->render();
