<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tracking</title>
    <link rel="stylesheet" href="{{ asset('css/tracking.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
@extends('layouts.layout')
@section('content')
@php
    $selectedMonth = request('month', 'all'); // default ke 'all' jika tidak ada yang dipilih
    $selectedYear = request('year', 'all');
@endphp
<div class="section">
    <div class="container">
        <h2 class="text-center my-5 title-underline fixed-title">TRACKING</h2>
        <div class="row">
            <div class="card-large w-100">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="mb-0" style="font-family: 'Poppins', sans-serif; font-size: 26px; font-weight : 600;">Keluhan</h1>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hewanModal">
                        Buka Form Hewan
                    </button>
                </div>

                <!-- The Modal -->
                <div class="modal fade" id="hewanModal" tabindex="-1" aria-labelledby="hewanModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h5 class="modal-title" id="hewanModalLabel">Form Hewan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-modal-id="hewanModal">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!-- Modal Body -->
                            <div class="modal-body">
                                <form id="hewanForm" method="POST" action="{{ route('trackings.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="namaHewan">Nama Hewan</label>
                                        <input type="text" class="form-control" id="namaHewan" name="nama_hewan" placeholder="Masukkan nama hewan">
                                    </div>
                                    <div class="form-group">
                                        <label for="keluhan">Keluhan</label>
                                        <textarea class="form-control" id="keluhan" name="keluhan" rows="3" placeholder="Masukkan keluhan"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggalKonsul">Tanggal Konsultasi</label>
                                        <input type="date" class="form-control" id="tanggalKonsul" name="tanggal_konsul">
                                    </div>
                                    <div class="form-group">
                                        <label for="uploadFoto">Upload Foto</label>
                                        <input type="file" class="form-control-file" id="uploadFoto" name="upload_foto">
                                    </div>
                                </form>
                            </div>
                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="document.getElementById('hewanForm').submit();">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>

                @forelse($trackings ?? [] as $tracking)
                    <div class="card w-55 mx-auto mb-3 card-first" style="max-width: 1200px;">
                        <div class="card-body d-flex align-items-center">
                            <div>
                                <img src="{{ asset('storage/' . $tracking->photo) }}" alt="Gambar tracking" style="max-width: 80px; margin-right: 20px;">
                            </div>
                            <div>
                                <div>
                                    <p class="card-text no-margin">{{ \Carbon\Carbon::parse($tracking->tanggal_konsul)->format('d F Y') }}</p>
                                    <h5 class="card-title">Keluhan: {{ $tracking->nama_hewan}}</h5>
                                </div>
                            </div>
                            <div class="btn-container" style="margin-left: auto;">
                                <a href="#" class="btn btn-primary detail-button" data-target="#trackingDetail{{ $tracking->id }}">Detail</a>
                                <button type="button" class="btn btn-link delete-button" data-toggle="modal" data-target="#deleteModal{{ $tracking->id }}">
                                    <img src="{{ asset('gambar/trash.png') }}" alt="Delete" style="width: 20px;">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card w-55 mx-auto mb-3 card-detail" id="trackingDetail{{ $tracking->id }}" style="max-width: 1200px; display: none;">
                        <div class="card-body detail-content">
                            <!-- Konten card detail -->
                            <img src="{{ asset('storage/' . $tracking->photo) }}" alt="Gambar Detail tracking" style="margin-right: 20px;">
                            <div class="detail-text">
                                <p>{!! nl2br(e($tracking->keluhan)) !!}</p>
                            </div>
                            <div class="button-container">
                                <a href="/konsultasi/{{ $tracking->id }}" class="btn btn-danger">Konsultasikan</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="deleteModal{{ $tracking->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $tracking->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $tracking->id }}">Konfirmasi Hapus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus tracking ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form id="deleteForm{{ $tracking->id }}" action="{{ route('trackings.destroy', $tracking->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-white">kamu belum menambahkan tracking</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Event listener untuk ikon close pada kartu
        document.querySelectorAll('.close-icon').forEach(function(icon) {
            icon.addEventListener('click', function(event) {
                event.preventDefault();
                icon.closest('.card').remove();
            });
        });

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

        // Event listener untuk tombol delete
        document.querySelectorAll('.delete-button').forEach(function(btn) {
            btn.addEventListener('click', function(event) {
                var trackingId = btn.getAttribute('data-id');
                document.getElementById('tracking_id').value = trackingId;
                document.getElementById('deleteForm').action = '/trackings/' + trackingId;
            });
        });
    });
</script>

</body>
</html>
