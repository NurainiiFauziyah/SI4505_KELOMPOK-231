@extends('layouts.layout')

@section('title', 'Edit Profile')

@section('content')
<div class="container mt-5" id="editProfileContent">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="profile-header text-center">
                            <div class="profile-picture mx-auto">
                                <img id="editProfileImage" src="{{ asset(Auth::user()->profile_image ?? 'path_to_default_image') }}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px;">
                            </div>
                            <input type="file" name="profile_image" id="editProfileImageInput" class="form-control mt-2" accept="image/*">
                        </div>

                        <div class="profile-details mt-4">
                            <div class="form-group">
                                <label for="email" class="float-start">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="full_name" class="float-start">Nama Lengkap</label>
                                <input type="text" id="full_name" name="full_name" class="form-control" value="{{ Auth::user()->full_name }}" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="phone_number" class="float-start">Nomor Telepon</label>
                                <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{ Auth::user()->phone_number }}" required>
                            </div>
                        </div>

                        <div class="profile-actions text-center mt-3">
                            <button type="submit" class="btn btn-success btn-lg">Save Changes</button>
                            <a href="{{ route('profile.show') }}" class="btn btn-secondary btn-lg">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
