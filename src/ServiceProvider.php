<?php

namespace FoxLaby\Mudir\Support;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $commands = [
        'FoxLaby\Mudir\Commands\AddAdmin',
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);

        // Add functions by helper laravel
        $fileHelper = __DIR__.'/helpers/Helper.php';
        if (file_exists($fileHelper)) {
            require_once($fileHelper);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/mudir'),
        ], 'public');

        $this->publishes([
            __DIR__.'/routes/publish' => 'routes/',
            __DIR__.'/resources/views/publish' => 'resources/views/mudir',
            __DIR__.'/config/config.php' => config_path('mudir.php'),
        ]);

        // $this->mergeConfigFrom(__DIR__.'/config/config.php', 'mudir');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        
        $this->loadViewsFrom(__DIR__.'/resources/views', 'mudir');

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}