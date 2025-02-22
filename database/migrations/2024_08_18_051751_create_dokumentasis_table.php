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
        Schema::create('dokumentasis', function (Blueprint $table) {
            // $table->id();
            $table->string('id_dokumentasi')->primary();
            $table->string('nama_paket_dokumentasi');
            $table->string('jenis_dokumentasi');
            $table->string('deskripsi_dokumentasi');
            $table->Biginteger('harga_dokumentasi');
            $table->string('foto_dokumentasi'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumentasis');
    }
};
