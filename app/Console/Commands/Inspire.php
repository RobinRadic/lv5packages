<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\VarDumper\VarDumper;

class Inspire extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'inspire';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Display an inspiring quote';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
        #\Config::getLoader()->set('app.timezone', 'Amsterdam\Europe');
        #VarDumper::dump(\Config::getLoader()->set('laradic/admin::config.base_route', 'asdf'));
        VarDumper::dump(\Config::get('test/test::foo'));
		#$base_route);
	}

}
