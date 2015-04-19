<?php namespace IcpAdmin\Werkbon\Console;

use Laradic\Support\AbstractConsoleCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class StubCommand extends AbstractConsoleCommand
{

    protected $name = 'werkbon:stub';

    protected $description = 'Command description.';

    public function fire()
    {
        #$extensions = app('extensions');
        #$repository = app('extensions.repository');
        $this->dump(app()->getBindings());
        $this->info('Replace this stub command with an actual command');
    }

    public function getArguments()
    {
        return [
            ['arg', InputArgument::OPTIONAL, 'Description']
        ];
    }

    public function getOptions()
    {
        return [
            ['opt', 'o', InputOption::VALUE_OPTIONAL, 'Description']
        ];
    }
}
