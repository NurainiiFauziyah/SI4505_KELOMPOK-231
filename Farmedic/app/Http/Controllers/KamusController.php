<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamus;

class KamusController extends Controller
{
    public function index()
    {
        $kamuses = Kamus::all();
        return view('kamuspenyakit.kamus', compact('kamuses'));
    }

   
}

