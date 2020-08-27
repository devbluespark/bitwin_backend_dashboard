<?php

namespace App\Http\Controllers\AuthUser;

use App\BidUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class RegisterController extends Controller
{
    
    public function register()
  {

    if (auth()->guard('biduser')->user()) return redirect()->route('profile.index');
    return view('user-auth.register');
   // return view('user-auth.register');
  }

  public function store(Request $request)
  {
      $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:bid_users',
          'password' => 'required|string|min:8|confirmed',
          'password_confirmation' => 'required',
      ]);

      
        BidUser::create([
            'user_fname' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
         
        return redirect()->route('profile.index');

  }




}