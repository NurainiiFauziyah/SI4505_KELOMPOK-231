<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RekomendasiObat;

class RekomendasiObatSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        RekomendasiObat::create([
            'nama' => 'Intermectin',
            'keterangan' => 'Intermectin adalah obat antiparasit untuk hewan ternak yang mengandung Ivermectin. Obat ini efektif melawan berbagai parasit internal dan eksternal, seperti cacing dan kutu pada sapi. Dosis yang direkomendasikan adalah 1 ml per 50 kg berat badan hewan.',
            'gambar' => 'https://www.perkasaveterina.com/sites/default/files/INTERMECTIN.jpg',
        ]);

        RekomendasiObat::create([
            'nama' => 'Wormectin',
            'keterangan' => 'Wormectin adalah obat cacing untuk sapi yang mengandung Ivermectin. Obat ini digunakan untuk mengendalikan cacing internal pada sapi dengan cara mengganggu sistem saraf cacing. Wormectin efektif terhadap berbagai jenis cacing seperti cacing usus, hati, dan paru-paru pada sapi.',
            'gambar' => 'https://s3.bukalapak.com/img/3736632125/large/wormectin_injeksi__5_ml__anti_parasit_luar_dan_parasit_dalam.jpg',
        ]);

        RekomendasiObat::create([
            'nama' => 'Ivomec',
            'keterangan' => 'Ivomec adalah obat cacing untuk sapi yang mengandung Ivermectin. Dosis tipikalnya adalah 1 ml per 50 kg bobot badan, diberikan secara subkutan. Meskipun efektif, efek samping ringan mungkin terjadi seperti gatal-gatal atau pembengkakan di area suntikan.',
            'gambar' => 'https://th.bing.com/th/id/OIP.cFQq0dAtqXVn2a1HSrnHVwHaFr?w=1200&h=921&rs=1&pid=ImgDetMain',
        ]);

        // Tambahkan data lainnya jika perlu
    }
}
