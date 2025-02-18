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
        Schema::create('foto_dokumentasis', function (Blueprint $table) {
            $table->string('id_foto_dokumentasi')->primary();
            $table->string('dokumentasi_id'); // Foreign key ke tabel dekorasi
            $table->string('foto_path');   // Lokasi path foto
            $table->timestamps();

            $table->foreign('dokumentasi_id')->references('id_dokumentasi')->on('dokumentasis')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_dokumentasis');
    }
};


