<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_plate',
        'car_model',
        'car_status',
        'rent_price_per_day',
        'rent_price_per_hour',
    ];
}
