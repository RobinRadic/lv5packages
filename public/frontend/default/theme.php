<?php


use Illuminate\Contracts\Foundation\Application;
use Laradic\Themes\Assets\AssetGroup;
use Laradic\Themes\Theme;

return [
    'parent'   => null,
    'name'     => 'Default theme',
    'slug'     => 'default',
    'version'  => '0.0.1',
    'register' => function (Application $app, Theme $theme)
    {
        #$app->log->info('Registering theme: ' . $theme->getSlug());
    },
    'boot'     => function (Application $app, Theme $theme)
    {
        $app->log->info('Booting theme: ' . $theme->getSlug());
        $themes = Themes::count();
        Asset::group('base')
            ->add('jquery', 'theme::scripts/plugins/jquery.js')
            ->add('bootstrap', 'theme::scripts/plugins/bootstrap.custom.js', ['jquery'])
            ->add('bootstrap', 'theme::scripts/plugins/bootstrap.custom.css')
            ->add('bootbox', 'theme::scripts/plugins/bootbox.js', ['jquery', 'bootstrap'])
            ->add('bootbox3', 'theme::scripts/plugins/bootbox.js', ['jquery', 'bootstrap', 'bootbox2'])
            ->add('bootbox2', 'theme::scripts/plugins/bootbox.js', ['jquery', 'bootstrap', 'bootbox1'])
            ->add('bootbox1', 'theme::scripts/plugins/bootbox.js', ['jquery', 'bootstrap', 'bootbox']);

        Asset::group('red')->add('bootbox', 'theme::scripts/plugins/bootbox.js');
    }


];
