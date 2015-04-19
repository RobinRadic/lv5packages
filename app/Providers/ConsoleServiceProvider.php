<?php
 /**
 * Part of the Laradic packages.
 * MIT License and copyright information bundled with this package in the LICENSE file.
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
namespace App;

use Laradic\Support\AbstractConsoleProvider;

/**
 * Class ConsoleServiceProvider
 *
 * @package     App
 */
class ConsoleServiceProvider extends AbstractConsoleProvider
{

    /**
     * The namespace where the commands are
     *
     * @var string
     */
    protected $namespace = 'App\Console';

    /**
     * The commands that should be registered.
     * className (without Command suffix) => 'command.slug'
     *
     * @var array
     */
    protected $commands = [
        // Something resolves to class name 'SomethingCommand'
        'Something' => 'command.app.something'
    ];
}
