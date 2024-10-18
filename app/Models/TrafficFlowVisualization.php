<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrafficFlowVisualization extends Model
{
    use HasFactory;
    protected $table = 'traffic_flow_visualization';
    protected $fillable = [
        'timeframe',
        'car',
        'bus',
        'motocycle',
        'truck',
        'train',
        'bycycle',
    ];
}
