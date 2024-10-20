<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'company_id', 'type_id'];
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
