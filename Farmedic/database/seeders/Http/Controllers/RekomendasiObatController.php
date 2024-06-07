<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekomendasiObat;

class RekomendasiObatController extends Controller
{
    public function index()
    {
        $rekomendasi_obats = RekomendasiObat::all();
        return view('rekomendasi.recom', compact('rekomendasi_obats'));
    }
}

