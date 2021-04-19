<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'brand',
        'model',
        
        'year',
        'cc',
        'type',
        'engine_no',
        'date',
        'total_service',
    ];
}