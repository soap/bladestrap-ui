<?php

namespace Soap\BladestrapUi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\BladestrapUi\BladestrapUi
 */
class BladestrapUi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Soap\BladestrapUi\BladestrapUi::class;
    }
}
