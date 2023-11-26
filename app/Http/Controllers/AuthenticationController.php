<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.page');
        } else {
            return redirect()->back()->with('error', "Email & Password Doesn't match in our database");
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login.page');
    }

    public function loginView()
    {
        return view('authentication.login');
    }

    public function registerView()
    {
        return view('authentication.register');
    }
}
