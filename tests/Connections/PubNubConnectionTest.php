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
            ->once()
            ->andReturn([1, 'Sent', 14247819253237675])
            ->mock();

        $connection = $this->getConnection($pubnub);
        $result = $connection->publish('channel', 'test');

        $this->assertTrue($result);
    }

    public function testSubscribe()
    {
        $result = null;
        $closure = function($message) use(&$result)
        {
            $result = $message;
        };

        $pubnub = $this->getPubNub()
            ->shouldReceive('subscribe')
            ->with('channel', Mockery::type('callable'))
            ->andReturnUsing(function($channel, $callback) {
                $callback('test');
            })
            ->once()
            ->mock();

        $connection = $this->getConnection($pubnub);
        $connection->subscribe('channel', $closure);

        $this->assertEquals($result, 'test');
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
