<?php

namespace domain\Facades;

use domain\Services\ScheduleService;
use Illuminate\Support\Facades\Facade;

class ScheduleFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ScheduleService::class;
    }
}