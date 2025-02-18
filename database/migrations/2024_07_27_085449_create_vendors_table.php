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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_type');
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->string('no_telepon');
            $table->string('penanggung_jawab');
            // $table->decimal('harga', 10, 2);
            // $table->text('deskripsi')->nullable();
            $table->string('image')->nullable();
            // $table->string('kapasitas')->nullable();
            // $table->string('status')->nullable();
            // $table->string('jenis_dokumentasi')->nullable();
            // $table->string('jenis_undangan')->nullable();
            // $table->string('bahan_undangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
