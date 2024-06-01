<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User1; // Ensure the correct model is imported
use Illuminate\Support\Facades\Hash;

class Register1Controller extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register1');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users1', // Ensure the correct table name
            'password' => 'required|string|min:8|confirmed',
        ]);

        User1::create([ // Correct class name
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login1')->with('success', 'Registration successful.');
    }
}