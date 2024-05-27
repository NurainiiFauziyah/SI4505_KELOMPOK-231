<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function get_register()
    {
        return view("register");
    }

    public function post_register(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'full_name.required' => 'Nama wajib diisi',
            'phone_number.required' => 'Nomor telepon wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Masukkan email yang valid',
            'email.unique' => 'Email sudah digunakan, masukkan email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password adalah 6 karakter',
        ]);

        $data = [
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        if (Auth::attempt(['email' => $data['email'], 'password' => $request->password])) {
            return Redirect('/login')->with('success', 'register Success');
        } else {
            return redirect('register')->withErrors('email atau Password yang dimasukkan salah');
        }
    }

    public function get_login()
    {
        return view("login");
    }

    public function post_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('welcome')->with('success', 'Login Success');
        } else {
            return redirect('login')->withErrors('Email atau password yang dimasukkan salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('success', 'Logout Success');
    }
}
