<?php

namespace rajib\LaravelCountryStateCity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \rajib\LaravelCountryStateCity\CountryStateCity
 */
class CountryStateCity extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        // return \VendorName\Skeleton\Skeleton::class;
        return 'Country-State-City';
    }
}
