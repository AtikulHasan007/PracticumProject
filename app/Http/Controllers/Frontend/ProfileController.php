<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use App\Rules\UpdatePasword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class ProfileController extends Controller
{
   public function profile(){
       return view('frontend.layout.profile.index');
   }

   public function editProfile($id){
       $userEdit = User::find(auth()->user()->id);
    return view('frontend.layout.profile.edit',compact('userEdit'));
}
public function updateProfile(Request $request, $id){
    $userUpdate = User::find(auth()->user()->id);


    $request->validate([
        'name' =>'required',
        'contact' => 'required',
        'address' => 'required',

    ]);

    if($request->hasFile('image')){
        $file = $request->file('image');

        if($file->isValid()){
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('users',$filename);
        }
        if (file_exists(public_path('/uploads/users/'.$userUpdate->image))) {
            unlink(public_path('/uploads/users/'.$userUpdate->image));
        }
    }else{
        $filename=$userUpdate->image;
    }


    $userUpdate->update([
        'name' => $request->name,
        'contact' => $request->contact,
        'address' => $request->address,
        'image' => $filename

    ]);
    return redirect()->route('motors.user.profile')->with('success','Your Profile Updated');

}

public function bookingRecord(){
    $bookingRecord = Booking::with('bookingUser')->where('user_id', auth()->user()->id)->orderBy('id','desc')->get();

    return view('frontend.layout.profile.bookingRecord',compact('bookingRecord'));


}

public function passwordShowForm(){
    return view('frontend.layout.profile.changePassword');
}
public function updatePassword(Request $request){
    $request->validate(([
        'old_password' => ['required', new UpdatePasword()],
        'password' => 'required|confirmed'

    ]));

    try{
        auth()->user()->update([
            'password' => bcrypt($request->password),

        ]);
        Auth::logout();
        session()->flash('type','success');
        session()->flash('message','Your password updated successfully');

        return redirect()->route('motors.loginform');
    }catch(Throwable $e){
        return redirect()->back();

    }

}

}
