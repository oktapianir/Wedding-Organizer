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
        Schema::create('invoices', function (Blueprint $table) {
            // Gunakan id_inv sebagai primary key
            $table->string('id_inv')->primary();
            $table->string('id_pemesanan');
            $table->unsignedBigInteger('id_customer');

            // Foreign key constraints
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanans');
            $table->foreign('id_customer')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
