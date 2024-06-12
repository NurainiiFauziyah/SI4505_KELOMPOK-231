<!DOCTYPE html>
<head lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Farmedic - Detail</title>
        <link rel="stylesheet" type="text/css" href="./about.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Inter|Passion One">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
body {
    font-family: 'Poppins', sans-serif;
}

.main-box {
    position: relative;
    width: 100%;
    height: 200px;
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

h1.card-title {
    font-weight: 700;
}

.img-fluid {
    max-width: 100%; /* Membuat gambar responsif agar tidak melebihi lebar kontainer */
    height: auto; /* Menjaga rasio aspek gambar */
    display: block; /* Membuat gambar berada di tengah */
    margin: 0 auto 20px; /* Memberi margin bawah untuk memberikan jarak dengan elemen berikutnya */
    position : center; 
}

.btn-container {
            text-align: center;
            margin-top: 30px;
        }

.btn-panduan,
.btn-obat {
            margin-right: 10px;
        }
.card-body{
    text-align: justify;
}
    </style>
<body>
@extends('layouts.layout')

@section('content')   
<div class="d-flex justify-content-center align-items-center vh-50">
    <div class="position-relative main-box">
        <div class="layer layer2"></div>
        <div class="layer layer1"></div>
        <div class="content-box">
            <h1 class="card-title">Cacingan</h1>
        </div>
    </div>
</div>  

<div class="container mt-5">
    <img src="{{ asset('gambar/kamus1.png') }}" class="img-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">Cacingan</h2>
                    <p class="card-text">
                        Perawatan sapi yang terkena cacingan sangat penting untuk memastikan kesehatan dan produktivitasnya. Berikut adalah panduan umum untuk merawat sapi yang terkena cacingan:
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Uji Laboratorium: Untuk kasus ringan maupun parah, dapat dilakukan pemeriksaan laboratorium untuk menemukan telur cacing pada feses.</li>
                        <li class="list-group-item">Memberikan obat cacing</li>
                        <li class="list-group-item">Melakukan sanitasi lingkungan area kandang</li>
                        <li class="list-group-item">Memberikan pakan yang kaya nutrisi dan mudah dicerna untuk memperbaiki penyerapan nutrisi pada sapi</li>
                        <li class="list-group-item">Mengawasi pola makan sapi dan memastikan mereka mendapatkan makanan yang cukup.</li>
                    </ul>
                    <p class="card-text">
                        Penting untuk diingat bahwa perawatan terhadap sapi yang terkena cacingan haruslah holistik dan melibatkan kombinasi pengobatan medis, manajemen lingkungan, dan manajemen pakan yang baik.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">Gejala Penyakit</h2>
                    <p class="card-text">
                    Cacingan pada sapi dapat menimbulkan berbagai gejala, termasuk penurunan berat badan yang signifikan, kehilangan nafsu makan, anemia yang terlihat dari gusi atau warna kulit yang pucat, diare, muntah, lambung kembung, serta penurunan produktivitas baik dalam produksi susu maupun pertambahan berat badan. Gejala-gejala ini disebabkan oleh gangguan yang disebabkan oleh cacing parasit dalam sistem pencernaan sapi. Penting untuk berkonsultasi dengan seorang dokter hewan jika Anda mencurigai sapi Anda menderita cacingan, karena perawatan yang tepat dan pengelolaan yang baik dapat membantu mengurangi dampak penyakit tersebut pada sapi dan kelompok ternak secara keseluruhan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="btn-container">
        <a href="{{ url('/panduanperawatan') }}" class="btn btn-primary btn-panduan">Panduan Perawatan</a>
        <a href="{{ url('/rekomendasi_obat') }}" class="btn btn-secondary btn-obat">Rekomendasi Obat</a>
    </div>
@endsection
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
