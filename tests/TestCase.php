<?php

namespace Fooino\Skeleton\Tests;

use Fooino\Core\Providers\CoreServiceProvider;
use Fooino\Skeleton\Providers\SkeletonServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            CoreServiceProvider::class,
            SkeletonServiceProvider::class,
        ];
    }
}
