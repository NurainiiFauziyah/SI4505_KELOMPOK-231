<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmedic - Kamus Penyakit</title>
    <link rel="stylesheet" href="{{ asset('css/kamus.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Inter|Passion One">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <h1 class="card-title">Kamus Penyakit</h1>
            <h5 class="card-text">Ketahui gejala, penyebab, dan pengobatan penyakit ternak di Kamus Penyakit.</h5>
        </div>
    </div>
</div>
<div class="container custom-container">
    <div class="row">
        <div class="col-md-12">
            <h2><span class="text-1">Daftar</span> <span class="text-2">Penyakit</span></h2>
        </div>
    </div>

    <div class="row">
        @foreach($kamuses as $index => $kamus)
            <div class="col-md-6 mb-4">
                <div class="card custom-card">
                    <img src="{{ $kamus->gambar }}" class="card-img-top" alt="Gambar {{ $kamus->nama }}">
                    <div class="card-body custom-card-body">
                        <div>
                            <h5 class="card-title text-center">{{ $kamus->nama }}</h5>
                            <p class="card-text">{{ $kamus->keterangan }}</p>
                        </div>
                        <a href="{{ url('/kamus-penyakit') }}" class="btn btn-primary selengkapnya">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @if(($index + 1) % 2 == 0)
            </div><div class="row">
            @endif
        @endforeach
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
