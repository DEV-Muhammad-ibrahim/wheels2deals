<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleImages extends Model
{
    use HasFactory;
    protected $fillable = ['path', 'vehicle_id'];
    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
