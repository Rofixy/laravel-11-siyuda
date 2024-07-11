@extends('layouts.app')

@section('content')
@if(auth()->check() && auth()->user()->role == 'admin')
<div class="container">
    <h2>Daftar Pengajuan Yudisium</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-responsive table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Program Studi</th>
                <th>Fakultas</th>
                <th>IPK</th>
                <th>SKS</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengajuans as $pengajuan)
                <tr>
                    <td>{{ $pengajuan->nama }}</td>
                    <td>{{ $pengajuan->nim }}</td>
                    <td>{{ $pengajuan->email }}</td>
                    <td>{{ $pengajuan->telepon }}</td>
                    <td>{{ $pengajuan->program_studi }}</td>
                    <td>{{ $pengajuan->fakultas }}</td>
                    <td>{{ $pengajuan->ipk }}</td>
                    <td>{{ $pengajuan->sks }}</td>
                    <td>{{ $pengajuan->status ?? 'Pending' }}</td>
                    <td>
                        <a href="{{ route('pengajuans.edit', ['pengajuan' => $pengajuan->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('pengajuans.destroy', ['pengajuan' => $pengajuan->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                        <form action="{{ route('pengajuans.approve', ['pengajuan' => $pengajuan->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Setujui</button>
                        </form>
                        <form action="{{ route('pengajuans.reject', ['pengajuan' => $pengajuan->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">Tolak</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection
