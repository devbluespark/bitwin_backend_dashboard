@extends('auth.layouts.app')

@section('content')




<div class="sufee-login d-flex align-content-center flex-wrap bg-dark">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="images/logo.png" alt="">
                </a>
            </div>
            <div class="login-form">
                <div class="text-center"><h3>Register Form</h3></div>

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                       <div class="form-group">
                            <label>Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                </div>

                                    
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
        
                                    <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="{{ route('login') }}"> Sign in</a></p>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
