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
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Email </label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
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
                            <div class="checkbox">
                                <label>
                            <input type="checkbox"> Remember Me
                        </label>
                                <label class="pull-right">
                            <a href="{{ route('password.request') }}">Forgotten Password?</a>
                        </label>

                            </div>
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                            
                            <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="{{ route('register')}}"> Sign Up Here</a></p>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>





@endsection
