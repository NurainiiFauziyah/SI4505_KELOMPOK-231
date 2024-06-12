<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kamus;

class KamusSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Cacingan',
                'keterangan' => 'Cacingan pada sapi merujuk pada kondisi di mana sapi terinfeksi oleh cacing-cacing parasit dalam tubuhnya. Cacingan dapat disebabkan oleh berbagai jenis cacing internal seperti cacing usus, cacing hati, dan cacing paru-paru.',
                'gambar' => 'gambar/kamus1.png',
            ],
            [
                'nama' => 'Penyakit Mulut dan Kuku',
                'keterangan' => 'Penyakit ini dapat disebabkan oleh berbagai faktor termasuk infeksi bakteri, virus, atau jamur. Gejalanya dapat mencakup pembengkakan, peradangan, atau luka pada mulut dan kuku sapi.',
                'gambar' =>'gambar/kamus1.png',
            ],
            [
                'nama' => 'Infeksi Mata',
                'keterangan' => 'Infeksi mata pada domba bisa disebabkan oleh berbagai faktor termasuk infeksi bakteri, virus, atau jamur. Gejalanya dapat meliputi pembengkakan, kemerahan, peningkatan lendir, dan kadang-kadang keluarnya nanah dari mata.',
                'gambar' => 'gambar/kamus1.png',
            ],            
            [
                'nama' => 'Kusta Kulit',
                'keterangan' => 'Kusta kulit adalah penyakit kulit yang sering terjadi pada kambing. Penyebabnya biasanya adalah infeksi parasit seperti tungau atau jamur. Gejala klinis meliputi perubahan pada kulit, kerontokan bulu, dan gatal-gatal.',
                'gambar' => 'gambar/kamus1.png',
            ],
            [
                'nama' => 'Scabies (Kudis)',
                'keterangan' => 'Scabies, atau kudis, adalah penyakit kulit yang disebabkan oleh tungau. Gejala termasuk gatal-gatal yang parah, kulit merah, keropeng, dan kerontokan bulu. Infeksi biasanya terjadi di daerah yang tidak berbulu seperti perut, kepala, dan leher.',
                'gambar' => 'gambar/kamus1.png',
            ],
            [
                'nama' => 'Keracunan Tanaman',
                'keterangan' => 'Kambing bisa mengalami keracunan akibat memakan tanaman beracun. Gejala keracunan dapat bervariasi tergantung pada tanaman yang dikonsumsi, tetapi biasanya meliputi muntah, diare, kejang, dan kelemahan otot.',
                'gambar' => 'gambar/kamus1.png',
            ],
            // Tambahkan data lainnya di sini
        ];

        // Loop data untuk disimpan ke database
        foreach ($data as $kamus) {
            Kamus::create($kamus);
        }
    }
}
