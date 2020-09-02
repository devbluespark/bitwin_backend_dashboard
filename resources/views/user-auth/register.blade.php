@extends('layouts.frontend.app-f')
@section('content')

   <!-- Start - Register form section -->
   <div class="row m-0">
    <div class="col-md-5 p-0 register-form-img-col">
        <img src="{{asset('assets/frontend/assets/img/section-1-img.png')}}" alt="Image" class="p-5 register-img">
    </div>

    <div class="col-md-7 mt-5 p-5 register-form-col">
        <div class="row m-0 p-0">
            <div class="col m-0 p-0 text-center">
                <h1>WELCOME TO BIT 2 WIN</h1>
                <p style="color: gray;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    doloremque nulla, tempore at
                    quam dolor assumenda porro corrupti quos consequuntur incidunt mollitia laudantium minus nobis
                    veritatis! Rerum eius magni similique!</p>
            </div>
        </div>
                    
   
                        
                        
                    <form class="mt-4" method="POST" action="{{ route('user.register') }}">
                        {{ csrf_field() }}

                        @if (isset($parent_id))
                            <input type="hidden" name="parent_id" value="{{ $parent_id }}" >
                        @endif


                        <div class="form-row">

                            
                        </div>

                        <div class="form-group{{ $errors->has('user_fname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="user_fname" type="text" class="form-control" name="user_fname" value="{{ old('user_fname') }}" required autofocus>

                                @if ($errors->has('user_fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_lname') ? ' has-error' : '' }}">
                            <label for="user_lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="user_lname" type="text" class="form-control" name="user_lname" value="{{ old('user_lname') }}" required autofocus>

                                @if ($errors->has('user_lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_phn1') ? ' has-error' : '' }}">
                            <label for="user_phn1" class="col-md-4 control-label">Phone Number:</label>

                            <div class="col-md-6">
                                <input id="user_phn1" type="number" class="form-control" name="user_phn1" value="{{ old('user_phn1') }}" required>

                                @if ($errors->has('user_phn1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_phn1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
