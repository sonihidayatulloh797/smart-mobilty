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
        Schema::create('traffic_flow_visualization', function (Blueprint $table) {
            $table->id();
            $table->timestamp('uploaded'); // Untuk menyimpan data waktu yang diupload
            $table->integer('bicycle')->default(0); // Jumlah bicycle
            $table->integer('car')->default(0); // Jumlah car
            $table->integer('motorcycle')->default(0); // Jumlah motorcycle
            $table->integer('bus')->default(0); // Jumlah bus
            $table->integer('train')->default(0); // Jumlah train
            $table->integer('truck')->default(0); // Jumlah truck
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traffic_flow_visualization');
    }
};
