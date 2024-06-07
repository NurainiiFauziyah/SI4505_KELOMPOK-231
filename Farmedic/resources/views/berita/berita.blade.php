<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Portal Berita</title>
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
@extends('layouts.layout')
<body>
@section('content')
     <div class="d-flex justify-content-center align-items-center vh-50">
        <div class="position-relative main-box">
            <div class="layer layer2"></div>
            <div class="layer layer1"></div>
            <div class="content-box">
                <h1 class="card-title">Daftar artikel berita tentang hewan ternak. </h1>
                <h1 class="card-title">Edukasi terlengkap</h1>
                <h5 class="card-text">Silakan cek artikel dan edukasi yang ada dibawah berikut</h5>
            </div>
        </div>
    </div>
    <div class="container custom-container">
    <div class="row">
        <div class="col-md-12">
        <h2><span class="text-1">Daftar</span> <span class="text-2">Artikel</span></h2>
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
            @if(($index + 1) % 3 == 0)
                </div><div class="row">
            @endif
        @endforeach
    </div>
</div>
@endsection
</body>
</html>
