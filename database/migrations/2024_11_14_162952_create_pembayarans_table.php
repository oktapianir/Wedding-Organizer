<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->string('id_pembayaran')->primary();  // ID pembayaran dengan format custom
            $table->string('pemesanan_id');
            $table->decimal('jumlah_pembayaran', 10, 2);
            $table->string('bukti_pembayaran');
            $table->timestamps();
    
            $table->foreign('pemesanan_id')->references('id_pemesanan')->on('pemesanans')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
