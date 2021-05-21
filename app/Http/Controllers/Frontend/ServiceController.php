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
    public function search(Request $request){
        $search= $request->search;
        if($search){
            $service= Service::where('service_name','like','%'.$search.'%')->get();

        }else
        {
            $service= Service::all();

        }
        return view('frontend.layout.service',compact('service','search'));


    }

}
