<?php

namespace domain\Facades\Sub;

use domain\Services\Sub\SubService;
use Illuminate\Support\Facades\Facade;

class SubFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SubService::class;
    }
}
