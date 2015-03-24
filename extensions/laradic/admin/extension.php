<?php

use Illuminate\Contracts\Foundation\Application;
use Laradic\Extensions\Extension;
use Laradic\Extensions\ExtensionCollection;

return array(
    'name' => 'Test',
    'slug' => 'laradic/test',
    'dependencies' => [
        'laradic/test2'
    ],
    'register' => function(Application $app, Extension $extension, ExtensionCollection $extensions)
    {

    },
    'boot' => function(Application $app, Extension $extension, ExtensionCollection $extensions)
    {

    }
);
