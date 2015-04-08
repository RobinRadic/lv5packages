<?php
/**
 * Part of the Laradic packages.
 */
namespace LaradicAdmin\Extensions;

use Debugger;
use Illuminate\Routing\Route;
use Laradic\Support\ServiceProvider;

/**
 * Class ExtensionsProvider
 *
 * @package     LaradicAdmin\Extensions
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class ExtensionsServiceProvider extends ServiceProvider
{
    protected $providers = [
        'LaradicAdmin\Extensions\Providers\RouteServiceProvider'
    ];

    public function boot()
    {
        /** @var \Illuminate\Contracts\Foundation\Application $app */
        $app = parent::boot();
    }

    public function register()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = parent::register();
        Debugger::log('extensions service provider register', $app->getBindings());
        #$nav = $app->make('navigation');

   #     $nav->add('admin-extensions', 'Extensions', 'a');

    }
}
