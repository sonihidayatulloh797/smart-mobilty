<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderIntersection extends Model
{
    use HasFactory;

    protected $table = 'header_intersections';

    protected $fillable = [
        'tanggal',
        'ditangani_oleh',
        'kota',
        'simpang',
        'ukuran_kota',
        'perihal',
        'periode'
    ];
}
