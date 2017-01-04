<?php

namespace Zmop\Zhima\Facades;

use Illuminate\Support\Facades\Facade;

class Zmop extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zmop';
    }
}
