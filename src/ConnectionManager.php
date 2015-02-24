<?php namespace duxet\Realtime; 

use duxet\Realtime\Contracts\Factory;
use GrahamCampbell\Manager\AbstractManager;
use InvalidArgumentException;

class ConnectionManager extends AbstractManager implements Factory {

    /**
     * Create the connection instance.
     *
     * @param array $config
     * @return void
     * @throws Exception
     */
    protected function createConnection(array $config)
    {
        $driver = $config['driver'];

        throw new InvalidArgumentException("No connector for [$driver]");
    }

    /**
     * Get the configuration name.
     *
     * @return string
     */
    protected function getConfigName()
    {
        return 'realtime';
    }

}
