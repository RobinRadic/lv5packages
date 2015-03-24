<?php namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Laradic\Support\Arr;

class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		'App\Console\Commands\Inspire',
        'App\Console\Commands\Test'
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	{
		$schedule->command('inspire')
				 ->hourly();
	}
    /**
     * Get the bootstrap classes for the application.
     *
     * @return array
     */
    protected function bootstrappers()
    {
        $bootstrappers = array_merge([
            'Illuminate\Foundation\Bootstrap\DetectEnvironment',
            'Laradic\Config\Bootstrap\LoadConfiguration'
        ], Arr::without($this->bootstrappers, [
            'Illuminate\Foundation\Bootstrap\DetectEnvironment',
            'Illuminate\Foundation\Bootstrap\LoadConfiguration'
        ]));
        #var_dump($bootstrappers);
        return $bootstrappers;
    }
}
