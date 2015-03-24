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
        $this->app->register('Collective\Html\HtmlServiceProvider');
       # $this->app->register('Darsain\Console\ConsoleServiceProvider');
      #  $this->app->register('Laradic\Config\ConfigServiceProvider');
        $this->app->register('Laradic\Debug\DebugServiceProvider');
        $this->app->register('Radic\BladeExtensions\BladeExtensionsServiceProvider');
        $this->app->register('Laradic\Themes\ThemeServiceProvider');
        $this->app->register('Laradic\Docs\DocsServiceProvider');
        #$this->app->register('Laradic\Admin\AdminServiceProvider');
        $this->app->register('Laradic\Extensions\ExtensionsServiceProvider');
        /** @var \Illuminate\Foundation\Application $app */
        $app = $this->app;

        #$app->make('events')->sf;

        #\App::make('router')->
        AliasLoader::getInstance()->alias('Form', 'Collective\Html\FormFacade');
        AliasLoader::getInstance()->alias('Html', 'Collective\Html\HtmlFacade');


    }
}
