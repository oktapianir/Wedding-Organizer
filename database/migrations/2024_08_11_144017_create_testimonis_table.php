<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonisTable extends Migration
{
    public function up()
    {
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cust')->unsigned();
            $table->bigInteger('id_pemesanan')->unsigned();
            $table->text('testimoni');
            $table->tinyInteger('rating')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('testimonis');
    }
}
