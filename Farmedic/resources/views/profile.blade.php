@extends('layouts.layout')

@section('title', 'User Profile')

@section('content')
<div class="container mt-5" id="profileContent">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Profile') }}</div>
                <div class="card-body text-center">
                    <div class="profile-header">
                        <div class="profile-picture mx-auto">
                            <img id="profileImage" src="{{ asset('path_to_default_image') }}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px;">
                        </div>
                        <input type="file" id="profileImageInput" style="display: none;">
                        <button id="changeProfileImageButton" class="btn btn-sm btn-secondary mt-2">Unggah Foto</button>
                        <h2 class="mt-3">{{ Auth::check() ? Auth::user()->full_name : 'Guest' }}</h2>
                    </div>

                    <div class="profile-details mt-4">
                        <div class="form-group">
                            <label class="float-start">Email</label>
                            <input type="email" class="form-control" value="{{ Auth::check() ? Auth::user()->email : 'N/A' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label class="float-start">Nama Lengkap</label>
                            <input type="text" class="form-control" value="{{ Auth::check() ? Auth::user()->full_name : 'N/A' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label class="float-start">Nomor Telepon</label>
                            <input type="text" class="form-control" value="{{ Auth::check() ? Auth::user()->phone_number : 'N/A' }}" disabled>
                        </div>
                    </div>

                    <div class="profile-actions text-center mt-3">
                        <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='{{ route('profile.edit') }}'">Update Profile</button>
                        <a href="/login" class="btn btn-primary btn-lg">Login</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("changeProfileImageButton").addEventListener("click", function() {
        document.getElementById("profileImageInput").click();
    });

    document.getElementById("profileImageInput").addEventListener("change", function(e) {
        var profileImage = document.getElementById("profileImage");
        var file = e.target.files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            profileImage.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            profileImage.src = "{{ asset('path_to_default_image') }}";
        }
    });
</script>
@endsection
