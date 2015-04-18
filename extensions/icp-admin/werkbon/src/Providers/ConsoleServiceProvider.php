<?php namespace IcpAdmin\Werkbon\Providers;

use Laradic\Support\AbstractConsoleProvider;

class ConsoleServiceProvider extends AbstractConsoleProvider
{

    protected $namespace = 'IcpAdmin\Werkbon\Console';

    protected $commands = [
        'Stub' => 'commands.icp-admin.werkbon.stub',
    ];
}
