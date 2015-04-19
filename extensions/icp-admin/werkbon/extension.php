<?php

use Illuminate\Contracts\Foundation\Application;
use Laradic\Extensions\Extension;
use Laradic\Extensions\ExtensionFactory;

return array(
    'name' => 'Werkbon',
    'slug' => 'icp-admin/werkbon',
    'dependencies' => [
        'laradic/packadic',
        'laradic/admin'
    ],
    'seeds' => [],
    'register' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {

    },
    'boot' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {
        $app->register('IcpAdmin\Werkbon\WerkbonServiceProvider');
    },
    'install' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {

    },
    'uninstall' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {

    }
);
