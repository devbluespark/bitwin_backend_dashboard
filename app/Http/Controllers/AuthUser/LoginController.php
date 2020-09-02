<?php

namespace App\Http\Controllers\AuthUser;

use App\Bid_User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller{


	use AuthenticatesUsers;
    protected $redirectTo = '/';
   
    public function __construct(){
        $this->middleware('guest:biduser')->except('logout');
    }

    public function showLoginForm(){

    
        
        if (auth()->guard('biduser')->user()) return redirect()->route('profile.index');
        return view('user-auth.login');

        
    }

    public function login(Request $request){

        
        
       $request->validate([
            'email' => 'required|string|email|max:25',
            'password' => 'required|string|min:6|max:30'
        ]);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

         // Load user from database
         $bid_user = Bid_User::where($this->username(), $request->{$this->username()})->first();

         
        
        if($bid_user){
            if($bid_user->user_active && $bid_user->verified){

                if ($this->attemptLogin($request)) {
                    return redirect()->route('profile.index');
                     
                }else{
                    $errors = [$this->username() => trans('auth.failed')];
                }

            }elseif(!$bid_user->verified){
                $errors = [$this->username() => trans('auth.notverify')];
            }elseif(!$bid_user->user_active){
                $errors = [$this->username() => trans('auth.notactivated')];
            }



         }else{
            $errors = [$this->username() => trans('auth.failed')];
         }

        $this->incrementLoginAttempts($request);

        

       return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);  
    }

   
    protected function guard(){
        return Auth::guard('biduser');
    }

    public function logout(Request $request) {
        $this->guard('biduser')->logout();
        $request->session()->invalidate();
        return redirect('/login');
 
       }
   


}