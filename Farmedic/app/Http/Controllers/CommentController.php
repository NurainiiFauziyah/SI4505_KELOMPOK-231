<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;
use App\Models\History;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    public function store(Request $request, $discussionId)
    {
        $request->validate([
            'content' => 'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk file gambar
        ]);

        // Simpan foto jika diunggah
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos'); 
        } else {
            $photoPath = null; // Jika pengguna tidak mengunggah foto, atur path foto menjadi null
        }

        // Simpan komentar
        $comment = new Comment();
        $comment->user_id = auth()->id() ?? null;
        $comment->discussion_id = $discussionId;
        $comment->content = $request->content;
        $comment->photo = $photoPath; // Simpan path foto ke dalam database
        $comment->save();

                // Menyimpan riwayat aktivitas pengguna
        $discussion = Discussion::find($discussionId);
        History::create([
            'user_id' => auth()->id(),
            'activity' => 'Mengomentari diskusi: ' . $discussion->title,
            'created_at' => now(), // Pastikan `created_at` diisi dengan timestamp saat ini
        ]);

        return redirect()->route('discussion.detail', ['id' => $discussionId])->with('success', 'Komentar berhasil disimpan.');
    }
}
