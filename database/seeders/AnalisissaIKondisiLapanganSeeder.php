<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AnalisissaIInterKondisiLapangan;

class AnalisissaIKondisiLapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Data yang akan diisi ke tabel kondisi_lapangan
         $data = [
            [
                'kode_pendekat' => 'U',
                'tipe_lingkungan' => 'KOM',
                'kelas_hambatan' => 'R',
                'median' => 'Y',
                'kelandaian_pendekat' => 0,
                'b_kij' => 'T',
                'jarak_kendaraan_parkir' => 0,
                'lebar_pendekat_awal_lajur' => 11.5,
                'lebar_pendekat_garis_henti' => 11.5,
                'lebar_pendekat_lajur_belok_kiri' => null,
                'lebar_pendekat_lajur_keluar' => 11.5,
            ],
            [
                'kode_pendekat' => 'S',
                'tipe_lingkungan' => 'KIM',
                'kelas_hambatan' => 'R',
                'median' => 'Y',
                'kelandaian_pendekat' => 0,
                'b_kij' => 'T',
                'jarak_kendaraan_parkir' => 0,
                'lebar_pendekat_awal_lajur' => 11.0,
                'lebar_pendekat_garis_henti' => 11.0,
                'lebar_pendekat_lajur_belok_kiri' => null,
                'lebar_pendekat_lajur_keluar' => 10.5,
            ],
            [
                'kode_pendekat' => 'T',
                'tipe_lingkungan' => 'KIM',
                'kelas_hambatan' => 'R',
                'median' => 'T',
                'kelandaian_pendekat' => 0,
                'b_kij' => 'Y',
                'jarak_kendaraan_parkir' => 0,
                'lebar_pendekat_awal_lajur' => 8.5,
                'lebar_pendekat_garis_henti' => 6.0,
                'lebar_pendekat_lajur_belok_kiri' => 2.5,
                'lebar_pendekat_lajur_keluar' => 5.0,
            ],
            [
                'kode_pendekat' => 'B',
                'tipe_lingkungan' => 'KIM',
                'kelas_hambatan' => 'R',
                'median' => 'T',
                'kelandaian_pendekat' => 0,
                'b_kij' => 'T',
                'jarak_kendaraan_parkir' => 0,
                'lebar_pendekat_awal_lajur' => 7.0,
                'lebar_pendekat_garis_henti' => 7.0,
                'lebar_pendekat_lajur_belok_kiri' => null,
                'lebar_pendekat_lajur_keluar' => 5.0,
            ],
        ];

        // Mengisi tabel dengan data
        foreach ($data as $item) {
            AnalisissaIInterKondisiLapangan::create($item);
        }
    }
}
