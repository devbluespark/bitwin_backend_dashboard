@extends('auth.layouts.app')

@section('content')
<div class="container">
    
    
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    
                </div>
                <div class="login-form">
                    <div class="text-center"><h2>Login Form</h2></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Email address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            
                        </div>

                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Send Password Reset Link</button>

                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
