<?php

namespace FoxLaby\Mudir\Support;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/mudir'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/routes/publish' => 'routes/',
            __DIR__ . '/resources/views/publish' => 'resources/views/mudir',
        ]);

        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'mudir');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        
        $this->loadViewsFrom(__DIR__.'/resources/views', 'mudir');

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}