<?php



define('LARAVEL_START', microtime(true));


// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernnel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernnel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernnel->terminate($request,$response);
