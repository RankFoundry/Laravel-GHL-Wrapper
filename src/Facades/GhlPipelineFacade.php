<?php

namespace Rankfoundry\LaravelGhlWrapper\Facades;

use Illuminate\Support\Facades\Facade;

class GhlPipelineFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'GhlPipeline';
    }
}