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
        Schema::create('pemesanan_dokumentasis', function (Blueprint $table) {
            $table->id();
            $table->string('id_pemesanan');
            $table->string('id_dokumentasi');
            $table->decimal('harga_dokumentasi', 10, 2);
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanans');
            $table->foreign('id_dokumentasi')->references('id_dokumentasi')->on('dokumentasis');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_dokumentasis');
    }
};
