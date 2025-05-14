<?php

declare(strict_types=1);

use Vanilla\Dictionaries;
use Vanilla\FirefoxL10n;
use Vanilla\Europe;
use \Vanilla\Utils;

return [
    new FirefoxL10n(),
    new Europe(),
    new Dictionaries(),
    new Utils(),
];
