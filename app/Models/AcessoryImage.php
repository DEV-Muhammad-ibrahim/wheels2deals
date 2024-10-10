<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcessoryImage extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'accessory_id'];
    public function acessory()
    {
        return $this->belongsTo(Accessory::class, 'accessory_id');
    }
}
