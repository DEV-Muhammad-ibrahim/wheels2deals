<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'company', 'compatibility', 'description', 'image', 'price', 'price_type'];

    public function images()
    {
        return $this->hasMany(AcessoryImage::class);
    }
}
