@extends('layouts.layout')

@section('content')
<!-- section -->
<div class="card mb-3" style="width: 100%; background-color: #1B4445; border: none; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; height: 400px; display: flex; align-items: center; justify-content: space-between;">
    <div class="card-body" style="display: flex; align-items: center; justify-content: start;">
        <div style="flex: 1; text-align: center; padding: 20px;">
            <h5 class="card-title" style="color: #FFFFFF; font-size: 30px; text-align: center;">Katalog Hewan ternak</h5>
            <p class="card-text" style="color: #FFFFFF; font-size: 25px; text-align: center; line-height: 1.2em; max-height: 2.4em; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; margin-top: 10px; text-overflow: ellipsis;">
                Mengenal tentang kondisi kesehatan umum yang<br>sering dijumpai pada hewan ternak Anda.
            </p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center">
                <button class="katalog-btn" data-katalog="Kambing" style="border: none; background-color: transparent; margin-bottom: 20px; height: 80%; width: 80%;">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a2f3ea052e79025d0fe215808a2e4efbaabdbeaa738bf882792c6ce9155b435a?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="Kambing" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </button>
            </div>
            <div class="col-6 text-center">
                <button class="katalog-btn" data-katalog="Sapi" style="border: none; background-color: transparent; margin-bottom: 20px; height: 80%; width: 80%;">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fb6c7b735957d62f66965d0348d634c6d0710cb816d920687626728709680308?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="Sapi" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 text-center">
                <button class="katalog-btn" data-katalog="Ayam" style="border: none; background-color: transparent; margin-bottom: 20px; height: 80%; width: 80%;">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d33eb0d186e71d099d49313cb863b9383f5fe292783dd801743e908a3bdf0274?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="Ayam" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </button>
            </div>
            <div class="col-6 text-center">
                <button class="katalog-btn" data-katalog="Domba" style="border: none; background-color: transparent; margin-bottom: 20px; height: 80%; width: 80%;">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a6e4de8cff6ea922de3bc46590e4b8109bd6b3df735932406fb302bb091bcd13?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="Domba" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
document.querySelectorAll('.katalog-btn').forEach(button => {
    button.addEventListener('click', function() {
        const katalogChoice = this.getAttribute('data-katalog');
        fetch('/api/katalog/choice', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                katalog_choice: katalogChoice
            })
        })
        .then(response => {
            if (response.ok) {
                alert('Pilihan katalog berhasil disimpan: ' + katalogChoice);
                window.location.href = "{{ route('welcome.index') }}"; 
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
</script>

@endsection
