<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pekerjaan_rt', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitasrt_id')->constrained('identitasrt')->onDelete('cascade');
            $table->integer('jumlah_penduduk')->default(0);
            $table->integer('pertanian_kehutan_perikanan')->default(0);
            $table->integer('pertambangan_dan_penggalian')->default(0);
            $table->integer('industri_pengolahan')->default(0);
            $table->integer('pengadaan_listrik_gas_uap')->default(0);
            $table->integer('treatment_air_limbah_dan_remediasi')->default(0);
            $table->integer('konstruksi')->default(0);
            $table->integer('perdagangan_besar_eceran')->default(0);
            $table->integer('pengangkutan_dan_pergudangan')->default(0);
            $table->integer('penyediaan_akomodasi_dan_makan_minum')->default(0);
            $table->integer('informasi_dan_komunikasi')->default(0);
            $table->integer('aktivitas_keuangan_dan_asuransi')->default(0);
            $table->integer('real_estat')->default(0);
            $table->integer('aktivitas_profesional_ilmiah_teknis')->default(0);
            $table->integer('aktivitas_penyewaan_dan_opsi')->default(0);
            $table->integer('administrasi_pemerintahan_pertahanan')->default(0);
            $table->integer('pendidikan')->default(0);
            $table->integer('aktivitas_kesehatan_dan_sosial')->default(0);
            $table->integer('kesenian_hiburan_dan_rekreasi')->default(0);
            $table->integer('aktivitas_jasa_lainnya')->default(0);
            $table->integer('aktivitas_keluarga_pemberi_kerja')->default(0);
            $table->integer('aktivitas_badan_internasional_dan_bei')->default(0);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjaan_rt');
    }
};
