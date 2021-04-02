<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'name',
        'quantity',
        'category_id',

    ];
    public function productCategory(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
