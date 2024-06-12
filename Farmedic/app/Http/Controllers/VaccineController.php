<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class VaccineController extends Controller
{
    public function pesanVaksin(Request $request)
    {
 
        History::create([
            'user_id' => auth()->id(),
            'activity' => 'Pemesanan vaksin'
        ]);


    }
}
