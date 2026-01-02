<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function login(array $credentials)
    {
        if (!Auth::attempt($credentials)) {
            return false;
        }

        $user = Auth::user();
        $token = $user->createToken('API Token')->accessToken;

        return [
            'user' => $user,
            'token' => $token,
        ];
    }
}
