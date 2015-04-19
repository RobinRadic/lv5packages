<?php

use Illuminate\Foundation\Application;
use Laradic\Extensions\Extension;
use Laradic\Extensions\ExtensionFactory;

return array(
    'name'         => 'Github Editor',
    'slug'         => 'laradic-admin/github-editor',
    'dependencies' => [
        'laradic/packadic',
        'laradic/admin'
    ],
    'register'     => function (Application $app, Extension $extension, ExtensionFactory $extensions)
    {
        $app->register('LaradicAdmin\GithubEditor\GithubEditorServiceProvider');
    },
    'boot'         => function (Application $app, Extension $extension, ExtensionFactory $extensions)
    {
    },
    'install'      => function (Application $app, Extension $extension, ExtensionFactory $extensions)
    {
    },
    'uninstall'    => function (Application $app, Extension $extension, ExtensionFactory $extensions)
    {
    }
);
