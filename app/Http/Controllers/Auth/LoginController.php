<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Auth\LoginRequest;
use  App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(LoginRequest $request)
    {

        $request->authenticate();
        $request->session()->regenerate();

        return redirect(RouteServiceProvider::HOME);

    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');

    }

    public function generatePassword(Request $request)
    {
        return Hash::make('1q2w3e4r');
    }
}
