<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $data = Service::all();
        return view('backend.layout.service.servicelist',compact('data'));

    }
    public function create(Request $request){
       // dd($request->all());
       Service::create([
        'name' => $request->name,
        'description' => $request->description,
        'charge' => $request->charge,
       ]);
       return redirect()->back();

    }
}
