<?php

namespace App\Http\Controllers;
use App\Models\Kamuspenyakit;
use App\Models\panduanperawatan;
use Illuminate\Http\Request;

class KamuspenyakitController extends Controller
{
    public function index(){
        $kamuspenyakit = Kamuspenyakit::all();
        return view ('kamuspenyakit.index', compact (['kamuspenyakit']));
    }

    
}
