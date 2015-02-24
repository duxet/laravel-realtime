<?php namespace duxet\Tests\Realtime\Connectors; 

use duxet\Realtime\Connectors\PubNubConnector;
use duxet\Tests\Realtime\TestCase;

class PubNubConnectorTest extends TestCase {

    public function testConnect()
    {
        $connector = $this->getConnector();

        $result = $connector->connect([
            'publish_key'   => 'your-key',
            'subscribe_key' => 'your-key',
        ]);

        $this->assertInstanceOf('duxet\Realtime\Connections\PubNubConnection', $result);
    }

    protected function getConnector()
    {
        return new PubNubConnector;
    }

}
