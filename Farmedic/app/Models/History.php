<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'activity', 'created_at'];

    public $timestamps = false;

    protected $dates = ['created_at']; // Pastikan kolom 'created_at' diinterpretasikan sebagai tanggal

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

