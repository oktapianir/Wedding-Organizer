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
        Schema::table('vendors', function (Blueprint $table) {
         // Mengubah kolom 'penanggung_jawab' menjadi NOT NULL
         $table->string('penanggung_jawab')->nullable(false)->change();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vendors', function (Blueprint $table) {
            // Kembalikan kolom 'penanggung_jawab' menjadi nullable jika perlu
            $table->string('penanggung_jawab')->nullable()->change();
        });

    }
};
