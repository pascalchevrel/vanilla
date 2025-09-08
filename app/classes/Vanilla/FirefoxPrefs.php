<?php declare(strict_types=1);

namespace Vanilla;

/**
 * This file parses the all.js file we ship with
 * Source: https://raw.githubusercontent.com/mozilla-firefox/firefox/refs/heads/main/modules/libpref/init/all.js
 *
 * The goal is to extract prefs activated only to specific countries
 */
class FirefoxPrefs
{
    protected $firefox_defaults1 = 'https://raw.githubusercontent.com/mozilla-firefox/firefox/refs/heads/release/modules/libpref/init/all.js';
    protected $firefox_defaults2 = 'https://raw.githubusercontent.com/mozilla-firefox/firefox/refs/heads/release/browser/app/profile/firefox.js';

    public function __construct() {}

    /**
     * Return all the information we have for a locale code in this class
     */
    public function parse(): array
    {
        $all_js = file($this->firefox_defaults1);
        // $all_js = [];
        $firefox_js = file($this->firefox_defaults2);
        // $firefox_js = [];
        $data = array_merge($all_js, $firefox_js);
        $data = array_map('trim', $data); // remove empty lines and white space
        $data = array_filter($data); // remove empty lines and white space
        $data = array_filter($data, fn($a) => ! str_starts_with($a, '//')); // remove js comment lines
        $data = array_filter($data, fn($a) => ! str_starts_with($a, '#')); // remove ifdef  comment lines
        $data = array_filter($data, fn($a) => ! str_starts_with($a, '#')); // remove ifdef  comment lines
        $data = array_map( // remove inline js comment
            fn($a) => trim(explode('//', $a)[0]),
            $data
        );
        // remove inline js pref() call
        $data = array_map(fn($a) => ltrim($a, 'pref('), $data);
        $data = array_map(fn($a) => trim($a, ';'), $data);
        $data = array_map(fn($a) => trim($a, ')'), $data);
        $data = array_filter($data); // remove empty lines

        $output = [];
        foreach ($data as $item) {
            if (! str_contains($item, ",")) continue;
            [$key, $value] = array_map('trim', explode(',', $item, 2));
            $key   = trim((string) $key, '" ');
            $value = trim((string) $value, '" ');
            $output[$key] = $value;
        }

        return $output;
    }

    /*
        Return all the preferences with a country code reduction
    */
    public function getRegionalPrefs(): array
    {
        return array_filter($this->parse(), fn($a) => str_contains($a, 'US,'));
    }
}