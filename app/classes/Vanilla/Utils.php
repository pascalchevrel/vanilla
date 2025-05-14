<?php

declare(strict_types=1);

namespace Vanilla;

class Utils
{
    public static function HTMLlinkFromURL(?string $url, string $opt_html = ''): string
    {
        if (is_null($url)) {
            return '';
        }
        return "<a {$opt_html} href=\"{$url}\">" . parse_url($url, PHP_URL_HOST) . "</a>";
    }

    public static function devConfAgendaURL(string $country, string|null $year = null): string
    {
        return 'https://developers.events/#/' . ($year ??= date(Y)) . '/calendar?country=' . $country;
    }

}