<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to login with credentials
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to welcome page after login
            return redirect()->route('welcome');
        }

        // Redirect back with error if login fails
        return back()->withErrors(['message' => 'Invalid credentials']);
    }
}

