<?php

namespace Lachezargrigorov\ClosuresContainer;

use Illuminate\Support\ServiceProvider;

class ClosuresContainerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('closures',function($app)
        {
            return ClosuresContainer::getInstance();
        });
    }
}