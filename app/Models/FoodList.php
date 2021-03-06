<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodList extends Model
{
    use HasFactory;

    protected $fillable = [
        'protain',
        'fat',
        'carbo',
        'calorie',
        'quantity',
        'name',
    ];
}
