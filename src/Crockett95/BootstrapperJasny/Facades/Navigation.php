<?php

namespace Crockett95\BootstrapperJasny\Facades;

use Bootstrapper\Facades\Navigation as Original;

class Navigation extends Original
{
    const NAVIGATION_NAVMENU = 'navmenu-nav';

    /**
     * {@inheritdoc}
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bootstrapper-jasny.navigation';
    }
}