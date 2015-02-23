<?php namespace duxet\Realtime\Connections; 

use Closure;
use duxet\Realtime\Contracts\Connection as ConnectionContract;

class NullConnection implements ConnectionContract {

    /**
     * Publish new message on given channel.
     *
     * @param  string $channel
     * @param  mixed $message
     * @return bool
     */
    public function publish($channel, $message) {}

    /**
     * Subscribe to given channel.
     *
     * @param  string $channel
     * @param  Closure $callback
     * @return void
     */
    public function subscribe($channel, Closure $callback) {}

}
