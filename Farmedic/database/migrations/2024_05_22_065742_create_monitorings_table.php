<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable(); // Path untuk foto utama
            $table->date('date'); // Tanggal pengingat
            $table->string('title'); // Judul pengingat
            $table->text('description'); // Deskripsi pengingat
            $table->string('detail_photo')->nullable(); // Path untuk foto detail
            $table->text('detail'); // Pesan pada modal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitorings');
    }
}