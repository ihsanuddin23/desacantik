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

        'laki_laki',
        'laki_belum_sekolah',
        'laki_belum_tamat_sd',
        'laki_tamat_sd',
        'laki_sltp',
        'laki_slta',
        'laki_diploma_1_2',
        'laki_diploma_3',
        'laki_diploma_4_strata_1',
        'laki_strata_2',
        'laki_strata_3',
        'laki_belum_mengisi',

        'perempuan',
        'perempuan_belum_sekolah',
        'perempuan_belum_tamat_sd',
        'perempuan_tamat_sd',
        'perempuan_sltp',
        'perempuan_slta',
        'perempuan_diploma_1_2',
        'perempuan_diploma_3',
        'perempuan_diploma_4_strata_1',
        'perempuan_strata_2',
        'perempuan_strata_3',
        'perempuan_belum_mengisi',
    ];

    // Relasi dengan model IdentitasRT
    public function identitasRt()
    {
        return $this->belongsTo(IdentitasRt::class, 'identitasrt_id'); // Sesuaikan dengan nama kolom foreign key
    }
}