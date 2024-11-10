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
        Schema::create('pendidikanrt', function (Blueprint $table) {
            $table->id();
            // Menambahkan foreign key dan memastikan referensinya ke tabel identitasrt
            $table->foreignId('identitasrt_id')->constrained('identitasrt')->onDelete('cascade');

            $table->integer('total')->nullable();
            $table->integer('tidak_tamat_sd')->nullable();
            $table->integer('tamat_sd')->nullable()->default(0);
            $table->integer('tamat_smp')->nullable()->default(0);
            $table->integer('tamat_sma')->nullable()->default(0);
            $table->integer('tamat_perguruan_tinggi')->nullable()->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendidikanrt');
    }
};
