<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function bikes(){
        $bikes= Bike::all();
        return view('backend.layout.bikes.bikelist',compact('bikes'));

    }
    public function create(Request $request){

        //dd(request()->all());
        Bike::create([
            'brand'=> $request->brand,
            'model'=> $request->model,
            'cc'=> $request->cc,
            'year'=> $request->year,

        ]);
        return redirect()->back();

    }
}
