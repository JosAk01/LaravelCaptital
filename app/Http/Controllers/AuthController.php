<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Returning the login form view
    }

    public function login(Request $request)
    {
        // Validate input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Get credentials
        $credentials = $request->only('email', 'password');

        // Attempt login using Laravel Auth
        if (Auth::attempt($credentials)) {
            // Redirect to intended page or user home
            return redirect()->intended('user-home');
        }

        // If login fails, redirect back with an error
        return back()->withErrors(['email' => 'Email or password is incorrect.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}