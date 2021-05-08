<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherCache extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'unit',
        'provider',
        'temp',
        'description',
    ];
}
