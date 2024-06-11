@extends('layouts.layout')

@section('content')
<style>
    .active-forum {
        background-color: #F18200;
        border-radius: 999px;
        padding: 10px;
        color: white;
        font-size: 15px;
        font-family: Inter;
        font-weight: 700;
        word-wrap: break-word;
    }
    
    .hero {
        position: relative;
        height: 100vh;
        overflow: hidden;
        --background-color: #000000;
        --default-color: #ffffff;
        --heading-color: #ffffff;
        width: 100%;
        min-height: 100vh;
        position: relative;
        padding: 160px 0 100px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .hero img {
        position: absolute;
        inset: 0;
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }
    
    .hero:before {
        content: "";
        background: color-mix(in srgb, var(--background-color), transparent 100%);
        position: absolute;
        inset: 0;
        z-index: 2;
    }
    
    .hero .container {
        position: relative;
        z-index: 3;
    }
    
    .hero h2 {
        margin: 0;
        font-size: 48px;
        text-transform: uppercase;
        font-weight: 700;
        color: var(--default-color);
        font-family: 'Poppins', sans-serif;
    }
    
    .hero p {
        margin: 10px 0 0 0;
        font-size: 24px;
        color: var(--heading-color);
    }
    
    .hero .btn-get-started {
        color: var(--default-color);
        font-weight: 400;
        font-size: 15px;
        display: inline-block;
        padding: 8px 30px;
        margin: 30px 0 0 0;
        transition: 0.5s;
        text-transform: uppercase;
        border: 2px solid color-mix(in srgb, var(--default-color), transparent 20%);
    }
    
    .hero .btn-get-started:hover {
        color: #F18200;
        background: var(--accent-color);
        border-color: var(--accent-color);
    }
    
    @media (max-width: 768px) {
        .hero h2 {
            font-size: 32px;
        }
        
        .hero p {
            font-size: 18px;
        }
    }
    
    img {
        filter: brightness(80%);
    }
    
    .vaccine-container {
        text-align: center;
        padding: 50px 0;
        background-color: #f9f9f9;
    }
    
    .vaccine-container h2 {
        margin-bottom: 40px;
        color: #333;
        font-family: 'Poppins', sans-serif;
    }
    
    .vaccine-item {
        display: flex;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        text-align: left;
    }
    
    .vaccine-item img {
        max-width: 150px;
        margin-right: 20px;
        border-radius: 8px;
    }
    
    .vaccine-details {
        display: flex;
        flex-direction: column;
    }
    
    .vaccine-details h3 {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
        font-family: 'Poppins', sans-serif;
    }
    
    .vaccine-details p {
        margin: 0;
        color: #666;
    }
    
    .vaccine-details ul {
        list-style: none;
        padding: 0;
        margin: 10px 0 0;
        color: #666;
    }
    
    .vaccine-details ul li {
        margin-bottom: 5px;
    }
    
    .cta-btn {
        color: #fff;
        background: #f18200;
        border: none;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        border-radius: 5px;
        text-transform: uppercase;
        transition: background-color 0.3s;
        text-decoration: none;
    }
    
    .cta-btn:hover {
        background: #e67300;
    }
    
    @media (max-width: 768px) {
        .vaccine-item {
            flex-direction: column;
            align-items: center;
        }
        
        .vaccine-item img {
            margin-bottom: 20px;
        }
    }
</style>


<div class="hero">
    <img src="https://ditjenpkh.pertanian.go.id/storage/photos/shares/konten/berita/KickOffJatim.jpeg" alt="" data-aos="fade-in">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-start">
            <div class="col-lg-8">
                <h2>AYO VAKSIN HARI INI</h2>
                <p>Jaga Kesehatan Hewan Ternak Anda dengan Kami!</p>
                <p>Pesan Sekarang untuk Perlindungan yang Terpercaya.</p>
                <a href="#about" class="btn-get-started">Mulai</a>
            </div>
        </div>
    </div>
</div>

<section id="about" class="about section" style="padding-top: 100px;">
    <div class="container section-title text-center" data-aos="fade-up">
        <h2>Vaksinasi Pada Ternak</h2>
        <p>Vaksinasi merupakan cara yang efektif untuk mengendalikan penyakit menular pada ternak. Pemerintah telah mengatur dan mendukung program vaksinasi untuk melindungi kesehatan ternak dan mencegah penyebaran penyakit.</p>
    </div>

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                <h3>Pentingnya Vaksinasi untuk Ternak</h3>
                <ul>
                    <li><i class="bi bi-check-circle"></i> Mencegah penyebaran penyakit menular pada ternak.</li>
                    <li><i class="bi bi-check-circle"></i> Menjaga kesehatan ternak dan meningkatkan produktivitas.</li>
                    <li><i class="bi bi-check-circle"></i> Mendukung program kesehatan hewan nasional.</li>
                </ul>
            </div>
        </div>
    </div>
</section>



    <section class="vaccine-container">
        <div class="container">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-md-12">
                    <h2><span class="text-1">Daftar</span> <span class="text-2">Vaksin</span></h2>
                    </div>
                </div>
            <div class="row gy-4">
                <div class="col-lg-6 col-md-6 vaccine-item">
                    <img src="https://pusvetma.ditjenpkh.pertanian.go.id/upload/produk/1563707573.Antigen%20AI%20H9N2.png" alt="Vaksin Rabies">
                    <div class="vaccine-details">
                        <h3>Vaksin Rabies</h3>
                        <p>Rp 300.000</p>
                        <p>Kontak: (082999931922)</p>
                        <ul>
                            <li>Mencegah rabies</li>
                            <li>Melindungi hewan dan manusia dari penularan melalui gigitan hewan terinfeksi</li>
                            <li>Mengurangi penyebaran rabies dan kematian akibat rabies</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 vaccine-item">
                    <img src="https://e-katalog.lkpp.go.id/katalog/produk/download/gambar/969847320?file_name=4895462143320.jpeg&v=3&file_sub_location=produk_gambar%2F2023%2F09%2F06" alt="Vaksin Tetanus">
                    <div class="vaccine-details">
                        <h3>Vaksin Tetanus</h3>
                        <p>Rp 300.000</p>
                        <p>Kontak: (082999931922)</p>
                        <ul>
                            <li>Mencegah tetanus, penyakit serius akibat bakteri Clostridium tetani</li>
                            <li>Melindungi orang dari segala usia, termasuk bayi, anak-anak, orang dewasa, dan orang tua</li>
                            <li>Melindungi wanita hamil dan bayi mereka</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 vaccine-item">
                    <img src="https://pusvetma.ditjenpkh.pertanian.go.id/upload/produk/1553500460.produk%20brucivet.png" alt="Vaksin Clostridium">
                    <div class="vaccine-details">
                        <h3>Vaksin Clostridium</h3>
                        <p>Rp 300.000</p>
                        <p>Kontak: (082999931922)</p>
                        <ul>
                            <li>Mencegah penyakit clostridium (diare, botulisme, tetanus)</li>
                            <li>Melindungi orang dari segala usia, termasuk bayi, anak-anak, orang dewasa, wanita hamil, dan orang yang bekerja di luar ruangan</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 vaccine-item">
                    <img src="https://e-katalog.lkpp.go.id/katalog/produk/download/gambar/969847320?file_name=4895462143320.jpeg&v=3&file_sub_location=produk_gambar%2F2023%2F09%2F06" alt="Vaksin Leptospirosis">
                    <div class="vaccine-details">
                        <h3>Vaksin Leptospirosis</h3>
                        <p>Rp 300.000</p>
                        <p>Kontak: (082999931922)</p>
                        <ul>
                            <li>Mencegah penyakit serius yang disebabkan bakteri di air dan tanah terkontaminasi</li>
                            <li>Melindungi orang berisiko tinggi (petani, peternak, dokter hewan, dll.)</li>
                            <li>Melindungi hewan peliharaan (anjing, sapi)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section">
    <img src="assets/img/cta-bg.jpg" alt="">
    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
                <div class="text-center">
                    <h3>Pesan Vaksin Sekarang</h3>
                    <p>Hubungi kami melalui WhatsApp untuk memesan vaksin dan mendapatkan perlindungan terbaik untuk ternak Anda.</p>
                    <a class="cta-btn" id="pesan-vaksin-btn" href="https://wa.me/1234567890" target="_blank">Pesan Vaksin</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
  document.getElementById('pesan-vaksin-btn').addEventListener('click', function() {
      fetch('{{ route('vaksin.pesan') }}', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify({})
      })
      .then(response => {
          if (response.ok) {
              alert('Pemesanan vaksin berhasil disimpan.');
          } else {
              console.error('Gagal menyimpan riwayat pemesanan vaksin.');
          }
      })
      .catch(error => {
          console.error('Error:', error);
      });
  });
  </script>
  
@endsection