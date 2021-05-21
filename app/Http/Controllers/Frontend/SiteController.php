<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('frontend.layout.home');
    }

    public function about(){
        return view('frontend.layout.about');
    }

}
