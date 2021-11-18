<?php

namespace domain\Facades\Order;

use domain\Services\Order\OrderService;
use Illuminate\Support\Facades\Facade;

class OrderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return OrderService::class;
    }
}
