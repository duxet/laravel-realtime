<?php namespace duxet\Realtime;

use duxet\Realtime\Connections\NullConnection;
use duxet\Realtime\Connectors\PubNubConnector;
use duxet\Realtime\Connectors\PusherConnector;
use Illuminate\Support\ServiceProvider;

class RealtimeServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup configuration files.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $sourcePath = realpath(__DIR__.'/../config/realtime.php');
        $targetPath = config_path('realtime.php');

        $this->publishes([ $sourcePath => $targetPath ]);
        $this->mergeConfigFrom($sourcePath, 'pusher');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('realtime', function($app)
        {
            $manager = new ConnectionManager($app['config']);
            $this->registerConnectors($manager);

            return $manager;
        });

        $this->app->singleton('realtime.connection', function($app)
        {
            return $app['realtime']->connection();
        });
    }

    /**
     * Register available connectors.
     *
     * @param ConnectionManager $manager
     *
     * @return void
     */
    protected function registerConnectors(ConnectionManager $manager)
    {
        $manager->extend('null', function() {
            return new NullConnection;
        });

        $manager->extend('pubnub', function($config) {
           return with(new PubNubConnector($config))->connect();
        });

        $manager->extend('pusher', function($config) {
            return with(new PusherConnector($config))->connect();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['realtime', 'realtime.connection'];
    }

}
