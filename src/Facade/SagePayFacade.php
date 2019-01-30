<?php

namespace WishDigital\LaravelSagePay\Facade;

class SagePayFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravelsagepay';
    }
}
