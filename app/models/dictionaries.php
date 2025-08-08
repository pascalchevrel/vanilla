<?php

declare(strict_types=1);

use Vanilla\Dictionaries;
use Vanilla\FirefoxL10n;
use Vanilla\World;
use Vanilla\Utils;

return [
    new FirefoxL10n(),
    new World(),
    new Dictionaries(),
    new Utils(),
];
