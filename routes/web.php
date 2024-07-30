<?php

use App\Helpers\SystemHelper;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

SystemHelper::includeFilesInFolder(sprintf("%s/domains/", __DIR__));
