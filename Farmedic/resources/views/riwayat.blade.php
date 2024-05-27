@extends('layouts.layout')

@section('content')

<!-- Carousel -->
<div class="carousel">
    <div class="layer layer-1"></div>
    <div class="layer layer-2"></div>
    <div class="layer layer-3">
        <div class="carousel-text">
           <div class="judul"> <h2>Riwayat User</h2> </div>
        </div>
    </div>
</div>

<div class="history-container">
    @foreach ($discussions as $discussion)
        <div class="history-date">{{ $discussion->created_at->format('d M Y') }}</div>
        <div class="activity">
            <div class="time">{{ $discussion->created_at->format('H:i') }}</div>
            <div class="description">Membuat Diskusi: {{ $discussion->title }}</div>
        </div>
    @endforeach
</div>

                
   
</div>

@endsection
