<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    protected AuthService $auth;

    public function __construct(AuthService $auth)
    {
        $this->auth = $auth;
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $this->auth->login($request->validated());

        return redirect()->intended('/dashboard');
    }

    public function logout(): RedirectResponse
    {
        $this->auth->logout();
        return redirect('/');
    }
}
