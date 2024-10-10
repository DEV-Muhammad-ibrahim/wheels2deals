<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'vehicle_registration_no',
        'registration_plate_no',
        'doi', // Date of Issue
        'doe', // Date of Expiry
        'category',
        'company',
        'fuel',
        'year',
        'color',
        'mileage',
        'price',
        'price_type',
        'type',
        'condition',
        'description',
        'image',
        'status',
        'user_id' // Foreign key for User
    ];
    protected $casts = [
        'status' => 'boolean',
    ];

    // Define relationships if necessary
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(VehicleImages::class);
    }
    public function features()
    {
        return $this->hasMany(VehicleFeature::class);
    }
}
