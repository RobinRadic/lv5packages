<?php
 /**
 * Part of the Laradic packages.
 */
namespace IcpAdmin\Werkbon;
use Laradic\Support\ServiceProvider;
use Laradic\Config\Traits\ConfigProviderTrait;
use Laradic\Themes\Traits\ThemeProviderTrait;
/**
 * Class ServiceProvider
 *
 * @package     IcpAdmin\Werkbon
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class WerkbonServiceProvider extends ServiceProvider
{

    use ConfigProviderTrait, ThemeProviderTrait;

    protected $providers = [
        'IcpAdmin\Werkbon\Providers\RouteServiceProvider',

    ];
    public function boot()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = parent::boot();
        $this->addPackagePublisher('icp-admin/werkbon', realpath(__DIR__ . '/../resources/theme'));
    }

    public function register()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = parent::register();
        $this->addConfigComponent('icp-admin/werkbon', 'icp-admin/werkbon', realpath(__DIR__.'/../resources/config'));

        if($app->runningInConsole())
        {
            $app->register('IcpAdmin\Werkbon\Providers\ConsoleServiceProvider');
        }
    }
}
