<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view('backend.layout.employee.list',compact('data'));
    }
    public function create(){
        return view('backend.layout.employee.create');
    }
    public function store(request $request){
        $filename= "";
        if($request->hasFile('image')){
            $file = $request->file('image');

            if($file->isValid()){
                $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('employee',$filename);
            }
        }

        Employee::create([
            'name'=>$request ->name,
            'email'=>$request ->email,
            'password'=>$request ->password,

        ]);
        return redirect()->route('admin.employee.list');
    }
}
