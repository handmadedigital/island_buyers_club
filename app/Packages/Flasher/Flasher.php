<?php namespace TGL\Packages\Flasher;

use Illuminate\Support\Facades\Facade;

class Flasher extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flasher';
    }
}