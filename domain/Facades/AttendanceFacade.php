<?php

namespace domain\Facades;

use domain\Services\AttendanceService;
use Illuminate\Support\Facades\Facade;

class AttendanceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return AttendanceService::class;
    }
}