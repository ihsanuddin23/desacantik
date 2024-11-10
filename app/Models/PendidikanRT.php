<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanRT extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda dari default
    protected $table = 'pendidikanrt';

    // Menentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'identitasrt_id',
        'total',
        'tidak_tamat_sd',
        'tamat_sd',
        'tamat_smp',
        'tamat_sma',
        'tamat_perguruan_tinggi',
        'total', // kolom total
    ];

    // Relasi dengan model IdentitasRT
    public function identitasRt()
    {
        return $this->belongsTo(IdentitasRt::class, 'identitasrt_id');
    }
}
