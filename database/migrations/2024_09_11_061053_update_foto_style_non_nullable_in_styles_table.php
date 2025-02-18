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
        Schema::table('styles', function (Blueprint $table) {
            $table->string('foto_style')->nullable(false)->change(); // Kolom wajib diisi
        });
    }

    public function down()
    {
        Schema::table('styles', function (Blueprint $table) {
            $table->string('foto_style')->nullable()->change(); // Kembali nullable jika rollback
        });
    }

};
