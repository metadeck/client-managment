<?php

namespace Metadeck\ClientManager;

use Illuminate\Support\ServiceProvider;

class ClientManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('client-manager.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'client-manager');

        // Register the main class to use with the facade
        $this->app->singleton('client-manager', function () {
            return new ClientManager;
        });
    }
}
