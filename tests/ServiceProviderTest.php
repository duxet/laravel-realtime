<?php namespace duxet\Tests\Realtime;

use GrahamCampbell\TestBench\Traits\ServiceProviderTestCaseTrait;

class ServiceProviderTest extends TestCase {

    use ServiceProviderTestCaseTrait;

    public function testManagerIsInjectable()
    {
        $this->assertIsInjectable('duxet\Realtime\ConnectionManager');
    }

}
