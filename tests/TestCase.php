<?php namespace duxet\Tests\Realtime;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

class TestCase extends AbstractPackageTestCase {

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

}
