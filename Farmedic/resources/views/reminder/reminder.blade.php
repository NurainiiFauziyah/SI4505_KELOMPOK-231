<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Reminder</title>
    <link rel="stylesheet" href="{{ asset('css/reminder.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-color: #1B4445 !important;
        }
        .btn {
            margin-left: -20px !important; /* Geser tombol ke kiri sebanyak 20px */
        }
    </style>
</head>
<body>
@extends('layouts.layout')
@section('content')
<div class="section">
    <div class="container">
        <h2 class="text-center my-5 title-underline fixed-title">REMINDER</h2>
        <div class="row">
            <div class="card-large mx-auto">
                @forelse($reminders ?? [] as $reminder)
                    <div class="card w-55 mx-auto mb-3 card-first" style="max-width: 1200px;">
                        <div class="card-body d-flex align-items-center">
                            <div>
                                <img src="gambar/lonceng.png" alt="Gambar lonceng" style="max-width: 120px; max-height: 120px; border-radius: 50%; float: left; margin-right: 20px;">
                            </div>
                            <div>
                                <div>
                                    <p class="card-text no-margin">{{ \Carbon\Carbon::parse($reminder->date)->format('d F Y') }}</p>
                                    <h5 class="card-title">{{ $reminder->title}}</h5>
                                    <p class="card-text">{{ $reminder->description}}</p>
                                </div>
                            </div>
                            <div class="btn-container" style="margin-left: auto;">
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#reminderModal{{ $reminder->id }}">Detail</a>
                                <i class="fas fa-times close-icon ml-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="reminderModal{{ $reminder->id }}" tabindex="-1" role="dialog" aria-labelledby="reminderModalLabel{{ $reminder->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="reminderModalLabel{{ $reminder->id }}" style="font-size: 24px; text-align :center; font-weight : 700;">Reminder!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p style="font-family: 'Poppins', sans-serif; font-size: 26px; text-align :center; line-height: 1,3;">{{ $reminder->modal_message }}</p>
                                    <div class="text-center">
                                        <img src="gambar/dokter.png" alt="Gambar Dokter" style="max-width: 50px; max-height: 50px; border-radius: 50%; display: inline-block;">
                                        <p style="font-size: 16px; color:#43A9AB; display: inline-block; margin-right: 10px; font-weight : 500;">{{ $reminder->doctor_name }}</p>
                                        <img src="gambar/time.png" alt="Gambar jam" style="max-width: 25px; max-height: 25px; border-radius: 50%; display: inline-block;">
                                        <span style="font-size: 14px; display: inline-block;">{{ \Carbon\Carbon::parse($reminder->next_appointment)->format('d F Y') }}</span>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <a href="/konsultasi" class="btn btn-danger">Konsultasi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-white">No reminders found for the selected month and year.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Event listener untuk ikon close pada kartu
        document.querySelectorAll('.close-icon').forEach(function(icon) {
            icon.addEventListener('click', function(event) {
                event.preventDefault();
                icon.closest('.card').remove();
            });
        });

        // Event listener untuk tombol yang menampilkan modal
        document.querySelectorAll('[data-toggle="modal"]').forEach(function(btn) {
            btn.addEventListener('click', function(event) {
                event.preventDefault();
                var target = btn.getAttribute('data-target');
                $(target).modal('show');
            });
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
