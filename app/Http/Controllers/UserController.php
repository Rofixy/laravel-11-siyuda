<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    
    public function pemberitahuan()
    {
        $pengajuan = Pengajuan::where('user_id', auth()->user()->id)->first();
        return view('pemberitahuan.pemberitahuan', compact('pengajuan'));
    }

}
