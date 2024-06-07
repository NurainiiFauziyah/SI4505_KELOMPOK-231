<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index()
    {
        $trackings = Tracking::all();
        return view('tracking.tracking', compact('trackings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'keluhan' => 'required|string',
            'tanggal_konsul' => 'required|date',
            'upload_foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('upload_foto')) {
            $image = $request->file('upload_foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads', $imageName);
            $photoPath = 'uploads/' . $imageName;
        }
    
        Tracking::create([
            'nama_hewan' => $request->input('nama_hewan'),
            'keluhan' => $request->input('keluhan'),
            'tanggal_konsul' => $request->input('tanggal_konsul'),
            'photo' => $photoPath,
        ]);
    
        return redirect()->route('trackings.index')->with('success', 'Tracking added successfully.');
    }

    public function destroy($id)
    {
        $tracking = Tracking::findOrFail($id);
        $tracking->delete();
        
        return redirect()->route('trackings.index')->with('success', 'Tracking deleted successfully.');
    }
}
