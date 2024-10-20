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
        Schema::create('sarana_tempat_tinggal', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_sarana_prasarana_tempat_tinggal')->nullable(); // Menambahkan nullable
            $table->string('kondisi_tempat_tinggal')->nullable();
            $table->integer('jumlah_volume_tempat_tinggal')->nullable();
            $table->string('keterangan_tempat_tinggal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_tempat_tinggal');
    }
};