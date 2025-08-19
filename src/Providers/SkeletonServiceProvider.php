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

    public function register()
    {
        $this
            ->loadProviders()
            ->registerSingletons()
            ->registerBinds()
            ->loadCommands();
    }


    protected function registerPublishes(): self
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

    protected function publishConfigs(): self
    {
        // $this->publishes(
        //     [
        //         __DIR__ . "/../../config/fooino-skeleton.php"                     => config_path('fooino-skeleton.php'),
        //     ],
        //     'fooino-skeleton-config'
        // );

        return $this;
    }

    protected function publishMigrations(): self
    {
        // $this->publishes(
        //     [
        //         __DIR__ . "/../../database/migrations/2000_00_00_000000_create_foobar_table.php"                             => database_path('migrations/2000_00_00_000000_create_foobar_table.php'),
        //     ],
        //     'fooino-skeleton-migrations'
        // );

        return $this;
    }

    protected function publishLangs(): self
    {
        // $this->publishes(
        //     [
        //         __DIR__ . "/../../lang" => lang_path("vendor/fooino/skeleton")
        //     ],
        //     'fooino-skeleton-langs'
        // );

        return $this;
    }

    protected function publishAssets(): self
    {
        // $this->publishes(
        //     [
        //         __DIR__ . "/../../assets/" => public_path('vendor/fooino/skeleton')
        //     ],
        //     'fooino-skeleton-assets'
        // );

        return $this;
    }

    protected function publishViews(): self
    {
        // $this->publishes(
        //     [
        //         __DIR__ . "/../../views" => resource_path("views/vendor/fooino/skeleton")
        //     ],
        //     'fooino-skeleton-views'
        // );

        return $this;
    }

    protected function publishAll(): self
    {
        // $this->publishes(self::$publishes[SkeletonServiceProvider::class], 'fooino-skeleton-publish-all');

        return $this;
    }


    protected function registerResources(): self
    {
        $this
            ->registerMigrations()
            ->registerTranslations()
            ->registerConfigs()
            ->registerViews()
            ->registerApiRoutes();


        return $this;
    }

    protected function registerMigrations(): self
    {
        // $this->loadMigrationsFrom(__DIR__ . "/../../database/migrations");
        return $this;
    }

    protected function registerTranslations(): self
    {
        // $this->loadTranslationsFrom(__DIR__ . "/../../lang", 'skeleton');
        return $this;
    }

    protected function registerConfigs(): self
    {
        // // for testing purposes or if the user did not publish the config file
        // foreach (['fooino-skeleton'] as $config) {

        //     if (blank(config($config))) {
        //         $this->mergeConfigFrom(__DIR__ . "/../../config/{$config}.php", $config);
        //     }
        // }
        return $this;
    }

    protected function registerViews(): self
    {
        // $this->loadViewsFrom(__DIR__ . "/../../resources/views", 'skeleton');
        return $this;
    }

    protected function registerApiRoutes(): self
    {
        // Route::group($this->apiRouteConfiguration(), function () {
        //     $this->loadRoutesFrom(__DIR__ . "/../../routes/api.php");
        // });
        return $this;
    }


    protected function apiRouteConfiguration(): array
    {
        return [
            // 'domain'        => config('fooino-skeleton.domain', null),
            // 'namespace'     => null,
            // 'prefix'        => config('fooino-skeleton.api_path', 'api'),
            // 'as'            => 'api.',
            // 'middleware'    => config('fooino-skeleton.apiMiddlewares.group', 'api'),
        ];
    }

    
    protected function loadProviders(): self
    {
        // $this->app->register(SkeletonEventServiceProvider::class);
        return $this;
    }

    protected function registerSingletons(): self
    {
        // $this->app->singleton('your-abstract-class-name', function ($app) {
        //     return new YourFacadeConcreteClass();
        // });

        return $this;
    }

    protected function registerBinds(): self
    {
        // $this->app->bind('your-abstract-class-name', function ($app) {
        //     return new YourFacadeConcreteClass();
        // });

        return $this;
    }

    protected function loadCommands(): self
    {
        // $this->commands([
        //     YourCommandClass::class,
        // ]);

        return $this;
    }
}
