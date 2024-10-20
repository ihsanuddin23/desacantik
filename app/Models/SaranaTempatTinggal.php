<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaTempatTinggal extends Model
{
    use HasFactory;
    protected $table = 'sarana_tempat_tinggal';

    // Kolom yang bisa diisi
    protected $fillable = [
        'id',
        'jenis_sarana_prasarana_tempat_tinggal',
        'kondisi_tempat_tinggal',
        'jumlah_volume_tempat_tinggal',
        'keterangan_tempat_tinggal',
    ];
}
