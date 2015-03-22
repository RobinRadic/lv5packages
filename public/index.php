<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

require __DIR__.'/../bootstrap/autoload.php';



$app = require_once __DIR__.'/../bootstrap/app.php';

// set the public path to this directory
$app->bind('path.public', function() {
    return __DIR__;
});

$app->bind('path.base', function() {
    return __DIR__ . '/..';
});


#$app->bind('Illuminate\Contracts\Http\Kernel', 'Radic\Dev\Exceptions\WhoopsHandler');

$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
	$request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
