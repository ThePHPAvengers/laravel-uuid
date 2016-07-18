<?php

namespace ThePHPAvengers\LaravelUUID;

use Illuminate\Support\ServiceProvider;
use ThePHPAvengers\UniversallyUniqueID\UUID;

/**
 * Class LaravelUUIDServiceProvider
 *
 * @package ThePHPAvengers\Package
 * @author James Kirkby <hello@jameskirkby.com>
 */
class LaravelUUIDServiceProvider extends ServiceProvider {

    /**
     * This will be used to register config & view in
     * your package namespace.
     *
     * --> Replace with your package name <--
     */
    protected $packageName = 'LaravelUUID';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('UUID', function($app)
        {
            return new UUID($app['uuid']);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}