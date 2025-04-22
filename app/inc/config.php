<?php

declare(strict_types=1);

// We always work with UTF8 encoding
mb_internal_encoding('UTF-8');

// Make sure we have a timezone set
date_default_timezone_set('UTC');

// Set locale to en-US, avoids setting it in every twig template
locale_set_default('en-US');

// Application globals paths
define('INSTALL_ROOT', dirname(__DIR__, 2) . '/');

const CONTROLLERS = INSTALL_ROOT . 'app/controllers/';
const DATA        = INSTALL_ROOT . 'app/data/';
const MODELS      = INSTALL_ROOT . 'app/models/';
const VIEWS       = INSTALL_ROOT . 'app/views/';
const TEST_FILES  = INSTALL_ROOT . 'tests/Files/';
const CACHE_PATH  = INSTALL_ROOT . 'cache/';

// Prepare caching
define('CACHE_ENABLED', ! isset($_GET['nocache']));
define('CACHE_TIME', 900); // 15 minutes

// Autoloading of classes (both /vendor/ and /app/classes)
require_once INSTALL_ROOT . 'vendor/autoload.php';

// Are we on one of our staging sites
$http_host = isset($_SERVER['HTTP_HOST']) ? (string) $_SERVER['HTTP_HOST'] : null;

define('LOCALHOST',
    ! is_null($http_host)
    && (
        str_starts_with($http_host, 'localhost')
        || str_starts_with($http_host, '127.0.0.1')
    )
);

const PRODUCTION = ! LOCALHOST;

// Define a Nonce for inline scripts
define('NONCE', bin2hex(random_bytes(20)));

// Clean up temp variables from global space
unset($http_host);
