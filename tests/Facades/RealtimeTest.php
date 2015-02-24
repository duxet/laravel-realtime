<?php namespace duxet\Tests\Realtime\Facades; 

use duxet\Tests\Realtime\TestCase;
use GrahamCampbell\TestBench\Traits\FacadeTestCaseTrait;

class RealtimeTest extends TestCase {

    use FacadeTestCaseTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'realtime';
    }
    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return 'duxet\Realtime\Facades\Realtime';
    }
    /**
     * Get the facade route.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return 'duxet\Realtime\ConnectionManager';
    }

}
