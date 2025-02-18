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
        Schema::create('gedung', function (Blueprint $table) {
            // $table->id();
            $table->string('id_gedung')->change();
            $table->string('nama_gedung');
            $table->string('tipe_gedung');
            $table->string('alamat_gedung');
            $table->integer('kapasitas_gedung');
            $table->bigInteger('harga_gedung')->nullable();
            $table->string('status_gedung');
            $table->text('deskripsi_gedung')->nullable();
            $table->string('foto_gedung')->nullable();
            $table->timestamps();
        });
             
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gedung');
    }
};
