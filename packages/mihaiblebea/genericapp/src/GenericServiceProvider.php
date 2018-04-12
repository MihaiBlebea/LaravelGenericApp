<?php

namespace MihaiBlebea\GenericApp;

use Illuminate\Support\ServiceProvider;

class GenericServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    public function register()
    {
        //
    }
}
