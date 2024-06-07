<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::create([
            'judul' => 'Penyakit mulut dan kuku hewan ternak terus meluas: Mengapa masyarakat perlu khawatir?',
            'gambar' => 'gambar/gambar1.png',
            'tanggal' => '2022-05-12',
            'url_berita' => 'https://www.bbc.com/indonesia/indonesia-61413706'
        ]);

        Berita::create([
            'judul' => 'PMK: Peternak sapi sebut situasinya sudah SOS karena penularan memburuk jelang Iduladha',
            'gambar' => 'gambar/gambar2.png',
            'tanggal' => '2022-06-08',
            'url_berita' => 'https://www.bbc.com/indonesia/indonesia-61701746#:~:text=Sejumlah%20peternak%20dan%20pakar%20menyebut%20penyebaran%20kasus%20penyakit,yang%20mengakui%20bahwa%20telah%20terjadi%20wabah%20secara%20nasional.'
        ]);

        Berita::create([
            'judul' => '2.095 Hewan Ternak Mati karena Wabah PMK di Indonesia',
            'gambar' => 'gambar/gambar3.png',
            'tanggal' => '2022-07-12',
            'url_berita' => 'https://nasional.kompas.com/read/2022/07/12/18333371/2095-hewan-ternak-mati-karena-wabah-pmk-di-indonesia'
        ]);

        Berita::create([
            'judul' => 'Menjelang Idul Adha, Pengawasan Tempat Penampungan Hewan Ternak Diperketat',
            'gambar' => 'gambar/gambar4.png',
            'tanggal' => '2024-05-26',
            'url_berita' => 'https://bisnis.tempo.co/read/1872300/menjelang-idul-adha-pengawasan-tempat-penampungan-hewan-ternak-diperketat'
        ]);

        Berita::create([
            'judul' => 'Hewan Ternak Mati Akibat Penyakit Ngorok, Begini Penjelasan Dokter Hewan Unair',
            'gambar' => 'gambar/gambar5.png',
            'tanggal' => '2024-06-02',
            'url_berita' => 'https://kominfo.jatimprov.go.id/berita/ternak-mati-akibat-penyakit-ngorok-simak-penjelasan-dokter-hewan-unair#:~:text=Akibatnya%2C%20ratusan%20sapi%20dan%20kerbau%20yang%20terserang%20penyakit,multocida.%20Penyakit%20ini%20secara%20medis%20disebut%20Septicaemia%20epizootica.'
        ]);

        Berita::create([
            'judul' => '120.000 Vaksin PMK Disebar untuk Hewan Ternak di Jawa Barat',
            'gambar' => 'gambar/gambar6.png',
            'tanggal' => '2024-06-02',
            'url_berita' => 'https://ramadan.tempo.co/foto/98451/120-000-vaksin-pmk-disebar-untuk-hewan-ternak-di-jawa-barat'
        ]);
    }
}
