<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class PanelFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'panel';
    }
}