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
        Schema::create('sektor_ekonomi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sektor'); // Nama sektor
            $table->text('deskripsi')->nullable(); // Deskripsi sektor (opsional)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sektor_ekonomi');
    }
};
