<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaanRt extends Model
{
    use HasFactory;
    protected $table = 'pekerjaan_rt';
    protected $fillable = [
        'identitasrt_id',
        'jumlah_penduduk',
        'pertanian_kehutan_perikanan',
        'pertambangan_dan_penggalian',
        'industri_pengolahan',
        'pengadaan_listrik_gas_uap',
        'treatment_air_limbah_dan_remediasi',
        'konstruksi',
        'perdagangan_besar_eceran',
        'pengangkutan_dan_pergudangan',
        'penyediaan_akomodasi_dan_makan_minum',
        'informasi_dan_komunikasi',
        'aktivitas_keuangan_dan_asuransi',
        'real_estat',
        'aktivitas_profesional_ilmiah_teknis',
        'aktivitas_penyewaan_dan_opsi',
        'administrasi_pemerintahan_pertahanan',
        'pendidikan',
        'aktivitas_kesehatan_dan_sosial',
        'kesenian_hiburan_dan_rekreasi',
        'aktivitas_jasa_lainnya',
        'aktivitas_keluarga_pemberi_kerja',
        'aktivitas_badan_internasional_dan_bei',
    ];
    public function identitasRt()
    {
        return $this->belongsTo(IdentitasRt::class, 'identitasrt_id');
    }
}
