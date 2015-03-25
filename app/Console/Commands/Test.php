<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Laradic\Support\String;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Class Test
 *
 * @package     App\Console\Commands
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 * @method
 */
class Test extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'test:one';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
       $this->line(String::ensureLeft('sadf asd asd', 'fff'));
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
		#	['example', InputArgument::REQUIRED, 'An example argument.'],
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
			#['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
		];
	}

}
