<?php
 /**
 * Part of the Laradic packages.
 */
namespace Anigrab;
use Laradic\Support\ServiceProvider;

/**
 * Class AnigrabServiceProvider
 *
 * @package     Anigrab
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class AnigrabServiceProvider extends ServiceProvider
{

    public function boot()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = parent::boot();
    }

    public function register()
    {
        /** @var \Illuminate\Foundation\Application $app */
        $app = parent::register();
    }
}
