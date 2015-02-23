<?php namespace duxet\Realtime\Connectors; 

use duxet\Realtime\Connections\PubNubConnection;
use GrahamCampbell\Manager\ConnectorInterface;

class PubNubConnector implements ConnectorInterface {

    /**
     * Establish a connection.
     *
     * @param array $config
     *
     * @return \duxet\Realtime\Contracts\Connection
     */
    public function connect(array $config)
    {
        return new PubNubConnection();
    }

}
