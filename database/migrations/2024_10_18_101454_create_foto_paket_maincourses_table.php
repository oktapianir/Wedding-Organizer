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
        Schema::create('foto_paket_maincourse', function (Blueprint $table) {
            $table->string('id_foto_paket_mainC')->primary(); // Primary key untuk foto paket maincourse
            $table->string('mainC_id'); // Foreign key ke tabel paket makanan (PaketMakanan)
            $table->string('foto_path');   // Lokasi path foto
            $table->timestamps();

            // Foreign key constraint, menghubungkan ke tabel paket_makanan
            $table->foreign('mainC_id')->references('id_mainC')->on('paket_maincourse')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_paket_maincourse');
    }
};
