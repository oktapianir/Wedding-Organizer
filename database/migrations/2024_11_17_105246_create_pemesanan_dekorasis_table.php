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

    Schema::create('pemesanan_dekorasis', function (Blueprint $table) {
        $table->id();
        $table->string('id_pemesanan');
        $table->string('id_dekorasi');
        $table->decimal('harga_dekorasi', 10, 2);
        $table->timestamps();
        
        $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanans');
        $table->foreign('id_dekorasi')->references('id_dekorasi')->on('dekorasis');
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_dekorasis');
    }
};
