<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FreeService;
use Illuminate\Http\Request;

class FreeServiceController extends Controller
{
    public function index(){
        $freeService = FreeService::with('freeUser')->get();
        return view('backend.layout.freebooking.list',compact('freeService'));
    }
    public function updateStatus($id,$status)
    {
        $booking = FreeService::find($id);
        if($status === 'confirmed'){
            $booking->update(['status' => $status]);
        }elseif($status === 'finished'){
            $booking->update(['status' => $status]);
        }else{
            $booking->update(['status' => $status]);
        }

        return redirect()->back();
    }

    public function payupdateStatus($id,$pay_status)
    {
        $paybooking = FreeService::find($id);
        if($pay_status === 'paid'){
            $paybooking->update(['pay_status' => $pay_status]);

        }else{
            $paybooking->update(['pay_status' => $pay_status]);
        }

        return redirect()->back();
    }


}
