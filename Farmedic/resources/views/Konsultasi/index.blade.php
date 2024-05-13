@extends('layouts.app')
@extends('layouts.layout')

@section('content')
<!-- section -->
<div class="card mb-3" style="width: 100%; background-color: #1B4445; border: none; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; height: 400px; display: flex; align-items: center; justify-content: space-between;">
    <div class="card-body" style="display: flex; align-items: center; justify-content: start;">
        <div style="flex: 1; text-align: left; margin-right: 20px;">
            <h5 class="card-title" style="color: #FFFFFF; font-size: 30px;">Ayo Konsultasikan Hewan Dengan Dokter Professional</h5>
            <p class="card-text" style="color: #FFFFFF; font-size: 25px;">Cari Dokter yang cocok untuk hewan ternakmu dan konsultasi melalui Whatsapp</p>
        </div>
        <div style="flex: 0 0 300px;">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f4e6987d9c0c6f3b3cf3bddf0ee221cd9862e2f52fb9d420fe2e2b0d5148a71a?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="Product Image" alt="gambar" style="width: 350px; height: 400px;">
        </div>
    </div>
</div>

<div class="section">

    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>List of Doctors</h2>
                </div>
            </div>
            <!-- List of Doctors -->
            <!-- Di bagian atas HTML file -->
            <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Konsultasi</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="row">
    @foreach ($dokter as $doc)
    <div class="col-md-4" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="doctor-entry text-center">
            <div class="doctor-img" style="border: 3px solid #43A9AB; border-radius: 50px; width: 308px; height: 280px; overflow: hidden;">
                <img src="{{ asset('storage/dokter/'.$doc->gambar) }}" width="307px" height="279px" alt="Dokter Image" style="border-radius: 50px;">
            </div>
        </div>
        <div class="doctor-info" style="margin-top: 20px;"> <!-- Tambahkan margin-top di sini -->
            <h3>{{ $doc->dokter }}</h3>
            <p style="color: #296769; font-weight: bold; margin-bottom: 10px;">Rp{{ number_format($doc->harga_konsultasi, 0, ',', '.') }}/konsul</p> <!-- Tambahkan margin-bottom di sini -->
            <p>
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9a9b4abcb12eef4fe1a823ca296cb96376688cf790115a82a496bcd01b822084?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="Descriptive alt text for the image" class="icon-image" alt="Logo" style="width: 30px; height: 30px; margin-right: 10px;">
                {{ date('H:i', strtotime($doc->jam_mulai)) }} - {{ date('H:i', strtotime($doc->jam_selesai)) }}
            </p>
            <div style="text-align: left;">
                <button onclick="openPopup('{{ asset('storage/dokter/'.$doc->gambar) }}', 'Konsultasi Melalui Whatsapp', '{{ $doc->dokter }}')" style="background-color: #F18200; color: white; border: none; padding: 10px 20px; border-radius: 10px; width: 261px; height: 47px; font-weight: bold;">Chat Dokter</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closePopup()">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="modal-body" style="text-align: center;">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/eb2e77bffbfcbcf9293a94d78c320f7587e826fc5a30af711a6c95c8ccea5050?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="Descriptive alt text of the image" class="responsive-image" alt="Logo" style="width: 250px; height: 250px; display: block; margin: 0 auto;">
            <!-- Tempatkan gambar dan teks di sini -->
            <h2 id="popup-text" style="text-align: center; display: block; margin: 0 auto;"></h2>
            <p id="popup-title" style="text-align: center; display: block; margin: 0 auto; color: #43A9AB; font-size: 24px;"></p>
        </div>
        <div class="modal-footer" style="text-align: center; display: flex; justify-content: center;">
            <button type="button" class="btn" style="background-color: #FFA500; color: white; width: 358px; height: 60px; padding: 10px 20px;">Chat WA</button>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
function openPopup(imageUrl, text, title) {
    $('#exampleModal').modal('show');
    $('#popup-text').text(text);
    $('#popup-title').text(title);
}

function closePopup() {
    $('#exampleModal').modal('hide');
}
</script>

</body>
</html>


</body>
</html>


            <!-- /List of Doctors -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection

