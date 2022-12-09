<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request) {

        $credentials = request(['email', 'password']);
        $request->validate([
             'email' => 'required|email',
             'password' => 'required|string',
        ]
        );

        if (Auth::attempt($credentials))
        {
            $request->session()->put('name', Auth::user()->name);
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('login')->with('error', 'Username atau password salah !' );
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
