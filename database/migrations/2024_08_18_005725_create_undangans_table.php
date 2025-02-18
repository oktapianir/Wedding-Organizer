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
        Schema::create('undangans', function (Blueprint $table) {
            // $table->id();
            $table->string('id_undangan');
            $table->string('nama_undangan');
            $table->string('bahan_undangan');
            $table->text('deskripsi_undangan');
            $table->biginteger('harga_undangan');
            $table->string('foto_undangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('undangans');
    }
};
