<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $values = Customer::all();
        return view('backend.layout.customers.customerlist',compact('values'));
    }
    public function create(Request $request)
    {
        //dd($request->all());
        Customer::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'sex'=> $request->sex,
            'age'=> $request->age,
        ]);

        return redirect()->back();
    }
}
