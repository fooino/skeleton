<?php

namespace Fooino\Skeleton\Tests;

use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Config::set(['core_package_env' => 'testing']);
    }

    protected function getPackageProviders($app)
    {
        return [
            // CoreServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver'    => 'sqlite',
            'database'  => ':memory:'
        ]);
    }
}
