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
        //     paths: [
        //         __DIR__ . '/../../config/fooino-skeleton.php' => config_path('fooino-skeleton.php')
        //     ],
        //     groups: 'fooino-skeleton-configs'
        // );

        return $this;
    }

    /**
     * Expose migration files so consumers can copy and modify them
     */
    protected function publishMigrations(): static
    {
        // $this->publishes(
        //     paths: [
        //         __DIR__ . '/../../database/migrations/2000_00_00_000000_create_foobar_table.php' => database_path('migrations/2000_00_00_000000_create_foobar_table.php')
        //     ],
        //     groups: 'fooino-skeleton-migrations'
        // );

        return $this;
    }

    /**
     * Expose language files for end-user translation overrides
     */
    protected function publishLangs(): static
    {
        // $this->publishes(
        //     paths: [
        //         __DIR__ . '/../../lang' => lang_path('vendor/fooino/skeleton')
        //     ],
        //     groups: 'fooino-skeleton-langs'
        // );

        return $this;
    }

    /**
     * Expose public assets (images, JS, CSS) for direct browser access
     */
    protected function publishAssets(): static
    {
        // $this->publishes(
        //     paths: [
        //         __DIR__ . '/../../assets/' => public_path('vendor/fooino/skeleton')
        //     ],
        //     groups: 'fooino-skeleton-assets'
        // );

        return $this;
    }

    /**
     * Expose view templates so consumers can override them in their own app
     */
    protected function publishViews(): static
    {
        // $this->publishes(
        //     paths: [
        //         __DIR__ . '/../../resources/views' => resource_path('views/vendor/fooino/skeleton')
        //     ],
        //     groups: 'fooino-skeleton-views'
        // );

        return $this;
    }

    /**
     * Register a single publish-all tag so consumers can publish everything at once
     */
    protected function publishAll(): static
    {
        // $this->publishes(paths: self::$publishes[SkeletonServiceProvider::class], groups: 'fooino-skeleton-publish-all');

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
            ->loadViews();

        return $this;
    }

    /**
     * Register migration paths so Laravel discovers package migrations automatically
     */
    protected function loadMigrations(): static
    {
        // $this->loadMigrationsFrom(paths: __DIR__ . '/../../database/migrations');

        return $this;
    }

    /**
     * Register the translation namespace so consumers can use __('skeleton::file.key')
     */
    protected function loadTranslations(): static
    {
        // $this->loadTranslationsFrom(path: __DIR__ . '/../../lang', namespace: 'skeleton');

        return $this;
    }

    /**
     * Register the view namespace so consumers can render package views with skeleton:: prefix
     */
    protected function loadViews(): static
    {
        // $this->loadViewsFrom(path: __DIR__ . '/../../resources/views', namespace: 'skeleton');

        return $this;
    }

    /**
     * Merge default configuration so values are available via config() even before publish
     */
    protected function loadConfigs(): static
    {
        // $this->mergeConfigFrom(path: __DIR__ . '/../../config/fooino-skeleton.php', key: 'fooino-skeleton');

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
        // $this->commands(commands: [
        //     YourCommandClass::class
        // ]);

        return $this;
    }

    /**
     * Register child service providers so they participate in the full Laravel boot cycle
     */
    protected function loadProviders(): static
    {
        // $this->app->register(provider: SkeletonEventServiceProvider::class);

        return $this;
    }
}
