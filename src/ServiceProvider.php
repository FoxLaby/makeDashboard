<?php

namespace FoxLaby\Mudir\Support;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/mudir'),
        ], 'public');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        
        $this->loadViewsFrom(__DIR__.'/resources/views', 'mudir');

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}