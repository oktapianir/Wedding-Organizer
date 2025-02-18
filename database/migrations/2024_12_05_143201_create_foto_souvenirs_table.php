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
        Schema::create('foto_souvenirs', function (Blueprint $table) {
            $table->string('id_foto_souvenir')->primary();
            $table->string('souvenir_id'); 
            $table->string('foto_path');  
            $table->timestamps();

            $table->foreign('souvenir_id')->references('id_paket_souvenir')->on('paket_souvenirs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_souvenirs');
    }
};
