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
        Schema::create('pemerintah', function (Blueprint $table) {
            $table->id(); // Primary key (ID)
            $table->string("thumbnail")->nullable(); // Allow thumbnail to be nullable
            $table->string('nama');
            $table->string('jabatan');
            $table->string('niap')->unique(); // NIAP should be unique
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('pendidikan_terakhir');
            $table->string('nomor_sk')->nullable(); // SK can be nullable
            $table->date('tanggal_sk')->nullable(); // Tanggal SK can also be nullable
            $table->string('masa_jabatan');
            $table->string('status');
            $table->string('tupoksi_jabatan');
            $table->timestamps(); // Created at, updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
