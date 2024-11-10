<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PendidikanRT;
use App\Models\PekerjaanRt;

class IdentitasRt extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'identitasrt';

    // Menentukan kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'nomor_rt',
        'nomor_rw',
        'dusun',
        'nama_ketua_rt',
        'jumlah_kk',
        'laki_laki',
        'perempuan',
        'tanggal_lahir_ketua_rt',
        'pendidikan_ketua_rt',
        'pekerjaan_ketua_rt',
        'nomor_telepon_ketua_rt',
    ];

    public function pendidikanRt()
    {
        return $this->hasMany(PendidikanRt::class, 'identitasrt_id');
    }
    public function pekerjaanRt()
    {
        return $this->hasMany(PekerjaanRt::class, 'identitasrt_id');
    }
    public function getNomorTeleponKetuaRtFormattedAttribute()
    {
        return preg_replace('/(\d{4})(\d{4})(\d+)/', '$1-$2-$3', $this->nomor_telepon_ketua_rt);
    }
}
