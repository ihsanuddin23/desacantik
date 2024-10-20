<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kependudukan extends Model
{
    use HasFactory;
    protected $table = 'kependudukan';

    // Kolom yang bisa diisi
    protected $fillable = [
        'id',
        'kemasyarakatan',
        'jumlah_volume_kependudukan',
        'keterangan_kependudukan',
    ];
}
