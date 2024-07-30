<?php

use Illuminate\Support\Facades\Route;

foreach (config('constants.nav_menu')['profile']['item'] as $navMenu) {
    Route::get(sprintf("/%s", $navMenu['route']), fn () => view($navMenu['view']))
        ->name($navMenu['route'])
        ->middleware(sprintf("role:%s", implode(",", $navMenu['role'])));
}
