<?php namespace CleanSoft\Modules\Core\Hook\Support\Facades;

use Illuminate\Support\Facades\Facade;
use CleanSoft\Modules\Core\Hook\Support\Actions;

class ActionsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Actions::class;
    }
}
