<?php
 /**
 * Part of the Laradic packages.
 */
namespace LaradicAdmin\Attributes;
use Illuminate\Foundation\Application;
use Laradic\Support\Path;
use Laradic\Support\ServiceProvider;
use Laradic\Config\Traits\ConfigProviderTrait;
use Laradic\Themes\Traits\ThemeProviderTrait;
use LaradicAdmin\Attributes\FieldTypes\Factory;
use LaradicAdmin\Attributes\Repositories\EloquentAttributeRepository;

/**
 * Class ServiceProvider
 *
 * @package     LaradicAdmin\Attributes
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class AttributesServiceProvider extends ServiceProvider
{

    use ConfigProviderTrait, ThemeProviderTrait;

    protected $providers = [
        'LaradicAdmin\Attributes\Providers\RouteServiceProvider',

    ];
    public function boot()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = parent::boot();

        $themes = $app->make('themes');
        $view = $app->make('view');
        $location = $themes->getActive()->getPath('namespaces') . '/field-types';
        $view->addLocation($location);
        $view->addNamespace('field-types', $location);
        $themes->addNamespacePublisher('field-types', Path::join(__DIR__, $this->resourcesPath, 'field-types'));
        require_once __DIR__ . '/Http/navigation.php';

    }

    /** @inheritdoc */
    public function register()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = parent::register();

        $app->singleton('LaradicAdmin\Attributes\Repositories\EloquentAttributeRepository', function(Application $app)
        {
            return new EloquentAttributeRepository;
        });

        $this->registerFieldTypes();

        // Replace the User and Group models with our own
        $app->make('sentry.user')->setModel('LaradicAdmin\Attributes\Models\User');
        $app->make('sentry.group')->setModel('LaradicAdmin\Attributes\Models\Group');

    }

    /**
     * Registers/binds the FieldTypes classes to the IOC container
     */
    protected function registerFieldTypes()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = $this->app;



        $app->singleton('attributes.field-types', function (Application $app)
        {
            $assets = $app->make('assets');
            $assetGroup = $assets->group('field-types');

            $factory = new Factory($app, $assets, $app->make('view'));

            $fieldTypes = ['text'];

            foreach ($fieldTypes as $fieldType)
            {
                $app->bind('attributes.field-types.' . $fieldType, function(Application $app) use ($fieldType, $factory) {
                    $class = '\LaradicAdmin\Attributes\FieldTypes\\' . ucfirst($fieldType) . 'FieldType';
                    return new $class($factory, $app->make('view'));
                });
                $factory->register($fieldType, 'attributes.field-types.' . $fieldType);
            }

            return $factory;
        });
        $app->alias('attributes.field-types', 'LaradicAdmin\Attributes\Contracts\FieldTypes');
        $app->alias('FieldTypes', 'LaradicAdmin\Attributes\Facades\FieldTypes');

    }
}
