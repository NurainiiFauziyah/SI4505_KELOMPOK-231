<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Discussion;
use App\Models\Comment;
use App\Models\History;

class UserHistoryController extends Controller
{
    public function index()
    {
        $histories = History::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        $discussions = Discussion::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        $comments = Comment::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        
        return view('riwayat', compact('discussions', 'comments', 'histories'));
    }    

    public function pesanVaksin(Request $request)
    {
        History::create([
            'user_id' => Auth::id(),
            'activity' => 'Pemesanan vaksin'
        ]);

        return response()->json(['message' => 'Pemesanan vaksin berhasil disimpan.']);
    }
}
