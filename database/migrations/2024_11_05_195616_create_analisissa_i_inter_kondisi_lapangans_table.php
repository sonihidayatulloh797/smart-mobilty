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
        Schema::create('analisissa_i_inter_kondisi_lapangan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pendekat');
            $table->string('tipe_lingkungan');
            $table->string('kelas_hambatan');
            $table->string('median');
            $table->decimal('kelandaian_pendekat', 5, 2);
            $table->string('b_kij');
            $table->decimal('jarak_kendaraan_parkir', 5, 2);
            $table->decimal('lebar_pendekat_awal_lajur', 5, 2);
            $table->decimal('lebar_pendekat_garis_henti', 5, 2);
            $table->decimal('lebar_pendekat_lajur_belok_kiri', 5, 2)->nullable(); // Mengizinkan null
            $table->decimal('lebar_pendekat_lajur_keluar', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analisissa_i_inter_kondisi_lapangan');
    }
};
