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
        Schema::create('dekorasis', function (Blueprint $table) {
            // $table->id();
            $table->string('id_dekorasi')->primary();
            $table->string('nama_dekorasi');
            $table->text('deskripsi_dekorasi');
            $table->biginteger('harga_dekorasi');
            $table->string('foto_dekorasi')->nullable()->default('')->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dekorasis');
    }
};
