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
        Schema::create('sarana_transportasi', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_sarana_prasarana_transportasi')->nullable(); // Menambahkan nullable
            $table->string('kondisi_transportasi')->nullable();
            $table->integer('jumlah_volume_transportasi')->nullable();
            $table->string('keterangan_transportasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_transportasi');
    }
};
