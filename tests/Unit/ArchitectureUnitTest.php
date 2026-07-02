<?php

namespace Fooino\Skeleton\Tests\Unit;

use Fooino\Core\Exceptions\FooinoException;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

describe('Arch tests', function () {

    // arch('Actions')
    //     ->expect('Fooino\Skeleton\*\Actions')
    //     ->toHaveSuffix('Action');

    // arch('Tasks')
    //     ->expect('Fooino\Skeleton\*\Tasks')
    //     ->toHaveSuffix('Task');

    arch('Enums')
        ->expect('Fooino\Skeleton\Enums')
        ->toBeEnums();

    arch('Interfaces')
        ->expect('Fooino\Skeleton\Interfaces')
        ->toBeInterface();

    arch('Contracts')
        ->expect('Fooino\Skeleton\Contracts')
        ->toBeInterface();

    arch('Concerns')
        ->expect('Fooino\Skeleton\Concerns')
        ->toBeTraits();

    arch('Facades')
        ->expect('Fooino\Skeleton\Facades')
        ->toExtend(Facade::class);

    arch('Exceptions')
        ->expect('Fooino\Skeleton\Exceptions')
        ->toExtend(FooinoException::class);

    arch('Service Provider')
        ->expect('Fooino\Skeleton\Providers')
        ->toExtend(ServiceProvider::class);

    arch('no debug calls')
        ->expect(['dd', 'dump', 'var_dump', 'ray'])
        ->not->toBeUsed();

    // arch('Documented')
    //     ->expect('Fooino\Skeleton')
    //     ->toHaveMethodsDocumented();
});
