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
        Schema::create('pemesanan_gedung', function (Blueprint $table) {
            $table->id(); // ID pemesanan
            $table->string('id_pemesanan');
            $table->string('id_gedung'); 
            $table->foreign('id_gedung')->references('id_gedung')->on('gedung')
             ->onDelete('cascade');
            $table->date('tanggal_acara'); // Tanggal acara
            $table->integer('kapasitas'); // Kapasitas yang dipesan
            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_gedung');
    }
};
