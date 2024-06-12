<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class WelcomeController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('welcome', compact('beritas'));
    }
}
