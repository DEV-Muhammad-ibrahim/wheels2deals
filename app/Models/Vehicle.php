<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'fuel',
        'year',
        'color',
        'interior_color',
        'seating_capacity',
        'transmission',
        'mileage',
        'price',
        'price_type',
        'condition',
        'description',
        'image',
        'status',
        'user_id',
        'model_id',
        'type_id',
        'company_id',
        'category_id'
    ];

    /**
     * Get the model associated with the vehicle.
     */
    public function model()
    {
        return $this->belongsTo(VehicleModel::class, 'model_id');
    }
    public function features()
    {
        return $this->hasMany(VehicleFeature::class);
    }
    /**
     * Get the type associated with the vehicle.
     */
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    /**
     * Get the company associated with the vehicle.
     */
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    /**
     * Get the user who owns the vehicle.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function images()
    {
        return $this->hasMany(VehicleImages::class); // Assuming VehicleImage is the model for images
    }
}
