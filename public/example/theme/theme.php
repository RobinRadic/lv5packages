<?php

use Illuminate\Contracts\Foundation\Application;
use Laradic\Themes\Theme;

return [
    'parent'   => null,
    'name'     => 'Example theme',
    'slug'     => 'example/theme',
    'version'  => '0.0.1',
    'register' => function (Application $app, Theme $theme)
    {
    },
    'boot'     => function (Application $app, Theme $theme)
    {
        Themes::addNamespace('something', 'something');
        Asset::group('base')
            ->add('jquery', 'plugins/jquery/dist/jquery.min.js')
            ->add('bootstrap', 'bootstrap/dist/js/bootstrap.min.js', ['jquery'])
            ->add('bootstrap', 'bootstrap/dist/css/bootstrap.min.css')
            ->add('bootbox', 'something::bootbox/bootbox.js', ['jquery', 'bootstrap'])
            ->add('slimscroll', 'jquery-slimscroll/jquery.slimscroll.js', ['jquery'])
            ->add('modernizr', 'modernizr/modernizr.js')
            ->add('moment', 'moment/moment.js')
            ->add('highlightjs', 'highlightjs/highlight.pack.js')
            ->add('highlightjs', 'highlightjs/styles/zenburn.css');

        Asset::group('ie9')
            ->add('respond', 'respond/dest/respond.min.js')
            ->add('html5shiv', 'html5shiv/dist/html5shiv.js');
    }


];
