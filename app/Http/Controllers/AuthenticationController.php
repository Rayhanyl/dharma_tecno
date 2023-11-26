<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function loginView(){
        return view('authentication.login');
    }
    
    public function registerView(){
        return view('authentication.register');
    }
}
