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
        Schema::create('vehicle_intersection', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // Jenis kendaraan (misalnya Bicycle, Car)
            $table->integer('count'); // Jumlah kendaraan melewati simpang
            $table->string('month'); // Bulan
            $table->string('intersection'); // Nama simpang jalan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_intersection');
    }
};
