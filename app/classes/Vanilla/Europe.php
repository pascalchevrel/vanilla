<?php

declare(strict_types=1);

namespace Vanilla;

class Europe
{
    public array $countries = [
        /* https://www.worldometers.info/world-population/europe-population/ */
        'ES' => [
            'name'       => 'Spain',
            'languages'  => ['es-ES', 'ca', 'gl', 'eu', 'ast', 'ca-valencia',],
            'population' => 47_893_887,
            'products'   => ['Firefox', 'Focus', 'Fenix', 'Thunderbird',],
            'dictionary' => true,
            'community'  => ['http://www.proyectonave.es/',],
        ],
        'GR' => [
            'name'       => 'Greece',
            'languages'  => ['el'],
            'population' => 9_959_557,
            'products'   => ['Firefox', 'Focus', 'Fenix', 'Thunderbird',],
            'dictionary' => false,
            'community'  => [],
        ],
        'IT' => [
            'name'       => 'Italy',
            'languages'  => ['it', 'lij'],
            'population' => 59_153_758,
            'products'   => ['Firefox', 'Focus', 'Fenix', 'Thunderbird',],
            'dictionary' => false,
            'community'  => ['https://www.mozillaitalia.org/'],
        ],
        'PT' => [
            'name'       => 'Portugal',
            'languages'  => ['pt-PT'],
            'population' => 10_414_399,
            'products'   => ['Firefox', 'Focus', 'Fenix', 'Thunderbird',],
            'dictionary' => false,
            'community'  => [],
        ],
        'RS' => [
            'name'       => 'Serbia',
            'languages'  => ['sr'],
            'population' => 6_698_024,
            'products'   => ['Firefox', 'Focus', 'Fenix', 'Thunderbird',],
            'dictionary' => false,
            'community'  => [],
        ],
    ];

    public function __construct() {}

    public function getPopulation(): int
    {
        return array_sum(array_column($this->countries, 'population'));
    }
}