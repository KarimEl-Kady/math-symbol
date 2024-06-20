<?php

namespace Math\MathProv;

use Illuminate\Support\Facades\Facade;

class MathFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'math';
    }
}
