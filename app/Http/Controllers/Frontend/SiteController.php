<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('frontend.layouts.home');
    }
    
    public function about(){
        return view('frontend.layouts.about');
    }
    
}
