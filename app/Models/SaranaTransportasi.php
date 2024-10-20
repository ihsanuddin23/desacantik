<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaTransportasi extends Model
{
    use HasFactory;

    protected $table = 'sarana_transportasi';

    // Kolom yang bisa diisi
    protected $fillable = [
        'id',
        'jenis_sarana_prasarana_transportasi',
        'kondisi_transportasi',
        'jumlah_volume_transportasi',
        'keterangan_transportasi',
    ];
}
