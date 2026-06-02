<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

foreach (['cache', 'views', 'sessions'] as $dir) {
    $path = __DIR__ . "/../storage/framework/$dir";
    if (!is_dir($path)) {
        mkdir($path, 0775, true);
    }
}
if (!is_dir(__DIR__ . '/../storage/logs')) {
    mkdir(__DIR__ . '/../storage/logs', 0775, true);
}

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
