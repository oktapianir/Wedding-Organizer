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
        Schema::create('hiburans', function (Blueprint $table) {
            // $table->id();
            $table->string('id_hiburan')->primary();
            $table->string('nama_hiburan');
            $table->string('deskripsi_hiburan');
            $table->Biginteger('harga_hiburan');
            $table->string('foto_hiburan'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hiburans');
    }
};
