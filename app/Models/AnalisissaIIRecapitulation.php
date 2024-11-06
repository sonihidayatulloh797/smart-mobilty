<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisissaIIRecapitulation extends Model
{
    use HasFactory;

    protected $table = 'analisissa_i_i_recapitulation';

    protected $fillable = [
        'periode',
        'waktu',
        'north',
        'east',
        'south',
        'west',
        'total',
    ];

    // Event untuk menghitung total sebelum disimpan
    protected static function booted()
    {
        static::saving(function ($recapitulation) {
            $recapitulation->total = $recapitulation->north + $recapitulation->east + $recapitulation->south + $recapitulation->west;
        });
    }
}
