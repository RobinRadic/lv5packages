<?php namespace App;


use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\VarDumper\VarDumper;
use Themes;

#use Themes;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Themes::addNamespace('theme', 'theme');
    #    Themes::addNamespace('field-types', 'field-types');
      #  $this->app->make('cache');

    }

    public function register()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = $this->app;

        $fs = $app->make('files');
        $viewFiles = $fs->glob(storage_path('framework/views/*'));
        $fs->delete($viewFiles);

        $app->register('Laradic\Support\SupportServiceProvider');
        $app->register('Laradic\Config\ConfigServiceProvider');
        $app->register('Laradic\Debug\DebugServiceProvider');
        $app->register('Radic\BladeExtensions\BladeExtensionsServiceProvider');
        #$app->register('Laradic\Dev\DevServiceProvider');
        $app->register('Laradic\Themes\ThemeServiceProvider');
        $app->register('Laradic\Generators\GeneratorsServiceProvider');
        $app->register('Laradic\Extensions\ExtensionsServiceProvider');
        $app->register('Test\Test\TestServiceProvider');

        return;
        $app->register('Collective\Html\HtmlServiceProvider');
        $app->register('Laradic\Themes\ThemeServiceProvider');

       # $app->register('Anigrab\AnigrabServiceProvider');

        AliasLoader::getInstance()->alias('Form', 'Collective\Html\FormFacade');
        AliasLoader::getInstance()->alias('HTML', 'Collective\Html\HtmlFacade');

        if($app->runningInConsole())
        {
         #   $app->register('App\Providers\ConsoleServiceProvider');
        }
    }
}
