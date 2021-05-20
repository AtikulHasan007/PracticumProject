<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function ShowRegisterFrom(){
        return view('frontend.auth.registrationForm');
    }

    public function Registration(Request $request){
        $request->validate([
            'image' => 'required|image',
            'name' => 'required',
            'email' => 'required|unique:users',
            'contact' => 'required',
            'address' => 'required',
            'password' => 'required|confirmed',
            'nid' => 'required',

        ]);


        $filename= "";
        if($request->hasFile('image')){
            $file = $request->file('image');

            if($file->isValid()){
                $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('users',$filename);
            }
        }

        User::create([
            'image'=> $filename,
            'name'=> $request->name,
            'email'=> $request->email,
            'contact'=> $request->contact,
            'address'=> $request->address,
            'nid'=> $request->nid,
            'password'=> bcrypt($request->password),
        ]);

        return redirect()->back()->with('success','Registration Successfull');


    }





    public function loginFrom(){
        return view('frontend.auth.loginForm');
    }

    public function login(Request $request){
        $request->validate([

            'email' => 'required',
            'password' => 'required',


        ]);

        $loginData = $request->only('email','password');

        if(Auth::attempt($loginData)){
            $request->session()->regenerate();
            return redirect()->intended(route('motors.home'));
        }else{
            session()->flash('type','danger');
            session()->flash('message','These Credentails do not match');
            return \redirect()->back();
        }

    }

    public function logout(){
        Auth::logout();


        session()->flash('type','success');
        session()->flash('message','Logout SuccessFull');
        return \redirect()->route('motors.loginform');
    }

}
