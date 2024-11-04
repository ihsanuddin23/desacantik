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

            $table->integer('laki_laki')->nullable();
            $table->integer('perempuan')->nullable();
            $table->integer('laki_belum_sekolah')->nullable()->default(0);
            $table->integer('laki_belum_tamat_sd')->nullable()->default(0);
            $table->integer('laki_tamat_sd')->nullable()->default(0);
            $table->integer('laki_sltp')->nullable()->default(0);
            $table->integer('laki_slta')->nullable()->default(0);
            $table->integer('laki_diploma_1_2')->nullable()->default(0);
            $table->integer('laki_diploma_3')->nullable()->default(0);
            $table->integer('laki_diploma_4_strata_1')->nullable()->default(0);
            $table->integer('laki_strata_2')->nullable()->default(0);
            $table->integer('laki_strata_3')->nullable()->default(0);
            $table->integer('laki_belum_mengisi')->nullable()->default(0);

            // Perempuan
            $table->integer('perempuan_belum_sekolah')->nullable()->default(0);
            $table->integer('perempuan_belum_tamat_sd')->nullable()->default(0);
            $table->integer('perempuan_tamat_sd')->nullable()->default(0);
            $table->integer('perempuan_sltp')->nullable()->default(0);
            $table->integer('perempuan_slta')->nullable()->default(0);
            $table->integer('perempuan_diploma_1_2')->nullable()->default(0);
            $table->integer('perempuan_diploma_3')->nullable()->default(0);
            $table->integer('perempuan_diploma_4_strata_1')->nullable()->default(0);
            $table->integer('perempuan_strata_2')->nullable()->default(0);
            $table->integer('perempuan_strata_3')->nullable()->default(0);
            $table->integer('perempuan_belum_mengisi')->nullable()->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendidikanrt');
    }
};
