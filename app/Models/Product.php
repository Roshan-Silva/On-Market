<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('price')->withTimestamps();
    }
}
