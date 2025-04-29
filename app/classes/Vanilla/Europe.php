<?php

declare(strict_types=1);

namespace Vanilla;

class Europe
{
    public array $countries = [
        'ES' => [
            'name'           => 'Spain',
            'languages'      => ['es-ES', 'ca', 'gl', 'eu', 'ast', 'ca-valencia',],
            'population'     => 47_893_887, // https://www.worldometers.info/world-population/europe-population/
            'populationCore' => 0.82, // Population age 10-75, various sources
            'products'       => ['Firefox', 'Focus', 'Fenix', 'Thunderbird',],
            'dictionary'     => true,
            'community'      => 'http://www.proyectonave.es/',
            'market_share'   => 0,
            'net_access'     => 0.9683, // Eurostat data https://tradingeconomics.com/romania/level-of-internet-access-eurostat-data.html
            'desktop_access' => 0.35,
        ],
        'GR' => [
            'name'           => 'Greece',
            'languages'      => ['el'],
            'population'     => 9_959_557,
            'populationCore' => 0.8,
            'products'       => ['Firefox', 'Focus', 'Fenix', 'Thunderbird',],
            'dictionary'     => false,
            'community'      => '',
            'market_share'   => 0,
            'net_access'     => 0.8689,
            'desktop_access' => 0.39,
        ],
        'IT' => [
            'name'           => 'Italy',
            'languages'      => ['it', 'lij'],
            'population'     => 59_153_758,
            'populationCore' => 0.78,
            'products'       => ['Firefox', 'Focus', 'Fenix', 'Thunderbird',],
            'dictionary'     => false,
            'community'      => 'https://www.mozillaitalia.org/',
            'market_share'   => 0,
            'net_access'     => 0.9341,
            'desktop_access' => 0.36,
        ],
        'PT' => [
            'name'           => 'Portugal',
            'languages'      => ['pt-PT'],
            'population'     => 10_414_399,
            'populationCore' => 0.78,
            'products'       => ['Firefox', 'Focus', 'Fenix', 'Thunderbird',],
            'dictionary'     => false,
            'community'      => '',
            'market_share'   => 0,
            'net_access'     => 0.9060,
            'desktop_access' => 0.659,
        ],
        'RO' => [
            'name'           => 'Romania',
            'languages'      => ['ro'],
            'population'     => 18_928_687,
            'populationCore' => 0.82,
            'products'       => ['Firefox', 'Focus', 'Fenix', 'Thunderbird',],
            'dictionary'     => false,
            'community'      => '',
            'market_share'   => 0,
            'net_access'     => 0.9457,
            'desktop_access' => 0.474,
        ],
        'RS' => [
            'name'           => 'Serbia',
            'languages'      => ['sr'],
            'population'     => 6_698_024,
            'populationCore' => 0.79,
            'products'       => ['Firefox', 'Focus', 'Fenix', 'Thunderbird',],
            'dictionary'     => false,
            'community'      => '',
            'market_share'   => 0,
            'net_access'     => 0,
            'desktop_access' => 0.388,
        ],
    ];

    public function __construct() {}

    public function getPopulation(): int
    {
        return array_sum(array_column($this->countries, 'population'));
    }

    public function getDesktopPotentialMarket(string $country_code): int
    {
        return (int)
            ($this->countries[$country_code]['population'] // Total population
            * $this->countries[$country_code]['populationCore'] // People 10-75 yo
            * $this->countries[$country_code]['net_access'] // Country % access to internet
            * $this->countries[$country_code]['desktop_access']); // % of internet traffic from Desktop
    }
}