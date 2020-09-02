<?php

namespace App\Http\Controllers\AuthUser;

use App\BidUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;
    

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showResetForm(Request $request, $token = null)
    {
        return view('user-auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    } 


    public function reset(Request $request){
     
        $this->validate($request, $this->rules(), $this->validationErrorMessages());

        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($response)
                    : $this->sendResetFailedResponse($request, $response);

         //Change Password
      //   $user = BidUser::where('email', '=', $request->email)->first();

        // if($user){

        // $user->password = bcrypt($request->password);
        // $user->save();
         //return redirect('user.login')->back()->with("status","Password changed successfully !");
    
   // }else{
     //   return redirect('user.login')->back()->with("status","Password changed successfully !");
    //}
         
         
    }

    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ];
    }

    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    }


    protected function resetPassword($user, $password)
    {
        //$user->password = Hash::make($password);
        $user->password =$password;

        $user->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));

        //$this->guard()->login($user);
    
          return redirect()->route('user.login');
    }

    protected function sendResetFailedResponse(Request $request, $response)
    {
        return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
    }


    protected function sendResetResponse($response)
    {
        return redirect($this->redirectPath())
                            ->with('status', trans($response));
    }


    public function broker()
    {
        return Password::broker('bidusers');
    }



    protected function guard(){
        return Auth::guard('biduser');
    }
}