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
        Schema::create('kamuspenyakit', function (Blueprint $table) {
            $table->id();
            $table->string ('namapenyakit');
            $table->text ('deskripsipenyakit');
            $table->text ('gejalapenyakit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamuspenyakit');
    }
};
