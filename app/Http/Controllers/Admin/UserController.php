<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginForm(){
        return view('backend.auth.login');
    }

    public function doLogin(Request $request){

        $request->validate([

            'email'=>'required|email',
            'password'=>'required|min:4'

        ]);

        //login Authendication code  after veiw page, first step

        $loginData = $request->only('email','password');

            if(Auth::attempt($loginData)){
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard');
            }else{
                session()->flash('type','danger');
                session()->flash('message','These Credentails do not match');
                return \redirect()->back();
            }

    }


    //6th step
    public function logout(){
        Auth::logout();


        session()->flash('type','success');
        session()->flash('message','Logout SuccessFull');
        return \redirect()->route('admin.loginForm');
    }
}
