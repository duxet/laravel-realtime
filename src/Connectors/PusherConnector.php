<?php namespace duxet\Realtime\Connectors; 

use duxet\Realtime\Connections\PusherConnection;
use GrahamCampbell\Manager\ConnectorInterface;

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
        return new PusherConnection();
    }
}
