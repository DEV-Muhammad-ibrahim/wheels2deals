<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleFeature extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'vehicle_id', 'feature_id'];
    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
    public function features()
    {
        return $this->belongsTo(Feature::class, 'feature_id');
    }
}
