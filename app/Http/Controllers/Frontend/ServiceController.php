<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bike;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //b1
    public function service(){
        $bikes = Bike::all();
        return view('frontend.layouts.service',compact('bikes'));
    }
}
