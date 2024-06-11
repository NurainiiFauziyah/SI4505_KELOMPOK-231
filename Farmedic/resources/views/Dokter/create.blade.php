@extends('layouts.layout')
@push('customcss')
<link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endpush
@section('title','Dahboard')
@section('page-title','Home')
@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Add New Dokter</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
        <form action="{{ route('Dokter.store') }}" enctype="multipart/form-data" method="POST">
            @method('POST')
            @csrf
            <div class="form-group">
                <label>Dokter</label>
                <input type="text" class="form-control" name="dokter">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <div class="form-group">
                <label>Jam Kerja</label>
                <select name="jam_mulai" class="form-control">
                    <option value="08:00">08:00</option>
                    <option value="09:00">09:00</option>
                    <!-- Tambahkan opsi jam sesuai kebutuhan -->
                </select>
                <span>sampai</span>
                <select name="jam_selesai" class="form-control">
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <!-- Tambahkan opsi jam sesuai kebutuhan -->
                </select>
            </div>
            <div class="form-group">
                <label>Harga Konsultasi (Rp)</label>
                <input type="text" class="form-control" name="harga_konsultasi">
            </div>
            <div class="form-group">
                <button type="submit" href="{{ route('Dokter')}}" class="btn btn-primary">Tambah Dokter</button>
                <a href="{{ route('Dokter')}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
<!-- /.box -->
@endsection
@push('datatables')
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      //CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
</script>
@endpush
