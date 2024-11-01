<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleIntersection extends Model
{
    use HasFactory;
    protected $table = 'vehicle_intersection';
    protected $fillable = ['type', 'count', 'month', 'intersection'];
}
