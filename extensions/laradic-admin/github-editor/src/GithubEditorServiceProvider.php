<?php
 /**
 * Part of the Laradic packages.
 */
namespace LaradicAdmin\GithubEditor;
use Laradic\Config\Traits\ConfigProviderTrait;
use Laradic\Support\ServiceProvider;
use Laradic\Themes\Traits\ThemeProviderTrait;

/**
 * Class GithubEditorServiceProvider
 *
 * @package     LaradicAdmin\GithubEditor
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class GithubEditorServiceProvider extends ServiceProvider
{
    use ThemeProviderTrait;
    use ConfigProviderTrait;

    protected $providers = [
        'LaradicAdmin\GithubEditor\Providers\RouteServiceProvider'
    ];

    public function boot()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = parent::boot();
        $this->addPackagePublisher('laradic-admin/github-editor', __DIR__ . '/../resources/theme');
        require_once __DIR__ . '/Http/navigation.php';
    }

    public function register()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = parent::register();

        $this->addConfigComponent('laradic-admin/github-editor', 'laradic-admin/github-editor', __DIR__ . '/../resources/config');

    }
}
