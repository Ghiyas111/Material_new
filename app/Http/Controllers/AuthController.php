<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }

    // Metode untuk melakukan proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba melakukan proses autentikasi
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika autentikasi berhasil, arahkan ke halaman frontend.blade.php
            return redirect()->route('frontend.index'); // Ganti 'frontend.index' sesuai dengan nama route halaman frontend.blade.php
        }

        // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
