<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        
        $categories = Category::all();
        return view('backend.layout.category.list',compact('categories'));
    }
    public function create(){
        return view('backend.layout.category.create');
    }
    

    public function store(Request $request){
        //dd($request-> all());
        Category::create([
            'name' => $request->name,
           // 'status' =>$request-> status,
            'description' =>$request-> description,
            //'image'=>$request -> image,
        ]);
        return redirect()->route('admin.category.list');

    }

}
