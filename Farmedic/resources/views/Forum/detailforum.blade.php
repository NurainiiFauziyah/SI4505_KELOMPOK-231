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

<div class="containerr">
    <div class="discussion-header">
        <div class="user-info">
            @if(auth()->check())
            <img src="{{ auth()->user()->avatar }}" alt="User Avatar">
        @else
        <img src="{{ asset('gambar\download (2).jpg') }}" alt="User Avatar" class="avatar">
        @endif
            
            <div class="user-details">
                <h4>{{ $discussion->title }}</h4>
                <p>{{ $discussion->content }}</p>
                <div class="comment-count">
                    <span>{{ $discussion->comments_count }} comments</span>
                </div>
            </div>
        </div>
    </div>

    
    <div class="discussion-response">
        <h5>Balasan Anda</h5>
        <form action="{{ route('comment.store', ['discussionId' => $discussion->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <textarea name="content" rows="4" placeholder="Tulis balasan Anda di sini..."></textarea>
            
            <div class="upload-photo">
                <label for="upload" class="upload-label">Upload Foto</label>
                <input type="file" name="photo" id="upload" class="upload-input">
            </div>
    
            <button type="submit" class="submit-button">Simpan Balasan</button>
        </form>
    </div>
    <div class="comment-list">
        @foreach($discussion->comments as $comment)
            <div class="comment">
                <div class="comment-avatar">
                    @if(auth()->check())
                    <img src="{{ auth()->user()->avatar }}" alt="User Avatar">
                @else
                <img src="{{ asset('gambar\download (2).jpg') }}" alt="User Avatar" class="avatar">
                @endif
                </div>
                <div class="comment-details">
                    <p>{{ $comment->content }}</p>
                    @if($comment->photo)
                    <img src="{{ asset('storage/app/photos'.$comment->photo) }}" alt="Uploaded Photo">
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    
</div>

<style>
    .containerr {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .discussion-header {
        display: flex;
        flex-direction: column;
        border-bottom: 1px solid #eee;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }

    .user-info {
        display: flex;
        flex-direction: column;
        align-items: center;
       
    }

    .avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    .user-details {
        flex: 1;
    }

    .user-details h4 {
        margin: 0;
        font-size: 18px;
        color: #333;
    }

    .user-details p {
        font-size: 14px;
        color: #666;
    }

    .comment-count {
        margin-top: 10px;
        font-size: 14px;
        color: #666;
    }

    .discussion-response {
        text-align: center;
    }

    .discussion-response h5 {
        font-size: 16px;
        margin-bottom: 10px;
        color: #333;
    }

    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 20px;
        font-size: 14px;
        color: #333;
        resize: vertical;
    }

    .upload-photo {
        text-align: center;
        margin-bottom: 20px;
        padding: 3%;
        border-radius: 30px;
        border: 1px solid #b1b0af;
    }

    .upload-label {
        display: inline-block;
        background-color: #FF7A00;
        color: #fff;
        padding: 10px 20px;
        border-radius: 50px;
        cursor: pointer;
        font-size: 14px;
    }

    .upload-input {
        display: none;
    }

    .submit-button {
        background-color: #00695C;
        color: #fff;
        width: 50%;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        display: block;
        margin: 0 auto;
    }

    @media (min-width: 769px) {
        .discussion-header {
            flex-direction: row;
            text-align: left;
        }

        .user-info {
            flex-direction: row;
        }

        .avatar {
            margin-right: 20px;
            margin-bottom: 0;
        }

        .submit-button {
            width: 30%;
        }
    }

    @media (max-width: 768px) {
        .card-body h5 {
            font-size: 24px;
        }

        .card-body p {
            font-size: 14px;
        }

        .user-info {
            flex-direction: column;
        }

        .avatar {
            margin-bottom: 10px;
        }

        .submit-button {
            width: 50%;
        }
    }

    @media (max-width: 480px) {
        .card-body h5 {
            font-size: 20px;
        }

        .card-body p {
            font-size: 12px;
        }

        .submit-button {
            width: 70%;
        }
    }
</style>
@endsection
