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
        $html = $app->make('html');
        $html->macro('dropdown_menu', function($title, array $links){
            $html = '<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $title . '</a>';
            $html .= '<ul class="dropdown-menu">';
            foreach($links as $title => $route)
            {
                $html .= '<li><a href="' . URL::route($route) . '">' . $title . '</a></li>';
            }
            $html .= '</ul></li>';
            return $html;
        });
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
