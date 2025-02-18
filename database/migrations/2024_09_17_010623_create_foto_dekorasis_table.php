<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoDekorasisTable extends Migration
{
    public function up()
    {
        Schema::create('foto_dekorasis', function (Blueprint $table) {
            $table->string('id_foto_dekorasi')->primary();
            $table->string('dekorasi_id'); // Foreign key ke tabel dekorasi
            $table->string('foto_path');   // Lokasi path foto
            $table->timestamps();

            $table->foreign('dekorasi_id')->references('id_dekorasi')->on('dekorasis')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto_dekorasis');
    }
}
