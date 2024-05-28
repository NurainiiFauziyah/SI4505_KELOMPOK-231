<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->date('date'); // Tanggal pengingat
            $table->string('title'); // Judul pengingat
            $table->text('description'); // Deskripsi pengingat
            $table->text('modal_message'); // Pesan pada modal
            $table->string('doctor_name'); // Nama dokter
            $table->date('next_appointment'); // Tanggal konsultasi selanjutnya
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
        Schema::dropIfExists('reminders');
    }
}

