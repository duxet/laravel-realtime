<?php namespace duxet\Tests\Realtime\Connections; 

use duxet\Realtime\Connections\PubNubConnection;
use duxet\Tests\Realtime\TestCase;
use Mockery;

class PubNubConnectionTest extends TestCase {

    public function testPublish()
    {
        $pubnub = $this->getPubNub()
            ->shouldReceive('publish')
            ->with('channel', 'test')
            ->andReturn([1, 'Sent', 14247819253237675])
            ->mock();

        $connection = $this->getConnection($pubnub);
        $result = $connection->publish('channel', 'test');

        $this->assertTrue($result);
    }

    protected function getConnection($pubnub)
    {
        return new PubNubConnection($pubnub);
    }

    protected function getPubNub()
    {
        return Mockery::mock('Pubnub\Pubnub');
    }

}
