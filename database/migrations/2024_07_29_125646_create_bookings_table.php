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
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id_booking'); // Primary key with auto_increment
            $table->unsignedBigInteger('id_customer'); // Foreign key, without auto_increment
            $table->string('gedung');
            $table->string('dekorasi');
            $table->string('katering');
            $table->string('hiburan');
            $table->string('dokumentasi');
            $table->string('makeup');
            $table->string('souvenir');
            $table->string('undangan');
            $table->date('tanggal_booking');
            $table->date('tanggal_acara');
            $table->date('total_biaya');
            $table->string('status_booking');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
