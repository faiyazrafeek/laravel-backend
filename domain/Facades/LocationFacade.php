<?php

namespace domain\Facades;

use domain\Services\LocationService;
use Illuminate\Support\Facades\Facade;

class LocationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LocationService::class;
    }
}