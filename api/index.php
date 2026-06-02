<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$tmpDir = '/tmp/storage';
if (!is_dir($tmpDir)) {
    @mkdir($tmpDir . '/framework/views', 0775, true);
    @mkdir($tmpDir . '/logs', 0775, true);
}

$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/index.php';
$_SERVER['SCRIPT_NAME'] = '/api/index.php';

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
