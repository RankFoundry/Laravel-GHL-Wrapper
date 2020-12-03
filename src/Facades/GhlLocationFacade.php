<?php

namespace Rankfoundry\LaravelGhlWrapper\Facades;

use Illuminate\Support\Facades\Facade;

class GhlLocationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'GhlLocation';
    }
}