<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('identitasrt', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_rt')->nullable();
            $table->string('nomor_rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('nama_ketua_rt')->nullable();
            $table->integer('jumlah_kk')->nullable();
            $table->integer('laki_laki')->nullable();
            $table->integer('perempuan')->nullable();
            $table->date('tanggal_lahir_ketua_rt')->nullable();
            $table->string('pendidikan_ketua_rt')->nullable();
            $table->string('pekerjaan_ketua_rt')->nullable();
            $table->string('nomor_telepon_ketua_rt')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('identitasrt');
    }
};
