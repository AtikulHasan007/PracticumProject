<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function index(){
        $bikes= Bike::paginate(5);
        return view('backend.layout.bike.bikelist',compact('bikes'));

    }

    public function create(){
        return view('backend.layout.bike.create');
    }

    public function store(request $request){

        //validation
        $request->validate([
            'image' => 'required|image',
            'brand' => 'required|min:2|max:10',
            'model' => 'required|min:4|max:15',
            'year' => 'required|min:4|max:4',
            'cc' => 'required|min:2|max:4',
            'type' => 'required|min:2|max:15',
            'engine_no' => 'required|min:2|max:10',
            'date' => 'required',
            'total_service' => 'required|min:1|max:2',

        ]);
        


        $filename= "";
        if($request->hasFile('image')){
            $file = $request->file('image');

            if($file->isValid()){
                $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('bike',$filename);
            }
        }


        Bike::create([
            'image'=>$filename,
            'brand'=> $request->brand,
            'model'=> $request->model,
            'year'=> $request->year,
            'cc'=> $request->cc,
            'type'=> $request->type,
            'engine_no'=> $request->engine_no,
            'date'=> $request->date,
            'total_service'=> $request->total_service,

        ]);
        return redirect()->route('admin.bike.list');

    }

    public function view($id){
        $bikes = Bike::find($id);
        return view('backend.layout.bike.view',compact('bikes'));
    }

    public function edit($id){
        $bikes = Bike::find($id);
        return view('backend.layout.bike.edit',compact('bikes'));
    }

    public function update(Request $request, $id){
        $upadate_bikes = Bike::find($id);
        //if(! $upadate_bikes ) return redirect()->back();

       //validation
       $request->validate([
        
        'brand' => 'required|min:2|max:10',
        'model' => 'required|min:4|max:15',
        'year' => 'required|min:4|max:4',
        'cc' => 'required|min:2|max:4',
        'type' => 'required|min:2|max:15',
        'engine_no' => 'required|min:2|max:10',
        'date' => 'required',
        'total_service' => 'required|min:1|max:2',

    ]);

    if($request->hasFile('image')){
        $file = $request->file('image');

        if($file->isValid()){
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('bike',$filename);
        }
        if (file_exists(public_path('/uploads/bike/'.$upadate_bikes->image))) {
            unlink(public_path('/uploads/bike/'.$upadate_bikes->image));
        }
    }else{
        $filename=$upadate_bikes->image;
    }


    $upadate_bikes->update([
            'image' =>  $filename,
            'brand'=> $request->brand,
            'model'=> $request->model,
            'year'=> $request->year,
            'cc'=> $request->cc,
            'type'=> $request->type,
            'engine_no'=> $request->engine_no,
            'date'=> $request->date,

    ]);
    return redirect()->route('admin.bike.list')->with('success','data updated');



    }

    public function delete($id){
        $bikes = Bike::find($id);
        if(file_exists(public_path('/uploads/bike/'.$bikes->image))){
            unlink(public_path('/uploads/bike/'.$bikes->image));
        }

        $bikes->delete();
        return redirect()->back()->with('success','Bikes Data Deleted Successfully');

    }
}
