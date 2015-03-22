<?php

$classPath = 'Laradic\Tests\Docs\TestPackage';


require_once __DIR__ . '/laradic/dev/stub/Booter.php';
$tempdir = __DIR__ . '/_test';
$app     = Booter::create(__DIR__, $tempdir);

new $classPath($app);
