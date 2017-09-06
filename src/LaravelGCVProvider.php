<?php

namespace LaravelGCV;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class LaravelGCVProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('LaravelGCV', function($app) {
            return new LaravelGCV($app);
        });
    }
}
