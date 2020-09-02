<?php

namespace App\Http\Controllers\AuthUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
  
    use SendsPasswordResetEmails; 
    use ResetsPasswords;

    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest:biduser');
    }

    
    
    public function showLinkRequestForm()
    {
      return view('user-auth.passwords.email');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('user-auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    
    

    public function broker()
    {
        return Password::broker('bidusers');
    }

    protected function guard()
    {
    return Auth::guard('biduser');
    }

}