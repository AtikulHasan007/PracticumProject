<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeService extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function freeUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
