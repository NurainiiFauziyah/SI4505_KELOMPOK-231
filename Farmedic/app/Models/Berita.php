<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas'; // Nama tabel di database

    protected $fillable = ['judul', 'gambar', 'tanggal', 'url_berita']; // Kolom yang dapat diisi

    // Tambahan kode lainnya sesuai kebutuhan
}
