<?php

// UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Register; // Pastikan model User diimport

class RegisterController extends Controller


{
    public function get_register()
    {
        return view('register');
    }

    public function get_login()
    {
        return view('login');
    }

    
    public function post_register(Request $request)

    
    {

        
        // Validasi input
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:register',
            'phone_number' => 'required|string',
            'password' => 'required|string',
        ]);

        // Simpan data ke database
        $register = Register::create($validatedData);

        // Redirect ke halaman login atau kirim respons JSON, sesuai kebutuhan
    }

    public function post_login(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6|max:255',
        ]);

        // Coba melakukan login
    if (Auth::attempt($validatedData)) {
        // Jika berhasil, redirect ke halaman beranda atau kirim respons JSON, sesuai kebutuhan
        return redirect()->intended('/beranda'); // Ubah '/beranda' dengan URL beranda yang sesuai
    } else {
        // Jika gagal, kembali ke halaman login dengan pesan kesalahan atau kirim respons JSON, sesuai kebutuhan
        return back()->withErrors(['email' => 'Login gagal. Email atau password salah.']); // Kembali ke halaman login dengan pesan kesalahan
    }
}

public function logout(Request $request)
{
    Auth::logout();

    // Redirect ke halaman login atau kirim respons JSON, sesuai kebutuhan
    return redirect('/login'); // Ubah '/login' dengan URL login yang sesuai
}
}