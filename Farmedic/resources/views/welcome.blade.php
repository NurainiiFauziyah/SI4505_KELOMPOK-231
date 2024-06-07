@extends('layouts.layout')

@section('content')
<!-- Carousel -->
<div class="card mb-3" style="width: 100%; background-color: #1B4445; border: none; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; height: 400px; display: flex; align-items: center; justify-content: space-between;">
    <div class="card-body" style="display: flex; align-items: center; justify-content: start;">
        <div style="flex: 1; text-align: left; margin-right: 20px;">
            <h5 class="card-title" style="color: #FFFFFF; font-size: 30px;">Selamat datang di Farmedic!</h5>
            <p class="card-text" style="color: #FFFFFF; font-size: 25px;">Konsultasikan kesehatan dan perawatan hewan ternakmu dengan kami.</p>
        </div>
        <div style="flex: 0 0 300px;">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/23941d60b05a1b45c61fc90fa459a885a60b403be2c0b84fc1b380fe15f7e699?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="gambar" style="width: 300px; height: 297px;">
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
         <div class="col-sm d-flex justify-content-start" style="margin-left: 50px; margin-top: 30px; margin-bottom: 50px;">
            <div class="card mb-3" style="width: 271.37px; height: 298.71px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 15px;">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f0ff947afbcb9d963c45656fe733f49d3d5ed181af501b3922a4129742e0fea9?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" class="card-img-top" alt="..." style="width: 83px; height: 84px; display: block; margin: 30px auto;">
                <div class="card-body" style="text-align: justify;">
                    <a href="konsultasi" style="text-decoration: none; color: inherit;">
                        <h4 class="card-title text-center" style="font-weight: bold; color: #194544; font-size: 24px;">Health Consultation</h4>
                    </a>
                    <p class="card-text">Tersedia konsultasi kesehatan hewan ternak untuk memberikan saran terkait perawatan dan kesehatan hewan ternak.</p>
                </div>
            </div>
        </div>
         <div class="col-sm d-flex justify-content-start" style="margin-left: 50px; margin-top: 30px; margin-bottom: 50px;">
            <div class="card mb-3" style="width: 271.37px; height: 298.71px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 15px;">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/91f52c2dc7adfef2fb25e25e5d8971a7434a6ee8c91467324cbdaee8373d5f1a?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="Product Image" class="product-image" class="card-img-top" alt="..." style="width: 83px; height: 84px; display: block; margin: 20px auto;">
                <div class="card-body" style="text-align: justify;">
                    <a href="kamuspenyakit" style="text-decoration: none; color: inherit;">
                        <h4 class="card-title text-center" style="font-weight: bold; color: #194544; font-size: 24px;">Disease Dictionary</h4>
                    </a>
                    <p class="card-text">Memberikan wawasan tentang penyakit umum yang ditemukan pada hewan ternak beserta langkah-langkah penanganannya</p>
                </div>
            </div>
        </div>
         <div class="col-sm d-flex justify-content-start" style="margin-left: 50px; margin-top: 30px; margin-bottom: 50px;">
            <div class="card mb-3" style="width: 271.37px; height: 298.71px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 15px;">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e0910ceb57d3f6a12e09570c972c3ec9b49ad24749df312e777c03e91febdbe?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="Product Image" class="product-image" class="card-img-top" alt="..." style="width: 83px; height: 84px; display: block; margin: 20px auto;">
                <div class="card-body" style="text-align: justify;">
                    <a href="forum" style="text-decoration: none; color: inherit;">
                        <h4 class="card-title text-center" style="font-weight: bold; color: #194544; font-size: 24px;">Discussion Forum</h4>
                    </a>
                    <p class="card-text">Untuk berbagi informasi, pengalaman, dan pertanyaan terkait perawatan dan kesehatan hewan ternak antar anggota komunitas.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col text-start">
            <h5>Penawaran Menarik</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h5 class="text-left">Artikel</h5>
        </div>
    </div>
<<<<<<< Updated upstream
    <div class="row"> <!-- Remove justify-content-start class -->
        <div class="col-sm mb-3">
            <div class="card h-100"> <!-- Add h-100 class to make the card full height -->
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm mb-3">
            <div class="card h-100"> <!-- Add h-100 class to make the card full height -->
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
=======
    <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-center">
        @foreach($beritas->take(3) as $berita)
            <div class="col mb-4">
                <div class="card h-100">
                    <a href="{{ $berita->url_berita }}" target="_blank" class="card-link">
                        <img src="{{ $berita->gambar }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="text-center tanggal-text">{{ $berita->tanggal }}</p>
                        <h5 class="card-title text-center">{{ $berita->judul }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Button di ujung kanan bawah -->
    <div class="row mt-4 justify-content-end">
        <div class="col-auto">
            <a href="/berita" class="btn btn-primary" style="background-color: #FF731D; border-color: #FF731D;">Lihat Semua Berita</a>
        </div>
    </div>

<style>
    /* CSS untuk mengatur jarak antara berita */
    .row-cols-md-3 .col {
        flex: 0 0 auto; /* Mengatur agar tidak melebar */
        max-width: 100%; /* Menetapkan lebar maksimum */
    }

    .row-cols-md-3 .card {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-body {
        flex: 1; /* Mengatur agar body kartu mengisi seluruh ruang yang tersedia */
    }
</style>


<!-- Footer -->
<footer class="bg-custom text-white mt-5 small-footer">
    <div class="container">
        <div class="row py-2">
            <div class="col-md-6">
                <h5 class="mb-1">Kontak Emergency</h5>
                <p class="mb-1">
                    Farmedic<br>
                    Jl. Kesehatan Hewan No. 45<br>
                    Jakarta Selatan 12345<br>
                    Indonesia<br>
                    <i class="fa fa-phone"></i> (021) 1234 5678, (021) 8765 4321<br>
                    <i class="fa fa-envelope"></i> emergency@farmedic.id
                </p>
>>>>>>> Stashed changes
            </div>
        </div>
        <div class="col-sm mb-3">
            <div class="card h-100"> <!-- Add h-100 class to make the card full height -->
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>









<!-- About Us
<section id="aboutus" class="mt-5">
    <div class="container">
        <div class="row text-center">
            <h1 class="display-6 mb-3">About <span style="color: brown;">Us</span></h1>
            <p class="lh-lg fs-6">Everyday 12.00 - 00.00 Jalan Juanda 2. Samarinda, Kalimantan Timur · Minuman baru nih temen-temen! kalo lagi main ataupun mau mampir ke Punten coffee.</p>
        </div>
    </div>
</section> -->
<!-- End About Us -->

<!-- Foods & Snacks -->
<!-- <section id="foods" class="section-relative mt-5">
    <div class="bg-image">
        <img src="{{url('asset/front-end/img/homefood.png')}}" alt="" class="w-100 c-img" style="filter: brightness(50%); ">
    </div>
    <div class="container">
        <div class="content px-md-5">
            <div class="row">
                <div class="col-12 col-md-6 order-1 order-md-0 d-flex flex-column">
                    <div class="content-body">
                        <img src="{{url('asset/front-end/img/coffee2.jpg')}}" alt="" class="w-75 rounded">
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-0 order-md-1 d-flex align-self-center flex-column text-light">
                    <h1 class="display-4">Foods & Snacks</h1>
                    <div class="content-body">
                        <p>Dari camilan gurih yang pas untuk menemani secangkir kopi hangat hingga hidangan ringan yang istimewa untuk memuaskan selera Anda, kami menawarkan pengalaman kuliner yang lengkap di setiap gigitan.</p>
                        <a class="btn" style="padding: 10px; border:3px solid white; background-color: white;" href="" role="button">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Foods & Snacks -->

<!-- Beverages -->
<!-- <section id="beverages" class="section-relative">
    <div class="bg-image">
        <img src="{{url('asset/front-end/img/homedrink.png')}}" alt="" class="w-100 c-img" style="filter: brightness(50%); ">
    </div>
    <div class="container">
        <div class="content px-md-5">
            <div class="row">
                <div class="col-12 col-lg-6 order-1 order-md-1 order-lg-0 d-flex align-self-center flex-column text-light ">
                    <h1 class="display-4">Beverages</h1>
                    <div class="content-body">
                        <p>Nikmati setiap tegukan dengan ragam minuman pilihan kami, mulai dari kopi berkualitas tinggi hingga minuman spesial yang diracik dengan cermat untuk memenuhi selera Anda.</p>
                        <a class="btn" style="padding: 10px; border:3px solid white; background-color: white;" href="" role="button">Explore More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 offset-md-6 col-lg-6 offset-lg-0 order-0 order-md-0 order-lg-1 d-flex flex-column">
                    <div class="content-body">
                        <img src="{{url('asset/front-end/img/coffee2.jpg')}}" alt="" class="w-75 rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Beverages -->

<!-- Reservation -->
<!-- <section id="reserv" class="">
    <div class="container">
        <div class="content px-md-5">
            <div class="row">
                <div class="col-12 col-lg-6 content-body">
                    <img src="{{url('asset/front-end/img/homeresv.png')}}" alt="" class="w-100 rounded">
                </div>
                <div class="col-12 col-lg-6 align-self-center reserv-body">
                    <h1>Reservation</h1>
                    <p>Segera reservasi meja Anda dan mari berbagi kenikmatan kopi dan suasana istimewa di Punten Coffee. Terima kasih atas kepercayaan Anda, dan kami tunggu kehadiran Anda dengan penuh antusiasme!</p>
                    <a class="btn" style="padding: 10px; background-color: black; color: white;" href="" role="button">Reservation Now</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Reservation -->


@endsection