@extends('layouts.layout')

@section('content')
<style>
    .active-forum {
        background-color: #F18200;
        border-radius: 999px; /* Untuk membuatnya bulat */
        padding: 10px;
        color: white;
        font-size: 15px;
        font-family: Inter;
        font-weight: 700;
        word-wrap: break-word;
    }
</style>

<!-- Carousel -->
<div style="width: 100%; height: 400px; position: relative;">
    <!-- Layer 1: Lapisan Teratas -->
    <div style="width: 100%; height: 380px; position: absolute; bottom: 0; background-color: #D4D8DB; border-bottom-left-radius: 72px; border-bottom-right-radius: 72px;"></div>
    <!-- Layer 2: Lapisan Tengah -->
    <div style="width: 100%; height: 390px; position: absolute; bottom: 10px; background-color: #869E9E; border-bottom-left-radius: 72px; border-bottom-right-radius: 72px;"></div>
    <!-- Layer 3: Lapisan Bawah -->
    <div style="width: 100%; height: 400px; position: absolute; bottom: 20px; background-color: #1B4445; border-bottom-left-radius: 72px; border-bottom-right-radius: 72px;">
        <!-- Teks -->
        <div class="card-body text-center">
            <div style="flex: 1; text-align: center; margin-right: 20px; position: absolute; bottom: 125px; left: 50%; transform: translateX(-50%);">
                <h5 class="card-title" style="color: #FFFFFF; font-size: 40px; font-family: 'Poppins', sans-serif; font-weight: bold;">Diskusikan Pengalaman dan Tips Perawatan Bersama Komunitas Ahli</h5>
                <p class="card-text" style="color: #FFFFFF; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 600;">Bergabunglah dengan komunitas kami untuk berbagi pengalaman, mencari saran, dan mendapatkan tips perawatan hewan dari para ahli.</p>
            </div>
        </div>
    </div>
</div>
@endsection
