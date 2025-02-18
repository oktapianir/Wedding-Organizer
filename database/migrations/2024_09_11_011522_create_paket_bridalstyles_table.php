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
        Schema::create('bridalstyles', function (Blueprint $table) {
            // $table->id();
            $table->string('id_bridalstyle')->primary();
            $table->string('nama_paket_bridalstyle');
            $table->string('deskripsi_paket');
            $table->Biginteger('harga_paket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bridalstyles');
    }
};
