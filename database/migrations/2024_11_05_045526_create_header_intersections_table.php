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
        Schema::create('header_intersections', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('ditangani_oleh')->nullable();
            $table->string('kota');
            $table->string('simpang');
            $table->string('ukuran_kota')->nullable();
            $table->string('perihal');
            $table->string('periode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_intersections');
    }
};
