<?php namespace duxet\Tests\Realtime;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use GrahamCampbell\TestBench\Traits\ServiceProviderTestCaseTrait;

class ServiceProviderTest extends AbstractPackageTestCase {

    use ServiceProviderTestCaseTrait;

    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return 'duxet\Realtime\RealtimeServiceProvider';
    }

    public function testManagerIsInjectable()
    {
        $this->assertIsInjectable('duxet\Realtime\ConnectionManager');
    }

}
