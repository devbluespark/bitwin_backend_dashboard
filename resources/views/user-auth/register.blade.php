@extends('user-auth.layouts.app')
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


            <!-- if registration using referrals -->
            @if (isset($parent_id))
                            <input type="hidden" name="parent_id" value="{{ $parent_id }}" >
            @endif
            <!-- End registration using referrals -->


            <input type="hidden" name="timezone" id="timezone">

            <div class="form-row">
                <div class="form-group{{ $errors->has('user_fname') ? ' has-error' : '' }} col-md-6 pr-3">
                    <div class="bs-form-group" id="fullNameDiv">
                        <label class="mb-0">First Name</label>
                        <input type="text" class="form-control rounded-0 bs-input" id="user_fname" name="user_fname" value="{{ old('user_fname') }}" required autofocus>
                    </div>
                    @if ($errors->has('user_fname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('user_fname') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('user_phn1') ? ' has-error' : '' }} col-md-6 pr-3">
                    <div class="bs-form-group" id="mobileNumberDiv">
                        <label class="mb-0">Mobile Number</label>
                        <input type="number" class="form-control rounded-0 bs-input" id="user_phn1"  name="user_phn1" value="{{ old('user_phn1') }}" required>
                    </div>
                    @if ($errors->has('user_phn1'))
                        <span class="help-block">
                            <strong>{{ $errors->first('user_phn1') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} col-md-6 pr-3">
                    <div class="bs-form-group" id="usernameDiv">
                        <label class="mb-0">Username</label>
                        <input type="text" class="form-control rounded-0 bs-input" id="username"  name="username" value="{{ old('username') }}" required >
                    </div>
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6 pr-3">
                    <div class="bs-form-group" id="emailDiv">
                        <label class="mb-0">Email</label>
                        <input type="email" class="form-control rounded-0 bs-input" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                
            </div>
            <div class="form-row">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6 pr-3">
                    <div class="bs-form-group" id="passwordDiv">
                        <label class="mb-0">Password</label>
                        <input type="password" class="form-control rounded-0 bs-input" id="password"  name="password" required>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group col-md-6 pr-3">
                    <div class="bs-form-group" id="confirmPasswordDiv">
                        <label class="mb-0">Confirm Password</label>
                        <input type="password" class="form-control rounded-0 bs-input"  id="password-confirm"   name="password_confirmation" required>
                    </div>
                </div>
            </div>

            <div class="row m-0 pr-2 mt-5">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary rounded-0 btn-lg bs-btn-register" data-toggle="modal"
                        data-target="#verifyEmailModal">REGISTER</button>
                </div>
            </div>
        </form>

       
        <div class="row m-0 pr-2 mt-4">
            <div class="col text-center">
            <a href="{{ route('user.login')}}" style="color: gray;">Back to login</a>
            </div>
        </div>
    </div>
</div>
<!-- End - Register form section -->

<!-- Start - Verify email modal  -->
<div class="modal fade" id="verifyEmailModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="verifyEmailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 15px;">
            <div class="modal-body pt-1">
                <div class="row m-0">
                    <div class="col p-0 text-right">
                        <a type="button" class="btn p-0" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col p-4 text-center">
                        <img src="{{asset('assets/frontend/assets/img/test-modal-img.png')}}" alt="Image" style="width: 40%;">
                        <h3 class="mb-4">CONGRATULATIONS.!</h3>
                        <p style="color: gray;">Your account creation almost finished. We sent email to <a style="color: black;">john@gmail.com</a></p>
                        <p style="color: gray;">Still can't find email?</p>
                        <button type="button" class="btn btn-primary rounded-0 btn-block mt-4 mb-4">Re-Send</button>
                        <p style="color: gray;">Need help? <a href="#">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End - Verify email modal  -->

 <!-- Register Form js -->
   <script src="{{asset('assets/frontend/assets/js/register-form-focus.js')}}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
    <script>
        $( document ).ready(function() {
            $('#timezone').val(moment.tz.guess())
        });        
    </script>

@endsection
