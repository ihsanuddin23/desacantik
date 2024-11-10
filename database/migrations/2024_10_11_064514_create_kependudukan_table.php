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
        Schema::create('kependudukan', function (Blueprint $table) {
            $table->id();
            $table->string('kemasyarakatan')->nullable(); // Menambahkan nullable
            $table->integer('jumlah_volume_kependudukan')->nullable();
            $table->string('keterangan_kependudukan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kependudukan');
    }
};
