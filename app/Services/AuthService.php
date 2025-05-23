<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthService
{
    public function login(array $credentials): void
    {
        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'username' => ['username atau password salah.'],
            ]);
        }

        session()->regenerate();
    }

    public function logout(): void
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
    }
}
