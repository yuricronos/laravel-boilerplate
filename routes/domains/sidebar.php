<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    foreach (config('constants.side_bar') as $sidebar) {
        if (!array_key_exists('collapse', $sidebar)) {
            Route::get(sprintf("/%s", $sidebar['route']), fn () => view($sidebar['view']))
                ->name($sidebar['route'])
                ->middleware(sprintf("role:%s", implode(",", $sidebar['role'])));
            continue;
        }
        Route::group(['prefix' => $sidebar['collapse']['prefix']], function () use ($sidebar) {
            foreach ($sidebar['collapse']['item'] as $item) {
                $routeArray = explode(".", $item['route']);
                if (!empty($item['route']) && count($routeArray) > 0) {
                    list($p, $c) = $routeArray;
                    Route::get(sprintf("/%s", $c), fn () => view($item['view']))
                        ->name($item['route'])
                        ->middleware(sprintf("role:%s", implode(",", $item['role'])));
                }
            }
        });
    }
});
