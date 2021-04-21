<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role == 'user' || Auth::user()->role == 'admin' ){
                return $next($request);
            }else{
                Auth::logout();
                session()->flash('type','danger');
                session()->flash('message','Sorry, You are not Users ');
                return \redirect()->route('motors.loginform');

            }
        }else{
            return redirect()->route('motors.loginform');
        }
    }
}
