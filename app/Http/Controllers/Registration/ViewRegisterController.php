<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\RegisterViewResponse;

class ViewRegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): RegisterViewResponse
    {
        return app(RegisterViewResponse::class);
    }
}
