<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisissaIInterKondisiLapangan extends Model
{
    use HasFactory;
    protected $table = 'analisissa_i_inter_kondisi_lapangan';
    protected $fillable = [
        'kode_pendekat',
        'tipe_lingkungan',
        'kelas_hambatan',
        'median',
        'kelandaian_pendekat',
        'b_kij',
        'jarak_kendaraan_parkir',
        'lebar_pendekat_awal_lajur',
        'lebar_pendekat_garis_henti',
        'lebar_pendekat_lajur_belok_kiri',
        'lebar_pendekat_lajur_keluar',
    ];
}
