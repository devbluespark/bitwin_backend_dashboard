@extends('auth.layouts.app')

@section('content')
<div class="container">
 
    
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    
                </div>
                <div class="login-form">
                    <div class="text-center"><h2>Reset Password</h2></div>

                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <label>Email address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            
                        </div>
                        
                        <div class="form-group">
                            <label>password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            
                        </div>
       
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input id=password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                            
                        </div>
             
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Reset Password</button>


                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
