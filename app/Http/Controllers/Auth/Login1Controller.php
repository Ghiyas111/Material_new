<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login1Controller extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login1');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('home'); // Redirect to intended page
        }

        return back()->withErrors([
            'email' => 'Email yang anda pake tidak Valid',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login1');
    }
}

