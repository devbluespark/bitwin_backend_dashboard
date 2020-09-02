<?php

namespace App\Http\Controllers\Frontend;

use App\Bid_User;
use App\BidUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReferralController extends Controller
{
    public function index(){
        $bid_user= Bid_User::find((Auth::guard('biduser')->user()->id));
       echo $refferalUrl=url('reg',$bid_user->token);

        
    }


    public function showRegisterForm($token){
        $bid_user=Bid_User::where('token', $token)->firstOrFail();
        $parent_id= $bid_user->id;
        return view('user-auth.register',compact('parent_id'));
    }


}