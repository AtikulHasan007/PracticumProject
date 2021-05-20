<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bike;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //b1
    public function service(){
        $service = Service::all();
        return view('frontend.layout.service',compact('service'));
    }
}
