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
        Schema::create('sarana_usaha', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_perusahaan')->nullable();
            $table->integer('jumlah_volume_sarana_usaha')->nullable();
            $table->string('keterangan_sarana_usaha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_usaha');
    }
};
