<?php

namespace SANMV\Saas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SANMV\Saas\Saas
 */
class Saas extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-saas';
    }
}
