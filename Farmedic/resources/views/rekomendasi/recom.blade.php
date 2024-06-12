<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Farmedic - Kamus Penyakit</title>
        <link rel="stylesheet" type="text/css" href="./about.css">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Inter|Passion One">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        .main-box {
    position: relative;
    width: 100%;
    height: 400px;
    top: -30%;
}

.layer {
    position: relative;
    
}

.layer1 {
    background-color: #869E9E;
    height: 97%;
    border-radius: 0 0 15px 15px; 
}

.layer2 {
    background-color: #D4D8DB; 
    height: 100%;
    border-radius: 0 0 15px 15px; 
}

.content-box {
    position: relative;
    z-index: 3;
    background: #1B4445;
    border-radius: 0 0 70px 70px; 
    padding : 20px;
    height: 94%;
    text-align: center; 
    color: white;
    padding: 100px 20px 20px;
    font-family: 'Poppins', sans-serif; 
} 

.content-box .card-title {
    font-weight: 700;
    margin-bottom: 15px; 
}

.custom-container {
    margin-top: 50px; 
}

.text-1 {
    color: black;
    font-size: 40px;
    margin-bottom: 40px !important; 
    font-weight: 600;

}

.text-2 {
    color: #F18200;
    font-size: 40px;
    margin-bottom: 40px !important;
    font-weight: 600;
}


.card-body {
    padding: 20px; 
}

.card-body .card-title {
    text-align: center;
    font-weight: bold;
    font-size: 1.5em;
    margin-bottom: 10px; 
}

.card-body .card-text {
    text-align: justify; 
    font-size: 1em; 
    line-height: 1.6; 
    margin-bottom: 10px;
}

.card img {
    width: 400px;
    height: 300px;
    display: block;
    margin-top: 5px;
    margin-left: auto;
    margin-right: auto;
}
    </style>
    @extends('layouts.layout')
    <body>
    @section('content')
    <div class="d-flex justify-content-center align-items-center vh-50">
        <div class="position-relative main-box">
            <div class="layer layer2"></div>
            <div class="layer layer1"></div>
            <div class="content-box">
                <h1 class="card-title">Rekomendasi Obat</h1>
                <h1 class="card-title">Obat yang tepat untuk ternakmu!</h1>
                <h5 class="card-text">Dapatkan rekomendasi obat terbaik untuk kondisi ternak Anda.</h5>
            </div>
        </div>
    </div>


    <div class="container custom-container">
    <div class="row">
        <div class="col-md-12">
            <h2><span class="text-1">Rekomendasi</span> <span class="text-2">Obat</span></h2>
        </div>
    </div>

    <div class="row">
        @foreach($rekomendasi_obats as $index => $rekomendasi_obat)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $rekomendasi_obat->gambar }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $rekomendasi_obat->nama }}</h5>
                        <p class="card-text">{{ $rekomendasi_obat->keterangan }}</p>
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