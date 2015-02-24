<?php namespace duxet\Tests\Realtime\Connectors; 

use duxet\Realtime\Connectors\PusherConnector;
use duxet\Tests\Realtime\TestCase;

class PusherConnectorTest extends TestCase {

    public function testConnect()
    {
        $connector = $this->getConnector();

        $result = $connector->connect([
            'app_id' => 'your-app-id',
            'key'    => 'your-key',
            'secret' => 'your-secret',
            'ssl'    => true,
        ]);

        $this->assertInstanceOf('duxet\Realtime\Connections\PusherConnection', $result);
    }

    protected function getConnector()
    {
        return new PusherConnector;
    }

}
