<?php

namespace Sk4t0\DashtremeTemplate;

use Illuminate\Support\ServiceProvider;

class DashtremeTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'dashtreme-template');
        $this->publishes([
            __DIR__.'/../assets' => public_path('dashtreme/assets'),
        ], 'public');
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
