<?php namespace CleanSoft\Modules\Core\Hook\Support\Facades;

use Illuminate\Support\Facades\Facade;
use CleanSoft\Modules\Core\Hook\Support\Filters;

class FiltersFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Filters::class;
    }
}
