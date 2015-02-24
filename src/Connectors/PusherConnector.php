<?php namespace duxet\Realtime\Connectors; 

use duxet\Realtime\Connections\PusherConnection;
use GrahamCampbell\Manager\ConnectorInterface;
use Pusher;

class PusherConnector implements ConnectorInterface {

    /**
     * Establish a connection.
     *
     * @param array $config
     *
     * @return \duxet\Realtime\Contracts\Connection
     */
    public function connect(array $config)
    {
        $pusher = new Pusher(
            $config['key'], $config['secret'],$config['app_id'], [
                'encrypted' => $config['ssl']
            ]
        );

        return new PusherConnection($pusher);
    }
}
