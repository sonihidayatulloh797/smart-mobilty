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
            $table->integer('timeframe');
            $table->integer('car');
            $table->integer('bus');
            $table->integer('motocycle');
            $table->integer('truck');
            $table->integer('train');
            $table->integer('bycycle');
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
