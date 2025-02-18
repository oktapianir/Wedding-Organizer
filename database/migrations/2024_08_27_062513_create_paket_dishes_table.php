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
        Schema::create('paket_dishes', function (Blueprint $table) {
            // $table->id();
            $table->string('id_dishes')->primary();
            $table->string('nama_paket_dish');
            $table->Biginteger('harga_dish');    
            $table->string('deskripsi_dish');
            $table->string('foto_paket_dish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_dishes');
    }
};
