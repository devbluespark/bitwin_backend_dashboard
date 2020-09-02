<?php

namespace App\Http\Controllers\Frontend;

use App\Bid_User;
use App\BidUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

class ReferralController extends Controller
{
    //return to referrels view o dashboard
    public function index(){


    $referel_count= DB::table('referrals')->where('parent_user_id',Auth::guard('biduser')->user()->id)->count();
    // $bid_user= Bid_User::find((Auth::guard('biduser')->user()->id));
    //    echo $refferalUrl=url('reg',$bid_user->token);
    return view('frontend/referels/index',compact('referel_count')) ;   


        
    }


    public function showRegisterForm($token){
        $bid_user=Bid_User::where('token', $token)->firstOrFail();
        $parent_id= $bid_user->id;
        return view('user-auth.register',compact('parent_id'));
    }


}