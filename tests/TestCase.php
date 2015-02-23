<?php namespace duxet\Tests\Realtime;

class TestCase extends \Orchestra\Testbench\TestCase {

    /**
     * Get package providers.
     *
     * @return array
     */
    protected function getPackageProviders()
    {
        return ['duxet\Realtime\RealtimeServiceProvider'];
    }

}
