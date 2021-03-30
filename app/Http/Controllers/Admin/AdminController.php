<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function master(){
        return view('backend.master');
    }
    public function dashboard(){
        return view('backend.layout.dashboard');
    }
}
