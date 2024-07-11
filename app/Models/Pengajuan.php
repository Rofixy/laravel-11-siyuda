<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'email',
        'telepon',
        'program_studi',
        'fakultas',
        'ipk',
        'sks',
        'transkrip',
        'skripsi',
        'foto',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
