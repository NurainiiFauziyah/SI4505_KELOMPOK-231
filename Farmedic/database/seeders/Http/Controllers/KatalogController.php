<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    function index(){
        return view('Katalog.index');
    }
}
