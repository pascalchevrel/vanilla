<?php
/*
    Short script to import CSV data from Stat Counter
*/


$country      = 'Serbia';
$country_code = 'RS';
$year         = '2025';
$month        = '04';

$country_lower = strtolower($country);
$previous_year = (string) ((int) $year - 1);

$source= 'https://gs.statcounter.com/browser-market-share/desktop/'
        . $country_lower
        . '/chart.php?device=Desktop&device_hidden=desktop&statType_hidden=browser&region_hidden='
        . $country_code
        . '&granularity=monthly&statType=Browser&region='
        . $country
        . '&fromInt=' . (string) ($year -1) . $month
        . '&toInt=' . (string) $year . $month
        . '&fromMonthYear=' . $previous_year . '-' . $month
        . '&toMonthYear=' . $year . '-' . $month
        . '&csv=1';

// Get the data
$data = file($source);
$rows = array_map(fn($v) => str_getcsv($v, escape: "\\"), $data);
$header = array_shift($rows);

$csv = [];
foreach($rows as $row) {
    /* reformat all csv to an array */
    $csv[$row[0]] = array_combine($header, $row);
}

/* Extract the Firefox data */
$firefox = array_column($csv, 'Firefox', 'Date');

echo "        '{$country_code}' => [\n";
foreach ($firefox as $key => $value) {
    echo "            '{$key}' => {$value},\n";
}
echo "            ],\n";
