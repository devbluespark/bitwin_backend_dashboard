<?php

namespace App\Http\Controllers\AuthUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
  
    use SendsPasswordResetEmails; 

    public function __construct()
    {
        $this->middleware('guest:biduser');
    }

    protected function guard()
    {
    return Auth::guard('biduser');
    }
    
    public function showLinkRequestForm()
    {
      return view('user-auth.passwords.email');
    }

    public function broker()
    {
        return Password::broker('bidusers');
    }

}