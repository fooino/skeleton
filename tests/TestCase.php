<?php

namespace Fooino\Skeleton\Tests;

use Fooino\Core\Providers\CoreServiceProvider;
use Fooino\Skeleton\Providers\SkeletonServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Register the package providers for the test application
     */
    protected function getPackageProviders(mixed $app): array
    {
        return [
            CoreServiceProvider::class,
            SkeletonServiceProvider::class,
        ];
    }
}
