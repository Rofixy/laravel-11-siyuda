@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Pengajuan Yudisium</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('pengajuans.update', $pengajuan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pengajuan->nama }}" required>
        </div>
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $pengajuan->nim }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $pengajuan->email }}" required>
        </div>
        <div class="form-group">
            <label for="telepon">Nomor Telepon:</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $pengajuan->telepon }}" required>
        </div>
        <div class="form-group">
            <label for="program_studi">Program Studi:</label>
            <input type="text" class="form-control" id="program_studi" name="program_studi" value="{{ $pengajuan->program_studi }}" required>
        </div>
        <div class="form-group">
            <label for="fakultas">Fakultas:</label>
            <input type="text" class="form-control" id="fakultas" name="fakultas" value="{{ $pengajuan->fakultas }}" required>
        </div>
        <div class="form-group">
            <label for="ipk">IPK:</label>
            <input type="text" class="form-control" id="ipk" name="ipk" value="{{ $pengajuan->ipk }}" required>
        </div>
        <div class="form-group">
            <label for="sks">Jumlah SKS:</label>
            <input type="text" class="form-control" id="sks" name="sks" value="{{ $pengajuan->sks }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
