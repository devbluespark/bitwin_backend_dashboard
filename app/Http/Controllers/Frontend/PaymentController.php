<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(Request $request){
        $data['country'] = $request->country;
        $data['payment_method'] = $request->payment_method;

        $data['package_id'] = $request->package_id;
        $data['package_name'] = $request->package_name;
        $data['package_price'] = $request->package_price;
        $data['lk_price'] = $request->lk_price;

        $user = Auth::guard('biduser')->user()->id;
        $data['custom_1'] = $user;
        
        if( $data['payment_method'] == "payhere"){
            return view('frontend.payments.payhere.index',compact('data'));
        }


    }
}
