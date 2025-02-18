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
        Schema::create('paket_souvenirs', function (Blueprint $table) {
            // $table->id();
            $table->string('id_paket_souvenir')->primary();
            $table->string('nama_paket_souvenir');
            $table->string('deskripsi_souvenir');
            $table->Biginteger('harga_souvenir');
            $table->string('foto_souvenir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_souvenirs');
    }
};
