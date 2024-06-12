<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reminder;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Reminder::create([
        'date' => '2024-05-05',
        'title' => 'Segera konsultasikan hewan anda!',
        'description' => 'Cek kesehatan hewan anda dan saatnya konsul sekarang.',
        'modal_message' => 'Jadwal Konsultasi Selanjutnya Sudah Datang',
        'doctor_name' => 'Dokter Yanto',
        'next_appointment' => '2024-03-13'
    ]);
    
    Reminder::create([
        'date' => '2024-05-07',
        'title' => 'Periksa hewan peliharaan Anda',
        'description' => 'Penting untuk memeriksa kesehatan hewan peliharaan secara berkala.',
        'modal_message' => 'Waktunya untuk kunjungan rutin!',
        'doctor_name' => 'Dokter Annisa',
        'next_appointment' => '2024-05-25'
    ]);
    
    Reminder::create([
        'date' => '2024-05-10',
        'title' => 'Vaksinasi hewan peliharaan',
        'description' => 'Segera lakukan vaksinasi pada hewan peliharaan Anda untuk mencegah penyakit.',
        'modal_message' => 'Jangan lupa untuk membuat janji vaksinasi!',
        'doctor_name' => 'Dokter Budi',
        'next_appointment' => '2024-05-30'
    ]);
    
    Reminder::create([
        'date' => '2024-05-15',
        'title' => 'Pembersihan gigi hewan peliharaan',
        'description' => 'Lakukan pembersihan gigi secara teratur untuk menjaga kesehatan mulut hewan peliharaan Anda.',
        'modal_message' => 'Waktu untuk membersihkan gigi hewan peliharaan!',
        'doctor_name' => 'Dokter Cahaya',
        'next_appointment' => '2024-06-05'
    ]);
    
    Reminder::create([
        'date' => '2024-05-20',
        'title' => 'Konsultasi hewan peliharaan',
        'description' => 'Segera konsultasikan masalah kesehatan hewan peliharaan Anda dengan dokter hewan.',
        'modal_message' => 'Sudah saatnya untuk konsultasi.',
        'doctor_name' => 'Dokter Dani',
        'next_appointment' => '2024-06-10'
    ]);
        
    }
}

