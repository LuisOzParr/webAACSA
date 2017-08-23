<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class ModalFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'modal';
    }
}