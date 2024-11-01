<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrafficFlowVisualization extends Model
{
    use HasFactory;

    protected $table = 'traffic_flow_visualization';

    // Kolom yang bisa diisi
    protected $fillable = [
        'uploaded',
        'bicycle',
        'car',
        'motorcycle',
        'bus',
        'train',
        'truck'
    ];

    // Jika menggunakan kolom 'uploaded' sebagai datetime
    protected $casts = [
        'uploaded' => 'datetime',
    ];
}
