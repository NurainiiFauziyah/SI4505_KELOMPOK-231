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
    function get_register(){
        return view("reglog.register");
    }
    function post_register(Request $request)
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
        'full_name'=> $request->full_name,
        'phone_number'=> $request->phone_number,
        'email'=> $request->email,
        'password'=>Hash::make($request->password)
    ];


    User::create($data);
        return Redirect('/login')->with('success','register Success');


    }

function get_login(){
    return view("reglog.login");
}
function post_login(Request $request){

    Session::flash('email', $request->email);
    $request ->validate([
       'email'=>'required',
       'password'=>'required',
    ],[
        'email.required'=>'email wajib diisi',
        'password.required'=>'password wajib diisi',
    ]);


    $infologin = [
        'email' => $request ->email,
        'password' => $request ->password,
    ];

    if(Auth::attempt($infologin)){
        return redirect('homepage')->with('success', 'Login Success');
    }else{
        return redirect('reglog.login')->withErrors('email atau Password yang dimasukkan salah');

    }
}
    function logout(){
        Auth::logout();
        return redirect('reglog.login')->with('success', 'logout Success');
    }
}

