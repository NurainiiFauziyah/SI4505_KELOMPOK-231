@extends('layouts.layout')

@section('content')

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




<div class="discussion-container">
    <div class="discussion-list">
        @foreach($discussions as $discussion)
        <div class="discussion-item">
            <div class="discussion-avatar">
                @if(auth()->check() && auth()->user()->avatar)
                    <img src="{{ auth()->user()->avatar }}" alt="User Avatar">
                @else
                    <img src="gambar\download (2).jpg"  alt="Default Avatar">
                @endif
            </div>
            <div class="discussion-details">
                <a href="{{ route('discussion.detail', ['id' => $discussion->id]) }}">
                    <h3>{{ $discussion->title }}</h3>
                </a>
                <p>{{ $discussion->content }}</p>
                <div class="discussion-footer">
                    <img src="gambar\download (2).jpg" alt="User Avatar">
                    <span>{{ $discussion->comments_count }} comments</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="discussion-sidebar">
        @if(auth()->check())
            <a href="{{ route('discussion.create') }}" class="btnstart">Start New Discussion</a>
        @else
        <a href="/login" class="btnstart">Login to Start New Discussion</a>
        @endif
        <ul class="discussion-menu">
            <li><a href=""><img src="gambar\diskusi.PNG" alt="Icon"> All Discussions</a></li>
            <li><a href="#"><img src="gambar\follow.PNG" alt="Icon"> Following</a></li>
        </ul>
        <div class="discussion-users">
            @foreach($users as $user)
            <div class="user-item">
                <img src="gambar\download (2).jpg" alt="User Avatar">
                <div class="user-details">
                    <h4>{{ $user->name }}</h4>
                    <p>{{ $user->bio }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
