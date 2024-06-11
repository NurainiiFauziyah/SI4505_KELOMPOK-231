<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Dokter;


class DokterHewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter = Dokter::latest()->get();
        return view('Dokter.index', compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dokter = Dokter::select('id', 'dokter')->get();
        return view('Dokter.create', compact('dokter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'harga_konsultasi' => 'numeric', // Validasi agar harga_konsultasi hanya menerima input angka
            'jam_mulai' => 'required|date_format:H:i', // Validasi format jam_mulai
            'jam_selesai' => 'required|date_format:H:i', // Validasi format jam_selesai
        ]);

        $imageName = null;

        // Memastikan bahwa file gambar tersedia sebelum menyimpannya
        if ($request->hasFile('gambar')) {
            // Menyimpan file gambar ke dalam folder 'public/dokter' dan mendapatkan path-nya
            $imagePath = $request->file('gambar')->store('public/dokter');

            // Mengambil nama file gambar untuk disimpan dalam database
            $imageName = basename($imagePath);
        }

        // Membuat entri dokter baru dengan menggunakan data yang diterima dari form
        Dokter::create([
            'dokter' => $request->dokter,
            'gambar' => $imageName,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'harga_konsultasi' => $request->harga_konsultasi,
        ]);

        // Mengarahkan kembali ke halaman indeks dokter setelah proses penyimpanan selesai
        return redirect()->route('Dokter');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dokter = Dokter::find($id);

        // Periksa apakah file gambar baru diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama dari penyimpanan
            Storage::delete($dokter->gambar);

            // Simpan gambar baru ke dalam penyimpanan
            $imagePath = $request->file('gambar')->store('public/dokter');

            // Mengambil nama file gambar untuk disimpan dalam database
            $imageName = basename($imagePath);

            // Update gambar dokter dengan yang baru
            $dokter->gambar = $imageName;
        }

        // Update dokter dengan data yang diterima dari form
        $dokter->update([
            'dokter' => $request->dokter,
            'body' => $request->body,
            'jam_kerja' => $request->jam_kerja,
            'harga_konsultasi' => $request->harga_konsultasi,
        ]);

        // Mengarahkan kembali ke halaman indeks dokter setelah proses penyimpanan selesai
        return redirect()->route('Dokter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokter = Dokter::find($id);

        // Periksa apakah file gambar ada dan hapus jika ada
        if (Storage::exists($dokter->gambar)) {
            Storage::delete($dokter->gambar);
        }

        // Hapus dokter dari database
        $dokter->delete();

        // Mengarahkan kembali ke halaman indeks dokter setelah proses penghapusan selesai
        return redirect()->route('Dokter');
    }
}
