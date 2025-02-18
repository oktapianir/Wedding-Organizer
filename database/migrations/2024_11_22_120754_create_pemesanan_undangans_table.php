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
        Schema::create('pemesanan_undangans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pemesanan');
            $table->string('id_undangan');
            $table->decimal('harga_undangan', 10, 2);
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanans');
            $table->foreign('id_undangan')->references('id_undangan')->on('undangans');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_undangans');
    }
};
