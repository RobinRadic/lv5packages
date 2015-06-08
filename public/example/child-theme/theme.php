<?php

use Illuminate\Contracts\Foundation\Application;
use Laradic\Themes\Theme;

return [
    'parent'   => 'example/theme',
    'name'     => 'Example Child theme',
    'slug'     => 'example/child-theme',
    'version'  => '0.0.1',
    'register' => function (Application $app, Theme $theme)
    {
    },
    'boot'     => function (Application $app, Theme $theme)
    {

    }


];
