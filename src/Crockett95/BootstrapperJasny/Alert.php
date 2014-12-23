<?php

namespace Crockett95\BootstrapperJasny;

use Bootstrapper\Alert as Original;

class Alert extends Original
{
    public function fixed($location = 'top')
    {
        if (!isset($this->attributes['class'])) {
            $this->attributes['class'] = "alert-fixed-$location";
        } else {
            $this->attributes['class'] .= "alert-fixed-$location";
        }

        return $this;
    }
}