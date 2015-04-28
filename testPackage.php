<?php

$classPath = 'Laradic\Support\Sorter';


require_once __DIR__ . '/workbench/laradic/dev/resources/stub/Booter.php';
$tempdir = __DIR__ . '/_test';
$app     = Booter::create(__DIR__, $tempdir);

$class = new $classPath();
