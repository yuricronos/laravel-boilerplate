<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Contracts\RegisterResponse;
use Laravel\Fortify\Fortify;

class PostRegisterController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CreatesNewUsers $creator): RegisterResponse
    {
        if (config('fortify.lowercase_usernames')) {
            $request->merge([
                Fortify::username() => \Illuminate\Support\Str::lower($request->{Fortify::username()}),
            ]);
        }

        event(new Registered($user = $creator->create($request->all())));

        return app(RegisterResponse::class);
        // return redirect()->route('login')->with('status', 'Registration successful! Please login.');
    }

}
