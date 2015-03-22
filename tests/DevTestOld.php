<?php

use Laradic\Dev\Traits\ServiceProviderTestCaseTrait;

/**
 * Class DevTest
 *
 * @author     Robin Radic
 * @group      project
 */
class DevTestOld extends TestCase
{
    use ServiceProviderTestCaseTrait;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testServiceProviders()
    {
        $this->runServiceProviderRegisterTest('Laradic\Support\SupportServiceProvider');
        $this->runServiceProviderRegisterTest('Laradic\Dev\DevServiceProvider');
        $this->runServiceProviderRegisterTest('Laradic\Themes\ThemeServiceProvider');
        $this->runServiceProviderRegisterTest('Laradic\Docs\DocServiceProvider');
        $this->runServiceProviderRegisterTest('Illuminate\Html\HtmlServiceProvider');
        $this->runServiceProviderRegisterTest('Radic\BladeExtensions\BladeExtensionsServiceProvider');
    }

    public function serviceProviderTests($class)
    {
        $providers = $this->app->getLoadedProviders();
        $this->assertArrayHasKey($class, $providers);
        $this->assertTrue($providers[$class]);
    }
}
