<?php

namespace App\Http\Controllers\AuthUser;
use App\BidUser;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function getBidUserLoginForm()
    {
        
        if (auth()->guard('biduser')->user()) return redirect()->route('profile.index');
        return view('user-auth.login');
    }

    public function bidUserLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->guard('biduser')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
           // echo "login okk";
            return redirect()->route('profile.index');
        }else{
            dd('your username and password are wrong.');
        }
    }


    public function logout(Request $request) {

        Auth::logout();
        $request->session()->flush();
        return redirect('login');

      }



}