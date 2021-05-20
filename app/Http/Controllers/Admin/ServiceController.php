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
 
    //
    // public function create(Request $request){
    //    // dd($request->all());
    //    Service::create([
    //     'name' => $request->name,
    //     'description' => $request->description,
    //     'charge' => $request->charge,
    //    ]);
    //    return redirect()->back();

    public function create(){
        return view('backend.layout.service.create');
    }

    public function store(Request $request){

        //validation
        $request->validate([
            'image' => 'required|image',
            'service_name' => 'required|min:2|max:20',
            'description' => 'required',
            'service_charge' => 'required|min:2|max:4',
          

        ]);
        $filename= "";
        if($request->hasFile('image')){
            $file = $request->file('image');

            if($file->isValid()){
                $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('service',$filename);
            }
        }
        Service::create([
            'image'=>$filename,
            'service_name'=> $request->service_name,
            'description'=> $request->description,
            'service_charge'=> $request->service_charge,
        
             

        ]);
        return redirect()->route('admin.service.list');

    }

    public function delete($id){
        $data = Service::find($id);
        if(file_exists(public_path('/uploads/service/'.$data->image))){
            unlink(public_path('/uploads/service/'.$data->image));
        }

        $data->delete();
        return redirect()->back()->with('success','Service Data Deleted Successfully');

    }


}
