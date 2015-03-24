<?php

$classPath = 'Laradic\Extensions\Finder';


require_once __DIR__ . '/Laradic/Dev/resources/stub/Booter.php';
$tempdir = __DIR__ . '/_test';
$app     = Booter::create(__DIR__, $tempdir);

$class = new $classPath();
