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
        Schema::create('historis', function (Blueprint $table) {
            $table->string('id_histori')->primary();
            $table->unsignedBigInteger('id_customer'); // Kolom id_customer untuk relasi ke users
            $table->string('id_pemesanan');
            $table->timestamp('tanggal_pemesanan');
            $table->string('status_pemesanan');

            // Menambahkan foreign key
            $table->foreign('id_customer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanans')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historis');
    }
};

