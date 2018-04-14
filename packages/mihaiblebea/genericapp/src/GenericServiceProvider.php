<?php

namespace MihaiBlebea\GenericApp;

use Illuminate\Support\ServiceProvider;

class GenericServiceProvider extends ServiceProvider
{
    private $package_name = 'generic_app';

    private $path_migrations = __DIR__ . '/../database/migrations';

    private $path_routes = __DIR__ . '/../routes/web.php';

    private $path_views = __DIR__ . '/../views';

    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom($this->path_migrations);

        // Load routes files
        $this->loadRoutesFrom($this->path_routes);

        // Publish views
        $this->loadViewsFrom($this->path_views, $this->package_name);

        // Publish files from package to main app
        $this->publishes([
            $this->path_views => resource_path('views/vendor/' . $this->package_name),
            __DIR__ . '/../configs/generic.php' => config_path('generic.php')
        ]);

        /*
         * Reffer views in the package like so
         * return view('courier::admin');
         */

    }

    public function register()
    {
        //
    }
}
