<?php

use Illuminate\Contracts\Foundation\Application;
use Laradic\Extensions\Extension;
use Laradic\Extensions\ExtensionFactory;

return array(
    'name' => 'asf',
    'slug' => 'asdf/asf',
    'dependencies' => [
    ],
    'register' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {

    },
    'boot' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {
        $app->register('{namespace}\asfServiceProvider');
    },
    'install' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {

    },
    'uninstall' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {

    }
);
