<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function index(Request $request){
        $data['country'] = $request->country;
        $data['payment_method'] = $request->payment_method;

         $user = Auth::guard('biduser')->user()->id;
        $data['user_id'] = $user;
        $data['package_id'] = $request->package_id;


        $data['oder_id'] =  Str::random(5).$user;

        $data['package_name'] = $request->package_name;
        $data['package_price'] = $request->package_price;
        $data['lk_price'] = $request->lk_price;



        if( $data['payment_method'] == "payhere"){
            return view('frontend.payments.payhere.index',compact('data'));
        }


    }
}
