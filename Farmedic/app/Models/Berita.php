<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas'; // Nama tabel di database

    protected $fillable = ['judul', 'gambar', 'tanggal', 'url_berita']; // Kolom yang dapat diisi

    public $timestamps = true; // Jika tabel menggunakan timestamp (created_at dan updated_at)

    // Tambahan kode lainnya sesuai kebutuhan
}
