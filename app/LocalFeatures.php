<?php

namespace App;

use Laravel\Fortify\Features;

class LocalFeatures extends Features
{
    public static function localRegistration()
    {
        return 'local_registraiton';
    }
}
