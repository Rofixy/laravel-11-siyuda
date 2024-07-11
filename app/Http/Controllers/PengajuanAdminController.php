<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class PengajuanAdminController extends Controller
{
    public function index()
    {
        $pengajuans = Pengajuan::all();
        return view('admin.pengajuan.index', compact('pengajuans'));
    }

    public function edit($id_pengajuans)
    {
        $pengajuan = Pengajuan::findOrFail($id_pengajuans);
        return view('admin.pengajuan.edit', compact('pengajuan'));
    }

    public function update(Request $request, $id_pengajuans)
    {
        $pengajuan = Pengajuan::findOrFail($id_pengajuans);
        $pengajuan->update($request->all());
        return redirect()->route('pengajuans.index')->with('success', 'Pengajuan berhasil diperbarui.');
    }

    public function destroy($id_pengajuans)
    {
        $pengajuan = Pengajuan::findOrFail($id_pengajuans);
        $pengajuan->delete();
        return redirect()->route('pengajuans.index')->with('success', 'Pengajuan berhasil dihapus.');
    }

    public function approve($id_pengajuans)
    {
        $pengajuan = Pengajuan::findOrFail($id_pengajuans);
        $pengajuan->status = 'approved';
        $pengajuan->save();
        return redirect()->route('pengajuans.index')->with('success', 'Pengajuan berhasil disetujui.');
    }

    public function reject($id_pengajuans)
    {
        $pengajuan = Pengajuan::findOrFail($id_pengajuans);
        $pengajuan->status = 'rejected';
        $pengajuan->save();
        return redirect()->route('pengajuans.index')->with('success', 'Pengajuan berhasil ditolak.');
    }
}
