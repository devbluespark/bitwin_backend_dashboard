<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
     // echo "ss";
       //dd(Auth::guard('biduser')->user()->user_fname)  ;
        return view('frontend.profile.index');
    }
}