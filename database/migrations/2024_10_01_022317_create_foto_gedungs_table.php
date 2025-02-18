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
        Schema::create('foto_gedungs', function (Blueprint $table) {
            // Primary key berupa string dengan nama 'id_foto_gedung'
            $table->string('id_foto_gedung')->primary(); 

            // Kolom foreign key 'gedung_id' untuk menghubungkan dengan tabel 'gedungs'
            $table->string('gedung_id');
            $table->foreign('gedung_id')->references('id_gedung')->on('gedung')->onDelete('cascade');

            // Kolom untuk menyimpan lokasi file foto
            $table->string('foto_path'); 

            // Kolom timestamp untuk mencatat waktu pembuatan dan pembaruan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_gedungs');
    }
};
