<?php namespace App;


use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\VarDumper\VarDumper;
use Themes;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Themes::addNamespace('theme', 'theme');
      #  $this->app->make('cache');

    }

    public function register()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = $this->app;

        $fs = $app->make('files');
        $viewFiles = $fs->glob(storage_path('framework/views/*'));
        #$fs->delete($viewFiles);

        $app->register('Laradic\Support\SupportServiceProvider');
        $app->register('Collective\Html\HtmlServiceProvider');
        $app->register('Laradic\Config\ConfigServiceProvider');
        $app->register('Laradic\Debug\DebugServiceProvider');
        $app->register('Laradic\Dev\DevServiceProvider');
        $app->register('Radic\BladeExtensions\BladeExtensionsServiceProvider');
        $app->register('Laradic\Themes\ThemeServiceProvider');
        $app->register('Laradic\Extensions\ExtensionsServiceProvider');
        $app->register('Anigrab\AnigrabServiceProvider');

        AliasLoader::getInstance()->alias('Form', 'Collective\Html\FormFacade');
        AliasLoader::getInstance()->alias('HTML', 'Collective\Html\HtmlFacade');


    }
}
