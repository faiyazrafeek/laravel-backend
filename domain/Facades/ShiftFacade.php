<?php

namespace domain\Facades;

use domain\Services\ShiftService;
use Illuminate\Support\Facades\Facade;

class ShiftFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ShiftService::class;
    }
}