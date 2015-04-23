<?php namespace Laradic\Tests;

use Laradic\Dev\AbstractTestCase;

/**
 * Class ViewTest
 *
 * @author     Robin Radic
 * @inheritDoc
 */
abstract class TestCase extends AbstractTestCase
{

    protected $provider;

    /** @inheritDoc */
    public function setUp()
    {
        parent::setUp();
    }
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application   $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Define your environment setup.
    }

    /**
     * @return \Illuminate\Contracts\View\Factory
     */
    public function view()
    {
        return $this->app[ 'view' ];
    }


}
