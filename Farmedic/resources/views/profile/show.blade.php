@extends('layouts.layout')

@section('title', 'User Profile')

@section('content')
<div class="container mt-5" id="profileContent">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Profile') }}</div>
                <div class="card-body text-center">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="profile-header">
                        <div class="profile-picture mx-auto">
                            <img id="profileImage" src="{{ asset(Auth::user()->profile_image ?? 'path_to_default_image') }}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px;">
                        </div>
                        <h2 class="mt-3">{{ Auth::user()->full_name }}</h2>
                    </div>

                    <div class="profile-details mt-4">
                        <div class="form-group">
                            <label class="float-start">Email</label>
                            <input type="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
                        </div>
                        <div class="form-group mt-3">
                            <label class="float-start">Nama Lengkap</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->full_name }}" disabled>
                        </div>
                        <div class="form-group mt-3">
                            <label class="float-start">Nomor Telepon</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->phone_number }}" disabled>
                        </div>
                    </div>

                    <div class="profile-actions text-center mt-3">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-lg">Update Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
