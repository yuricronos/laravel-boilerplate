<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;

class Authentication
{

    public function __invoke(LoginRequest $request)
    {
        $params = $request->validated();
        $user = self::validationMessage(User::where(['username' => $params['username']])->first());
        if ($user && Hash::check($params['password'], $user->password)) {
            return $user;
        }
    }

    private static function validationMessage(User|null $user)
    {
        if ($user == null) {
            throw ValidationException::withMessages([Fortify::username() => 'account not found.']);
        }
        if ($user->email_verified_at != null) {
            return $user;
        }
        throw ValidationException::withMessages([Fortify::username() => 'account needs activation.']);
    }
}
