<?php

namespace Fooino\Skeleton\Providers;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this
            ->registerPublishes()
            ->registerResources();
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this
            ->loadProviders()
            ->registerSingletons()
            ->registerBinds()
            ->loadCommands();
    }


    protected function registerPublishes(): static
    {
        $this
            ->publishConfigs()
            ->publishMigrations()
            ->publishAssets()
            ->publishLangs()
            ->publishViews()
            ->publishAll();

        return $this;
    }

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

    protected function publishAll(): static
    {
        // $this->publishes(self::$publishes[SkeletonServiceProvider::class], 'fooino-skeleton-publish-all');

        return $this;
    }


    protected function registerResources(): static
    {
        $this
            ->registerMigrations()
            ->registerTranslations()
            ->registerConfigs()
            ->registerViews()
            ->registerApiRoutes();


        return $this;
    }

    protected function registerMigrations(): static
    {
        // $this->loadMigrationsFrom(__DIR__ . "/../../database/migrations");
        return $this;
    }

    protected function registerTranslations(): static
    {
        // $this->loadTranslationsFrom(__DIR__ . "/../../lang", 'skeleton');
        return $this;
    }

    protected function registerConfigs(): static
    {
        // // for testing purposes or if the user did not publish the config file
        // foreach (['fooino-skeleton'] as $config) {

        //     if (blank(config($config))) {
        //         $this->mergeConfigFrom(__DIR__ . "/../../config/{$config}.php", $config);
        //     }
        // }
        return $this;
    }

    protected function registerViews(): static
    {
        // $this->loadViewsFrom(__DIR__ . "/../../resources/views", 'skeleton');
        return $this;
    }

    protected function registerApiRoutes(): static
    {
        // Route::group($this->apiRouteConfiguration(), function () {
        //     $this->loadRoutesFrom(__DIR__ . "/../../routes/api.php");
        // });
        return $this;
    }


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


    protected function loadProviders(): static
    {
        // $this->app->register(SkeletonEventServiceProvider::class);
        return $this;
    }

    protected function registerSingletons(): static
    {
        // $this->app->singleton(abstract: 'Your-abstract-name', concrete: fn(Application $app) => new YourConcreteClass($app));

        return $this;
    }

    protected function registerBinds(): static
    {
        // $this->app->bind(abstract: 'Your-abstract-name', concrete: fn(Application $app) => new YourConcreteClass($app));

        return $this;
    }

    protected function loadCommands(): static
    {
        // $this->commands([
        //     YourCommandClass::class,
        // ]);

        return $this;
    }
}
