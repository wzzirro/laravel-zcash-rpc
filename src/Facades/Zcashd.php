<?php

namespace Wzzirro\Zcash\Facades;

use Illuminate\Support\Facades\Facade;

class Zcashd extends Facade
{
    /**
     * Get name of component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zcashd';
    }
}
