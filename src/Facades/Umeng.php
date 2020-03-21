<?php


namespace Hcc\Umeng\Facades;


use Illuminate\Support\Facades\Facade;

class Umeng extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'umeng';
    }
}
