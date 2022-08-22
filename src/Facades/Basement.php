<?php

namespace Haemanthus\Basement\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Haemanthus\Basement\Basement
 */
class Basement extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Haemanthus\Basement\Basement::class;
    }
}
