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
        Schema::create('paket_makanans', function (Blueprint $table) {
            // $table->id();
            $table->string('id_paket_makanan')->primary();
            $table->string('nama_paket_makanan');
            $table->string('menu_makanan');
            $table->string('deskripsi_makanan');
            $table->Biginteger('harga_paket_makanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_makanans');
    }
};
