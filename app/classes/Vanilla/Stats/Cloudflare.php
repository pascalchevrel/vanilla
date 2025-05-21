<?php declare(strict_types=1);

namespace Vanilla\Stats;

/*
    This is Firefox data per country for Desktop from Statcounter
    https://gs.statcounter.com/browser-market-share/desktop/europe

    There is a utility script in bin/getStatcounter.php that imports
    the CSV file for a country and outputs it as an array in the terminal.
 */
class Cloudflare
{
    protected $data_stamp = '2025-05-13';
    public static $report = 'https://radar.cloudflare.com/year-in-review/';

    public function __construct() {}

    public static function annualReportURL(string $country_code, int $year = 2024): string
    {
        return self::$report . (string) $year . '/' . strtolower($country_code) . '#browser-market-share';
    }
}