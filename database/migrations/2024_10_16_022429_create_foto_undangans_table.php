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
        Schema::create('foto_undangans', function (Blueprint $table) {
            $table->string('id_foto_undangan')->primary();
            $table->string('undangan_id'); // Foreign key ke tabel undangan
            $table->string('foto_path');   // Lokasi path foto
            $table->timestamps();

            $table->foreign('undangan_id')->references('id_undangan')->on('undangans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_undangans');
    }
};