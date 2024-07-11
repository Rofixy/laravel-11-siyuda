@extends('layouts.app_user')

@section('content')
@if(auth()->check() && auth()->user()->role == 'user')
<div class="container">
    <h2>Formulir Pendaftaran Yudisium</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Informasi Pribadi -->
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="telepon">Nomor Telepon:</label>
            <input type="text" class="form-control" id="telepon" name="telepon" required>
        </div>

        <!-- Informasi Akademik -->
        <div class="form-group">
            <label for="program_studi">Program Studi:</label>
            <input type="text" class="form-control" id="program_studi" name="program_studi" required>
        </div>

        <div class="form-group">
            <label for="fakultas">Fakultas:</label>
            <input type="text" class="form-control" id="fakultas" name="fakultas" required>
        </div>

        <div class="form-group">
            <label for="ipk">IPK:</label>
            <input type="text" class="form-control" id="ipk" name="ipk" required>
        </div>

        <div class="form-group">
            <label for="sks">Jumlah SKS:</label>
            <input type="text" class="form-control" id="sks" name="sks" required>
        </div>

        <!-- Berkas Pendukung -->
        <div class="form-group">
            <label for="transkrip">Upload Transkrip Nilai:</label>
            <input type="file" class="form-control" id="transkrip" name="transkrip" required>
        </div>

        <div class="form-group">
            <label for="skripsi">Upload Skripsi:</label>
            <input type="file" class="form-control" id="skripsi" name="skripsi" required>
        </div>

        <div class="form-group">
            <label for="foto">Upload Foto:</label>
            <input type="file" class="form-control" id="foto" name="foto" required>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Ajukan Yudisium</button>
    </form>
</div>
@endif
@endsection
