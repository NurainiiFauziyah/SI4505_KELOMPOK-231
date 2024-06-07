<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index(Request $request)
    {
        // Ambil nilai 'month' dan 'year' dari query string, gunakan 'all' sebagai default
        $month = $request->query('month', 'all');
        $year = $request->query('year', 'all');

        // Inisialisasi query builder untuk model Reminder
        $query = Reminder::query();

        // Tambahkan kondisi untuk filter berdasarkan bulan
        if ($month !== 'all') {
            $query->whereMonth('date', $month);
        }
    
        // Tambahkan kondisi untuk filter berdasarkan tahun
        if ($year !== 'all') {
            $query->whereYear('date', $year);
        }

        // Urutkan berdasarkan waktu terbaru (kolom 'date')
        $reminders = $query->orderBy('date', 'desc')->get();

        // Kirim nilai 'reminders', 'month', dan 'year' ke view
        return view('reminder.reminder', compact('reminders', 'month', 'year'));
    }
}
