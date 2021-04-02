<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data= Product::with('productCategory')->get();
        return view('backend.layout.product.list',compact('data'));
    }
    public function create(){
        $cats = Category::all();
        return view('backend.layout.product.create',compact('cats'));
    }
    public function store(Request $request){
        Product::create([
            'name'=> $request-> name,
            'quantity'=> $request-> quantity,
            'category_id'=>$request->category_id,
        ]);
    
    }
}
