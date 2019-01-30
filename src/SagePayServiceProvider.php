<?php

namespace WishDigital\LaravelSagePay;

class SagePayServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/sagepay.php' => config_path('sagepay.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/sagepay.php', 'sagepay'
        );

        $this->app->singleton('laravelsagepay', function ($app) {
            return new SagePay();
        });
    }
}
