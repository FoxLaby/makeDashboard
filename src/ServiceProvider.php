<?php

namespace FoxLaby\Support;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/files/admin' => 'resources/views/admin/',
            __DIR__ . '/files/src_admin' => 'public/src_admin/',
            __DIR__ . '/files/routes' => 'routes/',
        ]);
    }
    
}