<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fasilitas_umum', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_sarana_prasarana_fasilitas_umum')->nullable(); // Menambahkan nullable
            $table->string('nama_fasilitas_umum')->nullable();
            $table->integer('jumlah_volume_fasilitas_umum')->nullable();
            $table->string('keterangan_fasilitas_umum')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas_umum');
    }
};
