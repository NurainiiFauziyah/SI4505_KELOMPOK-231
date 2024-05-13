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
        Schema::create('dokter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dokter');
            $table->string('gambar');
            $table->time('jam_mulai'); // Menggunakan tipe data time untuk jam mulai
            $table->time('jam_selesai'); // Menggunakan tipe data time untuk jam selesai
            $table->unsignedBigInteger('harga_konsultasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter');
    }
};
