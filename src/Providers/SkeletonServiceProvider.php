<?php

namespace Fooino\Skeleton\Providers;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of all package services
     */
    public function boot(): void
    {
        $this
            ->bootPublishes()
            ->bootResources();
    }

    /**
     * Register any application services within the container
     */
    public function register(): void
    {
        $this
            ->loadConfigs()
            ->registerSingletons()
            ->registerBinds()
            ->loadCommands()
            ->loadProviders();
    }


    /**
     * Register all publishable assets so consumers can vendor:publish them
     */
    protected function bootPublishes(): static
    {
        $this
            ->publishConfigs()
            ->publishMigrations()
            ->publishLangs()
            ->publishAssets()
            ->publishViews()
            ->publishAll();

        return $this;
    }

    /**
     * Expose the configuration file for end-user customisation
     */
    protected function publishConfigs(): static
    {
        // $this->publishes(
        //     [
        //         __DIR__ . "/../../config/fooino-skeleton.php"                     => config_path('fooino-skeleton.php'),
        //     ],
        //     'fooino-skeleton-config'
        // );

        return $this;
    }

    /**
     * Expose migration files so consumers can copy and modify them
     */
    protected function publishMigrations(): static
    {
        // $this->publishes(
        //     [
        //         __DIR__ . "/../../database/migrations/2000_00_00_000000_create_foobar_table.php"                             => database_path('migrations/2000_00_00_000000_create_foobar_table.php'),
        //     ],
        //     'fooino-skeleton-migrations'
        // );

        return $this;
    }

    /**
     * Expose language files for end-user translation overrides
     */
    protected function publishLangs(): static
    {
        // $this->publishes(
        //     [
        //         __DIR__ . "/../../lang" => lang_path("vendor/fooino/skeleton")
        //     ],
        //     'fooino-skeleton-langs'
        // );

        return $this;
    }

    /**
     * Expose public assets (images, JS, CSS) for direct browser access
     */
    protected function publishAssets(): static
    {
        // $this->publishes(
        //     [
        //         __DIR__ . "/../../assets/" => public_path('vendor/fooino/skeleton')
        //     ],
        //     'fooino-skeleton-assets'
        // );

        return $this;
    }

    /**
     * Expose view templates so consumers can override them in their own app
     */
    protected function publishViews(): static
    {
        // $this->publishes(
        //     [
        //         __DIR__ . "/../../views" => resource_path("views/vendor/fooino/skeleton")
        //     ],
        //     'fooino-skeleton-views'
        // );

        return $this;
    }

    /**
     * Register a single publish-all tag so consumers can publish everything at once
     */
    protected function publishAll(): static
    {
        // $this->publishes(self::$publishes[SkeletonServiceProvider::class], 'fooino-skeleton-publish-all');

        return $this;
    }


    /**
     * Load all runtime resources (migrations, translations, views, routes) during boot
     */
    protected function bootResources(): static
    {
        $this
            ->loadMigrations()
            ->loadTranslations()
            ->loadViews()
            ->loadApiRoutes();

        return $this;
    }

    /**
     * Register migration paths so Laravel discovers package migrations automatically
     */
    protected function loadMigrations(): static
    {
        // $this->loadMigrationsFrom(__DIR__ . "/../../database/migrations");
        return $this;
    }

    /**
     * Register the translation namespace so consumers can use __('skeleton::file.key')
     */
    protected function loadTranslations(): static
    {
        // $this->loadTranslationsFrom(__DIR__ . "/../../lang", 'skeleton');
        return $this;
    }

    /**
     * Register the view namespace so consumers can render package views with skeleton:: prefix
     */
    protected function loadViews(): static
    {
        // $this->loadViewsFrom(__DIR__ . "/../../resources/views", 'skeleton');
        return $this;
    }

    /**
     * Load API route definitions under a grouped middleware and prefix configuration
     */
    protected function loadApiRoutes(): static
    {
        // Route::group($this->apiRouteConfiguration(), function () {
        //     $this->loadRoutesFrom(__DIR__ . "/../../routes/api.php");
        // });
        return $this;
    }

    /**
     * Provide standard route-group defaults (domain, prefix, middleware) for all package API routes
     */
    // protected function apiRouteConfiguration(): array
    // {
    //     return [
    //         'domain'        => config('fooino-skeleton.domain', null),
    //         'namespace'     => null,
    //         'prefix'        => config('fooino-skeleton.api_path', 'api'),
    //         'as'            => 'api.',
    //         'middleware'    => config('fooino-skeleton.apiMiddlewares.group', 'api'),
    //     ];
    // }


    /**
     * Merge default configuration so values are available via config() even before publish
     */
    protected function loadConfigs(): static
    {
        // // for testing purposes or if the user did not publish the config file
        // foreach (['fooino-skeleton'] as $config) {

        //     if (blank(config($config))) {
        //         $this->mergeConfigFrom(__DIR__ . "/../../config/{$config}.php", $config);
        //     }
        // }

        return $this;
    }

    /**
     * Register services that should have exactly one instance per application lifecycle
     */
    protected function registerSingletons(): static
    {
        // $this->app->singleton(abstract: 'Your-abstract-name', concrete: fn(Application $app) => new YourConcreteClass($app));

        return $this;
    }

    /**
     * Register services that need a new instance every time they are resolved
     */
    protected function registerBinds(): static
    {
        // $this->app->bind(abstract: 'Your-abstract-name', concrete: fn(Application $app) => new YourConcreteClass($app));

        return $this;
    }

    /**
     * Register Artisan commands so they are available via the CLI
     */
    protected function loadCommands(): static
    {
        // $this->commands([
        //     YourCommandClass::class,
        // ]);

        return $this;
    }

    /**
     * Register child service providers so they participate in the full Laravel boot cycle
     */
    protected function loadProviders(): static
    {
        // $this->app->register(SkeletonEventServiceProvider::class);

        return $this;
    }
}
