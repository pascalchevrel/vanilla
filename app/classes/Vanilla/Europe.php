<?php

declare(strict_types=1);

namespace Vanilla;

class Europe
{
    /*
        The data should be revised regularly and depends on syncing with multiple online sources
        The data is known as correct at the date below.
    */
    public string $data_stamp = '2025-05-13';

    public array $countries = [
        'ES' => [
            'name'             => 'Spain',
            'languages'        => ['an', 'ast', 'ca', 'ca-valencia', 'es-ES',  'eu', 'gl',],
            'main_language'    => 'es-ES',
            'population'       => 47_893_887, // https://www.worldometers.info/world-population/europe-population/
            'populationCore'   => 0.83, // Population age 10-80, various sources from ChatGPT
            'community'        => 'http://www.proyectonave.es/',
            'net_access'       => 0.9683, // Eurostat data https://tradingeconomics.com/romania/level-of-internet-access-eurostat-data.html
            'desktop_access'   => 0.53,
            'bugzilla_keyword' => 'spain',
        ],
        'GR' => [
            'name'             => 'Greece',
            'languages'        => ['el'],
            'main_language'    => 'el',
            'population'       => 9_959_557,
            'populationCore'   => 0.83,
            'community'        => '',
            'net_access'       => 0.8689,
            'desktop_access'   => 0.45,
            'bugzilla_keyword' => 'greece',
        ],
        'IT' => [
            'name'             => 'Italy',
            'languages'        => ['it', 'lij', 'scn'],
            'main_language'    => 'it',
            'population'       => 59_153_758,
            'populationCore'   => 0.82,
            'community'        => 'https://www.mozillaitalia.org/',
            'net_access'       => 0.9341,
            'desktop_access'   => 0.48,
            'bugzilla_keyword' => 'italy',
        ],
        'PT' => [
            'name'             => 'Portugal',
            'languages'        => ['pt-PT'],
            'main_language'    => 'pt-PT',
            'population'       => 10_414_399,
            'populationCore'   => 0.83,
            'community'        => '',
            'net_access'       => 0.9060,
            'desktop_access'   => 0.47,
            'bugzilla_keyword' => 'portugal',
        ],
        'RO' => [
            'name'             => 'Romania',
            'languages'        => ['ro'],
            'main_language'    => 'ro',
            'population'       => 18_928_687,
            'populationCore'   => 0.83,
            'community'        => '',
            'net_access'       => 0.9457,
            'desktop_access'   => 0.53,
            'bugzilla_keyword' => 'romania',
        ],
        'RS' => [
            'name'             => 'Serbia',
            'languages'        => ['sr'],
            'main_language'    => 'sr',
            'population'       => 6_698_024,
            'populationCore'   => 0.83,
            'community'        => '',
            'net_access'       => 0.854,
            'desktop_access'   => 0.52,
            'bugzilla_keyword' => 'serbia',
        ],
    ];

    public function __construct() {}

    public function getPopulation(): int
    {
        return array_sum(array_column($this->countries, 'population'));
    }

    public function getDesktopPotentialMarket(string $country_code = 'ALL'): int
    {
        $countries = ($country_code == 'ALL')
            ? array_keys($this->countries)
            : [$country_code];

        $market = 0;

        foreach ($countries as $country_code) {
            $market += $this->countries[$country_code]['population']  // Total population
                * $this->countries[$country_code]['populationCore']  // People 10-75 yo
                * $this->countries[$country_code]['net_access']      // Country % access to internet
                * $this->countries[$country_code]['desktop_access']; // % of internet traffic from Desktop
        }

        return (int) $market;
    }

    public function getLocaleData(string $country) : array
    {
        $data = [];
        foreach ($this->countries[$country]['languages'] as $locale) {
            $data[$locale] = new FirefoxL10n($locale)->getLocale();
        }

        return $data;
    }

}