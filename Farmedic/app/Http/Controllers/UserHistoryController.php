<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;
use App\Models\Comment;

class UserHistoryController extends Controller
{
    public function index()
    {
        // Ambil semua diskusi yang telah dibuat oleh pengguna
        $discussions = Discussion::where('user_id', auth()->id())->get();

        // Ambil semua komentar yang telah dibuat oleh pengguna
        $comments = Comment::where('user_id', auth()->id())->get();

        return view('/riwayat', compact('discussions', 'comments'));
    }
}
