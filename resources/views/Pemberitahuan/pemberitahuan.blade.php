@extends('layouts.app_user')

@section('content')
<div class="container">
    <h2>Pemberitahuan Yudisium</h2>
    @if ($pengajuan)
        @if ($pengajuan->status == 'approved')
            <div class="alert alert-success">
                <strong>Selamat!</strong> Pengajuan yudisium Anda telah disetujui. Anda dapat mengunduh undangan yudisium di bawah ini.
            </div>
            <a href="{{ route('undanganyudisium') }}" class="btn btn-primary" target="_blank">Unduh Surat Undangan</a>
        @elseif ($pengajuan->status == 'rejected')
            <div class="alert alert-danger">
                <strong>Maaf!</strong> Pengajuan yudisium Anda ditolak. Silakan hubungi admin untuk informasi lebih lanjut.
            </div>
        @else
            <div class="alert alert-warning">
                Pengajuan yudisium Anda masih dalam proses. Harap menunggu.
            </div>
        @endif
    @else
        <div class="alert alert-info">
            Anda belum mengajukan yudisium.
        </div>
    @endif
</div>
@endsection