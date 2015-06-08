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

        $fs        = $app->make('files');
        $viewFiles = $fs->glob(storage_path('framework/views/*'));
        $fs->delete($viewFiles);

        $app->register('Laradic\Support\SupportServiceProvider');
        $app->register('Laradic\Config\ConfigServiceProvider');
        $app->register('Laradic\Debug\DebugServiceProvider');
        $app->register('Radic\BladeExtensions\BladeExtensionsServiceProvider');
        $app->register('Laradic\Themes\ThemeServiceProvider');

        $app->booting(function ()
        {
            $this->alias('Themes', 'Laradic\Themes\Facades\Themes');
            $this->alias('Navigation', 'Laradic\Themes\Facades\Navigation');
            $this->alias('Asset', 'Laradic\Themes\Facades\Asset');
        });

        return;
        $app->register('Laradic\Generators\GeneratorsServiceProvider');
        $app->register('Laradic\Extensions\ExtensionsServiceProvider');
        $app->register('Test\Test\TestServiceProvider');


    }


    protected function alias($a, $b)
    {
        AliasLoader::getInstance()->alias($a, $b);
    }
}
