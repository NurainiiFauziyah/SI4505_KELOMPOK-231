<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Monitoring</title>
    <link rel="stylesheet" href="{{ asset('css/monitoring.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-color: #1B4445 !important;
        }
        .container-custom {
            padding-left: 20px;
            padding-right: 20px;
        }
        .filter-form {
            margin-left: auto;
            margin-bottom: 10px;
        }
        .history-consultation {
            padding-left: 20px;
            margin-left: 10px;
        }
        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-left: 20px;
            padding-right: 20px;
        }
        .card-detail {
            display: none;
        }
        .detail-content {
            display: flex;
            align-items: flex-start;
        }
        .detail-content img {
            max-width: 400px;
            margin-right: 20px;
        }
    </style>
</head>
@extends('layouts.layout')
<body>
@section('content')
@php
    $selectedMonth = request('month', 'all'); // default ke 'all' jika tidak ada yang dipilih
    $selectedYear = request('year', 'all');
@endphp
<div class="section">
    <div class="container">
        <h2 class="text-center my-5 title-underline fixed-title">MONITORING</h2>
        <div class="row">
            <div class="card-large w-100">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="mb-0" style="font-family: 'Poppins', sans-serif; font-size: 26px; font-weight : 600;">History Konsultasi</h1>
                    
                    <!-- Filter Form -->
                    <div>
                        <form action="{{ route('monitoring.filter') }}" method="POST" class="form-inline">
                            @csrf
                            <div class="form-group mr-2">
                                <label for="month" class="mr-2">Month:</label>
                                <select id="month" name="month" class="form-control">
                                    <option value="all" @if($selectedMonth == 'all') selected @endif>All</option>
                                    @for($m=1; $m<=12; ++$m)
                                        <option value="{{ $m }}" @if($m == $selectedMonth) selected @endif>{{ date('F', mktime(0, 0, 0, $m, 1)) }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group mr-2">
                                <label for="year" class="mr-2">Year:</label>
                                <select id="year" name="year" class="form-control">
                                    <option value="all" @if($selectedYear == 'all') selected @endif>All</option>
                                    @for($y = date('Y'); $y >= 2000; --$y)
                                        <option value="{{ $y }}" @if($y == $selectedYear) selected @endif>{{ $y }}</option>
                                    @endfor
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </form>
                    </div>
                </div>
                @forelse($monitorings ?? [] as $monitoring)
                    <div class="card w-55 mx-auto mb-3 card-first" style="max-width: 1200px;">
                        <div class="card-body d-flex align-items-center">
                            <div>
                                <img src="{{ asset($monitoring->photo) }}" alt="Gambar Monitoring" style="max-width: 150px; margin-right: 20px;">
                            </div>
                            <div>
                                <div>
                                    <p class="card-text no-margin">{{ \Carbon\Carbon::parse($monitoring->date)->format('d F Y') }}</p>
                                    <h5 class="card-title">{{ $monitoring->title }}</h5>
                                    <p class="card-text">{{ $monitoring->description }}</p>
                                </div>
                            </div>
                            <div class="btn-container" style="margin-left: auto;">
                                <a href="#" class="btn btn-primary detail-button" data-target="#monitoringDetail{{ $monitoring->id }}">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="card w-55 mx-auto mb-3 card-detail" id="monitoringDetail{{ $monitoring->id }}" style="max-width: 1200px; display: none;">
                        <div class="card-body detail-content">
                            <!-- Konten card detail -->
                            <img src="{{ asset($monitoring->detail_photo) }}" alt="Gambar Detail Monitoring" style="margin-right: 20px;">
                            <div class="detail-text">
                                <p>{!! nl2br(e($monitoring->detail)) !!}</p>
                            </div>
                            <div class="button-container">
                                <a href="/konsultasi/{{ $monitoring->id }}" class="btn btn-danger">Konsultasikan</a>
                            </div>
                        </div>
                    </div>

                @empty
                    <p class="text-white">No monitoring found for the selected month and year.</p>
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

        // Event listener untuk tombol yang menampilkan detail
        document.querySelectorAll('.detail-button').forEach(function(btn) {
            btn.addEventListener('click', function(event) {
                event.preventDefault();
                var target = btn.getAttribute('data-target');
                var detailCard = document.querySelector(target);
                if (detailCard) {
                    // Toggle display for the clicked detail card
                    if (detailCard.style.display === 'none' || detailCard.style.display === '') {
                        detailCard.style.display = 'block';
                    } else {
                        detailCard.style.display = 'none';
                    }
                }
            });
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
