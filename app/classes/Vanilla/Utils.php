<?php

declare(strict_types=1);

namespace Vanilla;

class Utils
{
    public static function HTMLlinkFromURL(string $url, string $opt_html = ''): string
    {
        return "<a {$opt_html} href=\"{$url}\">" . parse_url($url, PHP_URL_HOST) . "</a>";
    }

}