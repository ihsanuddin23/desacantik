<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SektorEkonomi extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi penamaan
    protected $table = 'sektor_ekonomi';

    // Jika Anda ingin mengizinkan mass assignment pada kolom tertentu
    protected $fillable = [
        'nama_sektor',
    ];
}
