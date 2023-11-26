<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

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

    public function registerUser(Request $request)
    {
        // Validation rules
        $rules = [
            'password' => 'required|min:6|confirmed',
        ];
    
        // Validation messages
        $messages = [
            'password.confirmed' => 'The password confirmation does not match.',
        ];
    
        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);
        // Check for validation failure
        if ($validator->fails()) {
            Alert::toast('Error', 'warning');
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        try {
            User::create([
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'first_name' => $request->nama_depan,
                'last_name' => $request->nama_belakang,
                'phone_number' => '+62' . $request->phone,
                'role' => 'applicant',
            ]);
            Alert::toast('Berhasil membuat akun', 'success');
            return redirect()->route('auth.login.page');
        } catch (\Throwable $e) {
            Alert::warning('Error', 'Contact Developer to Fix This');
            return redirect()->back();
        }
    }

    public function updateUser(Request $request)
    {
        try {
            $user = Auth::user();
    
            // Validation rules
            $rules = [
                'password' => 'nullable|min:6|confirmed',
            ];
        
            // Validation messages
            $messages = [
                'password.confirmed' => 'The password confirmation does not match.',
            ];
    
            // Validate the request
            $validator = Validator::make($request->all(), $rules, $messages);
            // Check for validation failure
            if ($validator->fails()) {
                Alert::toast('Error', 'warning');
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            // Update user data
            User::where('id', $user->id)->update([
                'first_name' => $request->nama_depan,
                'last_name' => $request->nama_belakang,
                'email' => $request->email,
                'phone_number' => $request->phone,
                'password' => bcrypt($request->password), // Hash the password
            ]);
    
            Alert::toast('Profil berhasil di update', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::warning('Error', 'Contact Developer to Fix This');
            return redirect()->back();
        }
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
