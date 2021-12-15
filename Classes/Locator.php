<?php

namespace Classes;

use Classes\Container\Container;
use Services\ShsService\IShsService;

class Locator
{
    public static function getSHSService(): IShsService
    {
        return (new Container)->get('SHS');
    }
}
