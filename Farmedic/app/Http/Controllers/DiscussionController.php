<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;
use App\Models\User;
use App\Models\Comment;

class DiscussionController extends Controller
{
    public function index()
    {
        // Mengambil data diskusi dari database
        $discussions = Discussion::with('user')->get();

        // Mengambil data pengguna dari database
        $users = User::all();

        return view('Forum.forum', compact('discussions', 'users'));
    }

    public function diskusiDetail($id)
    {
        // Mengambil data diskusi berdasarkan ID
        $discussion = Discussion::with('user')->findOrFail($id);
        $discussion = Discussion::with('comments')->findOrFail($id);


        return view('Forum.detailforum', compact('discussion'));
    }

    public function create()
    {
        return view('Forum.post');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Menyimpan data diskusi baru
        Discussion::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(), // Pastikan pengguna sudah terautentikasi
        ]);

        // Redirect ke halaman diskusi dengan pesan sukses
        return redirect()->route('diskusi.index')->with('success', 'Diskusi baru berhasil dibuat!');
    }
}
