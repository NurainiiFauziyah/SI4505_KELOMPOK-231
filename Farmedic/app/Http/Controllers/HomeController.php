<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Jika metode adalah POST, tangani data yang dikirimkan
        if ($request->isMethod('post')) {
            // Lakukan sesuatu dengan data POST
            // $data = $request->all();
            // Logika penanganan data POST
        }

        // Mendapatkan semua postingan terbaru
     
        
        return view('welcome');
    }
}
