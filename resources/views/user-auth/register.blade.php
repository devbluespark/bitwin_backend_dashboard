@extends('user-auth.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>


                <div class="panel-body">
                    
                        
                        
                  <!--  @if (isset($user_id))
                    <form class="form-horizontal" method="POST" action="{{ route('user.register', ['user_id' => $user_id]) }}">
                    @else
                    <form class="form-horizontal" method="POST" action="{{ route('user.register') }}">    
                    @endif  -->
                        
                        
                    <form class="form-horizontal" method="POST" action="{{ route('user.register') }}">
                        {{ csrf_field() }}

                        @if (isset($parent_id))
                            <input type="hidden" name="parent_id" value="{{ $parent_id }}" >
                        @endif


                        <input type="hidden" name="timezone" id="timezone">

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



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
<script>
        $( document ).ready(function() {
            $('#timezone').val(moment.tz.guess())
        });        
</script>

@endsection
