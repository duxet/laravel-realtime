<?php namespace duxet\Realtime\Connections; 

use Closure, Exception;
use duxet\Realtime\Contracts\Connection;
use Pusher;

class PusherConnection implements Connection {

    /**
     * @var Pusher
     */
    protected $pusher;

    /**
     * @param Pusher $pusher
     */
    public function __construct(Pusher $pusher)
    {
        $this->pusher = $pusher;
    }

    /**
     * Publish new message on given channel.
     *
     * @param  string $channel
     * @param  mixed $message
     * @return bool
     */
    public function publish($channel, $message)
    {
        $this->pusher->trigger($channel, 'message', $message);
    }

    /**
     * Subscribe to given channel.
     *
     * @param  string $channel
     * @param  Closure $callback
     * @throws Exception
     */
    public function subscribe($channel, Closure $callback)
    {
        throw new Exception('Subscribe method is not implemented for Pusher yet.');
    }

}
