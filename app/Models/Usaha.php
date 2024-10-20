<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    use HasFactory;
    protected $table = 'usaha';

    // Kolom yang bisa diisi
    protected $fillable = [
        'id',
        'nama_usaha',
        'jumlah_volume_usaha',
        'keterangan_usaha',
    ];
}
