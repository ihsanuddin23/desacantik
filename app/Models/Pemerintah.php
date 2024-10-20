<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemerintah extends Model
{
    use HasFactory;
    // Tentukan nama tabel secara eksplisit (opsional)
    protected $table = 'pemerintah';

    // Daftar kolom yang bisa diisi secara massal
    protected $fillable = [
        'thumbnail',
        'nama',
        'jabatan',
        'niap',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pendidikan_terakhir',
        'nomor_sk',
        'tanggal_sk',
        'masa_jabatan',
        'status',
        'tupoksi_jabatan',
    ];

    // Tentukan kolom yang bertipe tanggal agar otomatis di-cast ke Carbon
    protected $dates = [
        'tanggal_lahir',
        'tanggal_sk',
    ];
}
