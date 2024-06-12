<?php

namespace Database\Seeders;

use App\Models\Monitoring;
use Illuminate\Database\Seeder;

class MonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Monitoring::create([
            'date' => '2024-05-06',
            'title' => 'Periksa Kesehatan Kambing Peliharaan',
            'description' => 'Pastikan kambing peliharaan Anda dalam kondisi sehat dan bahagia.',
            'detail' => 'Keluhan :
                          - Kambing terlihat lesu dan kurang bersemangat
                          - Bulu kambing tampak kusam dan berantakan
                          - Kambing sering menggaruk atau menggigit tubuhnya sendiri
                        Solusi :
                          - Periksa ke dokter hewan untuk pemeriksaan kesehatan lebih lanjut
                          - Mandikan kambing dengan sampo khusus untuk meningkatkan kesehatan bulu
                          - Berikan lebih banyak latihan fisik dan aktivitas yang menyenangkan',
            'photo' => 'gambar/kambing1.png',
            'detail_photo' => 'gambar/kambing.png'
        ]);
        
        Monitoring::create([
            'date' => '2024-05-07',
            'title' => 'Cek Kondisi Kambing Peliharaan',
            'description' => 'Pastikan kambing peliharaan Anda dalam kondisi prima dan bahagia.',
            'detail' => 'Keluhan :
                          - Kambing sering muntah setelah makan
                          - Kambing tampak kurang bersemangat dan lesu
                          - Bulu kambing tampak berantakan dan kusam
                        Solusi :
                          - Berikan makanan ringan yang lebih mudah dicerna untuk mengurangi muntah
                          - Mandikan kambing dengan sampo khusus untuk meningkatkan kesehatan bulu
                          - Berikan lebih banyak perhatian dan mainan untuk meningkatkan semangat kambing',
            'photo' => 'gambar/kambing2.png',
            'detail_photo' => 'gambar/kambing.png'
        ]);
        
        Monitoring::create([
            'date' => '2024-05-08',
            'title' => 'Periksa Kondisi Kambing Anda',
            'description' => 'Pastikan kambing Anda dalam kondisi sehat dan nyaman di kandangnya.',
            'detail' => 'Keluhan :
                          - Kambing kurang aktif dan jarang bergerak di kandang
                          - Makanan dan minuman di kandang tersisa berhari-hari
                          - Bulu kambing tampak kusam dan berantakan
                        Solusi :
                          - Periksa kondisi kandang, pastikan kebersihan dan keamanannya
                          - Berikan makanan segar dan bergizi setiap hari
                          - Mandikan kambing dengan air bersih untuk membersihkan bulunya',
            'photo' => 'gambar/kambing3.png',
            'detail_photo' => 'gambar/kambing.png'
        ]);
        
        Monitoring::create([
            'date' => '2024-05-09',
            'title' => 'Segera Vaksinasi Kambing Peliharaan',
            'description' => 'Jaga kesehatan kambing peliharaan Anda dengan melakukan vaksinasi secara rutin.',
            'detail' => 'Keluhan :
                          - Kambing sering bersin dan mengeluarkan lendir dari hidung
                          - Makanan yang biasa dimakan kambing berkurang
                          - Kambing tampak kurang bersemangat dan lesu
                        Solusi :
                          - Segera periksakan kambing ke dokter hewan untuk vaksinasi dan pemeriksaan kesehatan lebih lanjut
                          - Berikan makanan yang lebih bergizi dan vitamin tambahan
                          - Jaga kebersihan kandang dan lingkungan kambing agar lebih sehat',
            'photo' => 'gambar/kambing1.png',
            'detail_photo' => 'gambar/kambing.png'
        ]);
        
        Monitoring::create([
            'date' => '2024-05-10',
            'title' => 'Periksa Kesehatan Kambing Peliharaan Anda',
            'description' => 'Pastikan kambing peliharaan Anda dalam kondisi sehat dan tidak mengalami masalah kesehatan.',
            'detail' => 'Keluhan :
                          - Kambing sering menolak makan
                          - Perilaku kambing tampak tidak biasa, seperti gelisah atau diam terlalu lama
                          - Kulit kambing terlihat kusam atau terdapat bagian yang terluka
                        Solusi :
                          - Periksa suhu dan kondisi lingkungan dalam kandang kambing
                          - Coba berikan makanan yang lebih menarik bagi kambing
                          - Mandikan kambing dengan air hangat untuk membantu dalam pembersihan bulu dan membersihkan luka',
            'photo' => 'gambar/kambing2.png',
            'detail_photo' => 'gambar/kambing.png'
        ]);
    }
}
