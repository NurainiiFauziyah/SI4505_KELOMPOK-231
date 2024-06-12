<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function get_register()
    {
        return view("reglog.register");
    }

    public function post_register(Request $request)
    {
        Session::flash('email', $request->email);

        $request->validate([
            'full_name' => 'required',
            'phone_number' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'full_name.required' => 'Nama wajib diisi',
            'phone_number.required' => 'Nomor telepon wajib diisi',
            'phone_number.numeric' => 'Nomor telepon harus berupa angka',
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

        $user = User::create($data);

        // Menambahkan riwayat pendaftaran akun
        History::create([
            'user_id' => $user->id,
            'activity' => 'Mendaftar akun',
        ]);

        return Redirect('/login')->with('success', 'Register Success');
    }

    public function get_login()
    {
        return view("reglog.login");
    }

    public function post_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Masukkan email yang valid',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            // Menambahkan riwayat login
            History::create([
                'user_id' => Auth::id(),
                'activity' => 'Login',
            ]);

            // Cek apakah pengguna baru
            $user = Auth::user();
            if ($user->created_at == $user->updated_at) {
                // Jika pengguna baru, arahkan ke halaman katalog
                return redirect()->route('katalog.index')->with('success', 'Welcome! Please choose your livestock.');
            } else {
                // Jika pengguna lama, arahkan ke halaman homepage
                return redirect()->route('welcome.index')->with('success', 'Login Success');
            }
        } else {
            return redirect('login')->withErrors('Email atau Password yang dimasukkan salah');
        }
    }

    public function logout()
    {
        // Menambahkan riwayat logout
        History::create([
            'user_id' => Auth::id(),
            'activity' => 'Logout',
        ]);

        Auth::logout();
        return redirect('login')->with('success', 'Logout Success');
    }
}
