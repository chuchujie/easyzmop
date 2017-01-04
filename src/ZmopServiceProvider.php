<?php

namespace Zmop\Zhima;

use Illuminate\Support\ServiceProvider;

class ZmopServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->loadViewsFrom(__DIR__.'/views', 'Zmop');

        $this->publishes([
//            __DIR__.'/views'             => base_path('resources/views/vendor/toastr'),
            __DIR__.'/config/zmop.php' => config_path('zmop.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(['Zmop\\Zhima\\ZmopClient' => 'zmop'], function ($app) {
            $config = $app['config']["zmop"];
            return new ZmopClient($config["gatewayUrl"],$config["appId"],$config["charset"],$config["privateKeyFilePath"],$config["zhiMaPublicKeyFilePath"]);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['zmop'];
    }
}
