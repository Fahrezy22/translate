<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApperanceController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.user.register');
    }

    public function register_proses(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed|min:6',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        $success = User::create($data);
        if ($success) {
            return redirect()->route('login')->with('success', 'berhasil membuat akun !' );
        }
        else {
            return back()->with('error', 'Mohon periksa kembali inputan anda !' );
        }
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function tes()
    {
        return view('user.input');
    }
}
