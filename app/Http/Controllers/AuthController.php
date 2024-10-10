<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // Add this import
use App\Models\User;

class AuthController extends Controller
{
    // Show signup form
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    // Handle signup form submission
    public function signup(Request $request)
    {
        // Validation rules
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create new user
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']), // Hash password
        ]);

        // Redirect to login page after successful signup
        return redirect()->route('login')->with('success', 'Account created successfully! Please login.');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login logic
    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        // Check if user exists and the password matches
        if ($user && Hash::check($request->password, $user->password)) {
            // Use Laravel's Auth system
            Auth::login($user);

            return redirect()->route('user.home');
        }

        // If credentials don't match, return with an error
        return back()->with('error', 'Invalid email or password');
    }
    public function userHome()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('user_home', compact('user')); // Pass user data to the view
    }
}
