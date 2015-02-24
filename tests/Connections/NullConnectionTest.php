<?php namespace duxet\Tests\Realtime\Connections; 

use duxet\Realtime\Connections\NullConnection;
use duxet\Tests\Realtime\TestCase;

class NullConnectionTest extends TestCase {

    public function testPublish()
    {
        $connection = $this->getConnection();

        $result = $connection->publish('channel', 'test');
        $this->assertTrue($result);
    }

    public function testSubscribe()
    {
        $connection = $this->getConnection();
        $connection->subscribe('channel', function() {});
    }

    protected function getConnection()
    {
        return new NullConnection;
    }

}
