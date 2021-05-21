<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bike;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
       // $users = User::all();
       $users=User::where('role','=','user')->get();
        return view('backend.layout.customers.customerlist',compact('users'));
    }






}
