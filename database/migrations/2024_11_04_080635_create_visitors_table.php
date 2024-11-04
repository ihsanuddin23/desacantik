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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->string('ip_address'); // Kolom untuk menyimpan IP address pengunjung
            $table->string('browser'); // Kolom untuk menyimpan informasi browser
            $table->string('os'); // Kolom untuk menyimpan informasi sistem operasi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors'); // Drop tabel jika migrasi dibatalkan
    }
};
