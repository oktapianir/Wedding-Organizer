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
        Schema::create('pemesanans', function (Blueprint $table) {
            // Primary key id_pemesanan dengan format string seperti 'PM0001'
            $table->string('id_pemesanan')->primary();
            
            // Foreign key id_customer terhubung ke tabel users
            $table->unsignedBigInteger('id_customer'); 
            $table->foreign('id_customer')->references('id')->on('users')->onDelete('cascade');
            
            // Kolom tanggal dan informasi pemesanan
            $table->date('tanggal_pemesanan');
            $table->date('tanggal_acara');
            
            // Status pemesanan (enum)
            $table->enum('status_pemesanan', ['pending', 'confirmed', 'canceled']);
            
            // Kolom untuk total biaya
            $table->decimal('total_biaya', 10, 2);
            
            // Menyimpan timestamps created_at dan updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
