<?php

use Illuminate\Foundation\Application;
use Laradic\Extensions\Extension;
use Laradic\Extensions\ExtensionCollection;

return array(
    'name'         => 'Github Editor',
    'slug'         => 'laradic-admin/github-editor',
    'dependencies' => [
        'laradic/packadic',
        'laradic/admin'
    ],
    'register'     => function (Application $app, Extension $extension, ExtensionCollection $extensions)
    {
        $app->register('LaradicAdmin\GithubEditor\GithubEditorServiceProvider');
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
