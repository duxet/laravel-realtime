<?php namespace duxet\Realtime\Facades; 

use Illuminate\Support\Facades\Facade;

class Realtime extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'realtime';
    }

}
