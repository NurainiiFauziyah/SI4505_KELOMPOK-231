<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmedic - Detail</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .card-img-top {
            height: 150px;
            width: 100px;
            object-fit: cover; 
        }

        .card {
            height: 520px; 
            width: 300px;
        }

        .card-body .tanggal-text {
            font-size: 12px;
            color: #909090;
            font-weight: 700;
        }

        .card-body .judul-title {
            font-size: 16px;
            color: rgb(0, 0, 0); 
        }
    </style>
</head>
<body>
@extends('layouts.layout')

@section('content')

<!-- Carousel -->
<div class="card mb-3" style="width: 100%; background-color: #1B4445; border: none; border-radius: 0 0 10px 10px; height: 400px; display: flex; align-items: center; justify-content: space-between;">
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

<!-- Card Section -->
<div class="container">
    <div class="row">
        <div class="col-sm d-flex justify-content-start mb-5" style="margin-left: 50px;">
            <div class="card" style="width: 271.37px; height: 298.71px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 15px;">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f0ff947afbcb9d963c45656fe733f49d3d5ed181af501b3922a4129742e0fea9?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" class="card-img-top" alt="..." style="width: 83px; height: 84px; display: block; margin: 30px auto;">
                <div class="card-body" style="text-align: justify;">
                    <a href="#" style="text-decoration: none; color: inherit;">
                        <h4 class="card-title text-center" style="font-weight: bold; color: #194544; font-size: 24px;">Health Consultation</h4>
                    </a>
                    <p class="card-text">Tersedia konsultasi kesehatan hewan ternak untuk memberikan saran terkait perawatan dan kesehatan hewan ternak.</p>
                </div>
            </div>
        </div>
        <div class="col-sm d-flex justify-content-start mb-5" style="margin-left: 50px;">
            <div class="card" style="width: 271.37px; height: 298.71px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 15px;">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/91f52c2dc7adfef2fb25e25e5d8971a7434a6ee8c91467324cbdaee8373d5f1a?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="Product Image" class="card-img-top" style="width: 83px; height: 84px; display: block; margin: 20px auto;">
                <div class="card-body" style="text-align: justify;">
                    <a href="#" style="text-decoration: none; color: inherit;">
                        <h4 class="card-title text-center" style="font-weight: bold; color: #194544; font-size: 24px;">Livestock Catalog</h4>
                    </a>
                    <p class="card-text">Memberikan wawasan tentang penyakit umum yang ditemukan pada hewan ternak beserta langkah-langkah penanganannya.</p>
                </div>
            </div>
        </div>
        <div class="col-sm d-flex justify-content-start mb-5" style="margin-left: 50px;">
            <div class="card" style="width: 271.37px; height: 298.71px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 15px;">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e0910ceb57d3f6a12e09570c972c3ec9b49ad24749df312e777c03e91febdbe?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="Product Image" class="card-img-top" style="width: 83px; height: 84px; display: block; margin: 20px auto;">
                <div class="card-body" style="text-align: justify;">
                    <a href="#" style="text-decoration: none; color: inherit;">
                        <h4 class="card-title text-center" style="font-weight: bold; color: #194544; font-size: 24px;">Discussion Forum</h4>
                    </a>
                    <p class="card-text">Untuk berbagi informasi, pengalaman, dan pertanyaan terkait perawatan dan kesehatan hewan ternak antar anggota komunitas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Artikel Section -->
<div class="container-fluid">
    <div class="row">
        <div class="col text-start">
            <h5>Artikel</h5>
        </div>
    </div>
    <div class="row">
        @foreach($beritas as $index => $berita)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="{{ $berita->url_berita }}" target="_blank" class="card-link">
                        <img src="{{ $berita->gambar }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="tanggal-text">{{ $berita->tanggal }}</p>
                        <h5 class="judul-title">{{ $berita->judul }}</h5>
                    </div>
                </div>
            </div>
            @if(($index + 1) % 3 == 0 && !$loop->last)
                </div><div class="row">
            @endif
        @endforeach
    </div>
</div>
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
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-white me-2"><i class="fa fa-facebook"></i></a>
                <a href="#" class="text-white me-2"><i class="fa fa-twitter"></i></a>
                <a href="#" class="text-white me-2"><i class="fa fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>

<style>
    .bg-custom {
        background-color: #1B4445;
    }
    .small-footer {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .small-footer .col-md-6 h5,
    .small-footer .col-md-6 p {
        margin-bottom: 0.5rem;
    }
</style>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>