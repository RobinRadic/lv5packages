<?php
/**
 * Part of the Laradic packages.
 */
namespace LaradicAdmin\Extensions;

use Debugger;
use Illuminate\Routing\Route;
use Laradic\Support\ServiceProvider;
use Laradic\Themes\Traits\ThemeProviderTrait;

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
    use ThemeProviderTrait;

    protected $providers = [
        'LaradicAdmin\Extensions\Providers\RouteServiceProvider'
    ];

    public function boot()
    {
        /** @var \Illuminate\Contracts\Foundation\Application $app */
        $app = parent::boot();
        $this->addPackagePublisher('laradic-admin/extensions', __DIR__ . '/../resources/theme');

        require_once __DIR__ . '/Http/navigation.php';
    }

    public function register()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = parent::register();

    }
}
