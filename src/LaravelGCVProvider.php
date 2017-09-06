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
        $this->publishes([
            __DIR__.'/config/gcv.php' => config_path('gcv.php'),
        ]);
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
