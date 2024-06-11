<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'email' => 'required|email',
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'katalog_choice' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $imagePath;
        }

        $user->email = $request->email;
        $user->full_name = $request->full_name;
        $user->phone_number = $request->phone_number;
        $user->katalog_choice = $request->katalog_choice;
        $user->save();

        // Tambahkan entri ke dalam riwayat
        $history = new History();
        $history->user_id = $user->id;
        $history->activity = 'Profil Diperbarui';
        $history->save();


        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }

    public function saveKatalogChoice(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'katalog_choice' => 'required|string|max:255',
        ]);

        $user->katalog_choice = $request->katalog_choice;
        $user->save();

        return response()->json(['message' => 'Katalog choice saved successfully.']);
    }
}
