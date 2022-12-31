<?php

namespace domain\Facades;

use domain\Services\EmployeeService;
use Illuminate\Support\Facades\Facade;

class EmployeeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return EmployeeService::class;
    }
}