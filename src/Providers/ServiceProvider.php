<?php

namespace Wzzirro\Zcash\Providers;

use Wzzirro\Zcash\Client as ZcashClient;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap application services.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__.'/../../config/config.php');

        $this->publishes([$path => config_path('zcashd.php')], 'config');
        $this->mergeConfigFrom($path, 'zcashd');
    }

    /**
     * Register application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAliases();

        $this->registerClient();
    }

    /**
     * Register aliases.
     *
     * @return void
     */
    protected function registerAliases()
    {
        $aliases = [
            'zcashd' => 'Wzzirro\Zcash\Client',
        ];

        foreach ($aliases as $key => $aliases) {
            foreach ((array) $aliases as $alias) {
                $this->app->alias($key, $alias);
            }
        }
    }

    /**
     * Register client.
     *
     * @return void
     */
    protected function registerClient()
    {
        $this->app->singleton('zcashd', function ($app) {
            return new ZcashClient([
                'protocol' => $app['config']->get('zcashd.protocol', 'http'),
                'host'   => $app['config']->get('zcashd.host', 'localhost'),
                'port'   => $app['config']->get('zcashd.port', 8232),
                'user'   => $app['config']->get('zcashd.user'),
                'pass'   => $app['config']->get('zcashd.password'),
                'ca'     => $app['config']->get('zcashd.ca'),
            ]);
        });
    }
}
