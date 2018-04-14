<?php

namespace MihaiBlebea\GenericApp;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class GenericServiceProvider extends ServiceProvider
{
    private $package_name = 'generic_app';

    private $path_migrations = __DIR__ . '/../database/migrations';

    private $path_routes = __DIR__ . '/../routes/web.php';

    private $path_views = __DIR__ . '/../views';

    private $path_config = __DIR__ . '/../configs/generic.php';

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
            $this->path_views  => resource_path('views/vendor/' . $this->package_name),
            $this->path_config => config_path('generic.php')
        ]);

        /*
         * Reffer views in the package like so
         * return view('courier::admin');
         */
         
         $this->bootBladeDirectives();

    }

    public function register()
    {
        //
    }

    private function bootBladeDirectives()
    {
        Blade::directive('role', function($role) {
            return "<?php if (auth()->check() && auth()->user()->hasRole({$role})): ?>";
        });

        Blade::directive('endrole', function($role) {
            return '<?php endif; ?>';
        });
    }
}
