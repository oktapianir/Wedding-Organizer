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
        Schema::create('paket_maincourse', function (Blueprint $table) {
            // $table->id();
            $table->string('id_mainC')->primary();
            $table->string('nama_paket_mainC');
            $table->string('deskripsi_mainC');
            $table->Biginteger('harga_paket_mainC');
            $table->string('foto_paket_mainC');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_maincourse');
    }
};

