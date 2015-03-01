<?php namespace duxet\Realtime\Connections; 

use Closure;
use duxet\Realtime\Contracts\Connection;
use Exception;
use Pubnub\Pubnub;

class PubNubConnection implements Connection {

    /**
     * @var Pubnub
     */
    protected $pubnub;

    /**
     * @param Pubnub $pubnub
     */
    public function __construct(Pubnub $pubnub)
    {
        $this->pubnub = $pubnub;
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
        $result = $this->pubnub->publish($channel, $message);

        if (isset($result['error']))
        {
            throw new Exception('PubNub error: '. $result['message']);
        }

        return $result[1] === 'Sent';
    }

    /**
     * Subscribe to given channel.
     *
     * @param  string $channel
     * @param  Closure $callback
     * @return void
     */
    public function subscribe($channel, Closure $callback)
    {
        $this->pubnub->subscribe($channel, $callback);
    }

}
