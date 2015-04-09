<?php
 /**
 * Part of the Laradic packages.
 */
namespace Anigrab\Console;
use Laradic\Support\AbstractConsoleCommand;

/**
 * Class GrabCommand
 *
 * @package     Anigrab\Console
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class GrabCommand extends AbstractConsoleCommand
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'ani:grab';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        // @todo implement this
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
           # ['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
           # ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
