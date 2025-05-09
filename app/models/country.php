<?php

declare(strict_types=1);

use Vanilla\Firefoxl10n;
use \Vanilla\Europe;

$europe = new Europe();
$country = 'ES'; // Default to Spain

if (isset($_GET['code']) && in_array($_GET['code'], array_keys($europe->countries))) {
    $country = $_GET['code'];
}

return [
    $country,
    $europe,
];
