<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User1;
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
            'email' => 'required|string|email|max:255|unique:users1',
            'password' => 'required|string|min:8|confirmed',
        ]);

        users1::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login1');
    }
}
