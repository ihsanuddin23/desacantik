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
        Schema::create('pendidikanrt_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pendidikanrt_id'); // Pastikan tipe data ini cocok
            $table->json('data');
            $table->timestamps();

            $table->foreign('pendidikanrt_id')->references('id')->on('pendidikanrt')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikanrt_history');
    }
};
