<?php namespace duxet\Realtime\Contracts; 

use Closure;

interface Connection {

    /**
     * Publish new message on given channel.
     *
     * @param  string $channel
     * @param  mixed  $message
     * @return bool
     */
    public function publish($channel, $message);

    /**
     * Subscribe to given channel.
     *
     * @param  string  $channel
     * @param  Closure $callback
     * @return void
     */
    public function subscribe($channel, Closure $callback);

}
