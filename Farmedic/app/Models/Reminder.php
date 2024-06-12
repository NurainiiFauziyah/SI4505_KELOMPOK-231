<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'title',
        'description',
        'modal_message',
        'doctor_name',
        'next_appointment',
    ];

    protected $dates = [
        'date',
        'next_appointment',
    ];
}
