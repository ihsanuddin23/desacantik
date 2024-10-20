<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasRt extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'identitasrt';

    // Menentukan kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'nomor_rt',
        'nomor_rw',
        'dusun',
        'nama_ketua_rt',
        'tanggal_lahir_ketua_rt',
        'pendidikan_ketua_rt',
        'pekerjaan_ketua_rt',
        'nomor_telepon_ketua_rt',
    ];

    // Jika ada relasi, bisa ditambahkan di sini
}
