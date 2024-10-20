<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasUmum extends Model
{
    use HasFactory;
    protected $table = 'fasilitas_umum';

    // Kolom yang bisa diisi
    protected $fillable = [
        'id',
        'jenis_sarana_prasarana_fasilitas_umum',
        'nama_fasilitas_umum',
        'jumlah_volume_fasilitas_umum',
        'keterangan_fasilitas_umum',
    ];
}
