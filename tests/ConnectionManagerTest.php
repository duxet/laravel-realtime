<?php namespace duxet\Tests\Realtime; 

use duxet\Realtime\ConnectionManager;
use duxet\Realtime\Connections\NullConnection;
use Mockery;

class ConnectionManagerTest extends TestCase {

    public function testConnectionName()
    {
        $config = ['driver' => 'null'];
        $manager = $this->getConfigManager($config);
        $this->assertSame([], $manager->getConnections());
        $return = $manager->connection('local');
        $this->assertInstanceOf('duxet\Realtime\Contracts\Connection', $return);
        $this->assertArrayHasKey('local', $manager->getConnections());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testConnectionError()
    {
        $manager = $this->getManager();
        $config = ['driver' => 'error'];
        $manager->getConfig()->shouldReceive('get')->once()
            ->with('realtime.connections')->andReturn(['error' => $config]);
        $this->assertSame([], $manager->getConnections());
        $return = null;
        $manager->connection('error');
    }

    protected function getManager()
    {
        $config = Mockery::mock('Illuminate\Contracts\Config\Repository');
        $manager = new ConnectionManager($config);

        $manager->extend('null', function() {
           return new NullConnection;
        });

        return $manager;
    }

    protected function getConfigManager(array $config)
    {
        $manager = $this->getManager();

        $manager->getConfig()->shouldReceive('get')->once()
            ->with('realtime.connections')->andReturn(['local' => $config]);

        $config['name'] = 'local';

        return $manager;
    }

}
