<?php

namespace Crockett95\BootstrapperJasny\Facades;

use Bootstrapper\Facades\Alert as Original;

class Alert extends Original
{

    protected static function getFacadeAccessor()
    {
        return 'bootstrapper-jasny.alert';
    }

}