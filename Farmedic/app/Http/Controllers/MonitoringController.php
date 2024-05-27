<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoring;

class MonitoringController extends Controller
{
    public function index()
    {
        $monitorings = Monitoring::all();
        return view('monitoring.monitoring', compact('monitorings'));
    }

    public function filter(Request $request)
    {
        $month = $request->input('month', 'all');
        $year = $request->input('year', 'all');
    
        $query = Monitoring::query();
    
        if ($month !== 'all') {
            $query->whereMonth('date', $month);
        }
    
        if ($year !== 'all') {
            $query->whereYear('date', $year);
        }
    
        // Urutkan berdasarkan tanggal terbaru
        $monitorings = $query->orderBy('date', 'desc')->get();
    
        return view('monitoring.monitoring', compact('monitorings', 'month', 'year'));
    }
    
}

