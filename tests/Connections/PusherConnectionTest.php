<?php namespace duxet\Tests\Realtime\Connections; 

use duxet\Realtime\Connections\PusherConnection;
use duxet\Tests\Realtime\TestCase;
use Mockery;

class PusherConnectionTest extends TestCase {

    public function testPublish()
    {
        $pusher = $this->getPusher()
            ->shouldReceive('trigger')
            ->once()
            ->with('channel', 'message', 'test')
            ->andReturn(true)
            ->mock();

        $connection = $this->getConnection($pusher);
        $connection->publish('channel', 'test');
    }

    /**
     * @expectedException Exception
     */
    public function testSubscribe()
    {
        $pusher = $this->getPusher();

        $connection = $this->getConnection($pusher);
        $connection->subscribe('channel', function($message) {});
    }

    protected function getConnection($pusher)
    {
        return new PusherConnection($pusher);
    }

    protected function getPusher()
    {
        return Mockery::mock('Pusher');
    }

}
