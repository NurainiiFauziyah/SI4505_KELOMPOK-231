<?php


// app/Http/Controllers/KonsultasiController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
        function index(){
            $dokter = Dokter::all();
            return view('Konsultasi.index', compact('dokter'));
        }
}

