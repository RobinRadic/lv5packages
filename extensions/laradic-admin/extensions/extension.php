<?php

use Illuminate\Foundation\Application;
use Laradic\Extensions\Extension;
use Laradic\Extensions\ExtensionCollection;

return array(
    'name'         => 'Extensions',
    'slug'         => 'laradic-admin/extensions',
    'dependencies' => [
        'laradic/packadic',
        'laradic/admin'
    ],
    'register'     => function (Application $app, Extension $extension, ExtensionCollection $extensions)
    {
        Debugger::log('extensions list', [
            'extensions' => Extensions::all(),
            'bindings'   => $app->getBindings()
        ]);
        $app->register('LaradicAdmin\Extensions\ExtensionsServiceProvider');
    },
    'boot'         => function (Application $app, Extension $extension, ExtensionCollection $extensions)
    {
    },
    'install'      => function (Application $app, Extension $extension, ExtensionCollection $extensions)
    {
    },
    'uninstall'    => function (Application $app, Extension $extension, ExtensionCollection $extensions)
    {
    }
);
