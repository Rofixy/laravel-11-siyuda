<?php

// app/Http/Controllers/PengajuanController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    public function create()
    {
        return view('pengajuan.pengajuan');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:15',
            'program_studi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'ipk' => 'required|numeric|min:0|max:4',
            'sks' => 'required|integer|min:0',
            'transkrip' => 'required|file|mimes:pdf|max:2048',
            'skripsi' => 'required|file|mimes:pdf|max:2048',
            'foto' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Dapatkan ID pengguna yang sedang login
        $user_id = Auth::id();

        // Simpan berkas Foto
        $filenameFoto = time() . '-foto.' . $request->foto->extension();
        $request->foto->move(public_path('foto'), $filenameFoto); 

        // Berkas transkrip
        $filenameTranskrip = time() . '-pdf.' . $request->transkrip->extension();
        $request->transkrip->move(public_path('transkrip'), $filenameTranskrip); 

        // Skripsi
        $filenameSkripsi = time() . '-pdf.' . $request->skripsi->extension();
        $request->skripsi->move(public_path('skripsi'), $filenameSkripsi); 

        // $transkripPath = $request->file('transkrip')->store('transkrip');
        // $skripsiPath = $request->file('skripsi')->store('skripsi');
        // $fotoPath = $request->file('foto')->store('foto');
        
        // Simpan data pengajuan ke database
        Pengajuan::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'program_studi' => $request->program_studi,
            'fakultas' => $request->fakultas,
            'ipk' => $request->ipk,
            'sks' => $request->sks,
            'skripsi' => $filenameSkripsi,
            'transkrip' => $filenameTranskrip,
            'foto' => $filenameFoto,
            'user_id' => $user_id, // Sertakan user_id yang didapat dari Auth
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('pengajuan.create')->with('success', 'Pengajuan yudisium berhasil diajukan!');
    }
}
