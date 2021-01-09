@extends('user-auth.layouts.app')
@section('content')


<!-- Start - Register form section -->
<div class="row m-0">
    <div class="col-md-5 p-0" style="background-color: #F7F9FE; height: 100vh;">
        <img src="{{asset('assets/frontend/assets/img/section-1-img.png')}}" alt="Image" class="p-5 register-img">
    </div>

            <!--    Sessions  -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('warning'))
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
            @endif
             <!--   End Sessions  -->

    <div class="col-md-7 mt-5 p-5">
        <div class="row m-0 p-0">
            <div class="col m-0 p-0 text-center">
                <h1>WELCOMEEE TO BID 2 WIN</h1>
                <p style="color: gray;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    doloremque nulla, tempore at
                    quam dolor assumenda porro corrupti quos consequuntur incidunt mollitia laudantium minus nobis
                    veritatis! Rerum eius magni similique!</p>
            </div>
        </div>

        <form class="mt-4"  method="POST" action="{{ route('user.login') }}" >

            {{ csrf_field() }}

            <div class="form-row justify-content-center">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-8 pr-3">
                    <div class="bs-form-group" id="usernameDiv">
                        <label class="mb-0">Email</label>
                        <input type="email" class="form-control rounded-0 bs-input" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong class="text-danger" >{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
            </div>
            <div class="form-row justify-content-center mt-3">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}  col-md-8 pr-3">
                    <div class="bs-form-group" id="passwordDiv">
                        <label class="mb-0">Password</label>
                        <input type="password" class="form-control rounded-0 bs-input" id="password" name="password" required >
                    </div>

                    
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong class="text-danger" >{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                </div>
            </div>
            <div class="form-row justify-content-center mt-3">
                <div class="form-group  col-md-8 pr-3">
                    <button type="submit" class="btn btn-primary rounded-0 btn-lg btn-block">Login</button>
                </div>
            </div>
        </form>
        <div class="row m-0 pr-2 mt-4">
            <div class="col text-center">
            <p>Dont you have an account? <a href="{{ route('user.register')}}">Sign up</a></p>
                <a class="btn btn-link" href="{{ route('user.password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
        </div>
        <hr>
        <div class="row m-0 p-0 mt-5 justify-content-center">
            <div class="col-md-5 m-0">
                <a href="#" style="color: gray;">
                    <div class="row m-0 p-3 shadow">
                        <div style="height: 20px; width: 20px; margin-right: 0.8rem;">
                            <img src="{{asset('assets/frontend/assets/img/google-icon.png')}}" alt="Image" class="w-100">
                        </div>
                        <div style="background-color: rgba(128, 128, 128, 0.4); width: 1px; margin-right: 0.8rem;">
                        </div>
                        <p class="mb-1">Sign in with google</p>
                    </div>
                </a>
            </div>
            <div class="col-md-5 m-0">
                <a href="#" style="color: gray;">
                    <div class="row m-0 p-3 shadow">
                        <div style="height: 20px; width: 20px; margin-right: 0.8rem;">
                            <img src="{{asset('assets/frontend/assets/img/facebook-icon-sq.png')}}" alt="Image" class="w-100">
                        </div>
                        <div style="background-color: rgba(128, 128, 128, 0.4); width: 1px; margin-right: 0.8rem;">
                        </div>
                        <p class="mb-1">Sign in with facebook</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End - Register form section -->

 <!-- Login Form js -->
 <script src="{{asset('assets/frontend/assets/js/login-form-focus.js')}}"></script>





@endsection
