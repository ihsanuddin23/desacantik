<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikan';

    // Kolom yang bisa diisi
    protected $fillable = [
        'id',
        'jenis_pendidikan',
        'nama_pendidikan',
        'jumlah_volume_pendidikan',
    ];
}
