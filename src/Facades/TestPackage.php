<?php

namespace Almatari1\TestPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Almatari1\TestPackage\TestPackage
 */
class TestPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Almatari1\TestPackage\TestPackage::class;
    }
}
