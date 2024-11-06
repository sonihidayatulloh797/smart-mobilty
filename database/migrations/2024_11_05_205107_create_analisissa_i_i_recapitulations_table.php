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
        Schema::create('analisissa_i_i_recapitulation', function (Blueprint $table) {
            $table->id();
            $table->string('periode');
            $table->string('waktu');
            $table->integer('north');
            $table->integer('east');
            $table->integer('south');
            $table->integer('west');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analisissa_i_i_recapitulation');
    }
};
