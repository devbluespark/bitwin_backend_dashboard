<?php

namespace App\Http\Controllers\AuthUser;
use App\BidUser;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

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
        $this->middleware('guest:biduser')->except('logout');
    }
    public function showLoginForm()
    {
        
        if (auth()->guard('biduser')->user()) return redirect()->route('profile.index');
        return view('user-auth.login');
    }

    protected function credentials(Request $request){  
        return ['email' => $request->{$this->username()}, 'password' => $request->password, 'user_active' => 1 ];      
     }


    public function login(Request $request) //Go web.php then you will find this route
    {
         $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
           return redirect()->route('profile.index');
        }

        return $this->sendFailedLoginResponse($request);
       
    }

   
    public function guard(){
        return Auth::guard('biduser');
    }

    public function logout(Request $request) {

       $this->guard('admin')->logout();
       $request->session()->invalidate();
       return redirect('/login');

      }



}