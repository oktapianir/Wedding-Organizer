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
        Schema::create('foto_hiburans', function (Blueprint $table) {
            $table->string('id_foto_hiburan')->primary();
            $table->string('hiburan_id'); // Foreign key ke tabel hiburan
            $table->string('foto_path');   // Lokasi path foto
            $table->timestamps();

            $table->foreign('hiburan_id')->references('id_hiburan')->on('hiburans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_hiburans');
    }
};
