<?php

use Laradic\Dev\AbstractTestCase;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        return $app;
    }
}
