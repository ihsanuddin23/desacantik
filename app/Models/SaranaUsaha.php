<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaUsaha extends Model
{
    use HasFactory;
    protected $table = 'sarana_usaha';

    // Kolom yang bisa diisi
    protected $fillable = [
        'id',
        'jenis_perusahaan',
        'jumlah_volume_sarana_usaha',
        'keterangan_sarana_usaha',
    ];
}
