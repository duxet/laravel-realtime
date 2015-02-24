<?php namespace duxet\Realtime\Contracts; 

interface Factory {

    /**
     * Get a connection instance.
     *
     * @param string $name
     *
     * @return \duxet\Realtime\Contracts\Connection
     */
    public function connection($name = null);

}
