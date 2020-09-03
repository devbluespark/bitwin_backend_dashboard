@extends('layouts.frontend.app-f')
@section('content')

   
    <!-- Start - Register form section -->
    <div class="row m-0">
        <!-- <div class="col-md-5 p-0 register-form-img-col"> -->
        <div class="col-md-5 p-0 login-register-img-col">
            <img src="{{asset('assets/frontend/assets/img/section-1-img.png')}}" alt="Image" class="p-5 register-img">
        </div>

        <!-- <div class="col-md-7 mt-5 p-5 register-form-col"> -->
        <div class="col-md-7 mt-5 p-5 login-register-form-col">
            <div class="row m-0 p-0">
                <div class="col m-0 p-0 text-center">
                    <h1>WELCOME TO BID 2 WIN</h1>
                    <p style="color: gray;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                        doloremque nulla, tempore at
                        quam dolor assumenda porro corrupti quos consequuntur incidunt mollitia laudantium minus nobis
                        veritatis! Rerum eius magni similique!</p>
                </div>
            </div>

            <form class="mt-4">
                <div class="form-row">
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="firstNameDiv">
                            <label class="mb-0">First Name</label>
                            <input type="text" class="form-control rounded-0 bs-input" id="firstName">
                        </div>
                        <span class="text-danger"><small style="font-weight: 700;">Error Message</small></span>
                    </div>
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="mobileNumberDiv">
                            <label class="mb-0">Mobile Number</label>
                            <input type="number" class="form-control rounded-0 bs-input" id="mobileNumber">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="usernameDiv">
                            <label class="mb-0">Username</label>
                            <input type="text" class="form-control rounded-0 bs-input" id="username">
                        </div>
                    </div>
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="passwordDiv">
                            <label class="mb-0">Password</label>
                            <input type="password" class="form-control rounded-0 bs-input" id="password">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="emailDiv">
                            <label class="mb-0">Email</label>
                            <input type="email" class="form-control rounded-0 bs-input" id="email">
                        </div>
                    </div>
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="confirmPasswordDiv">
                            <label class="mb-0">Confirm Password</label>
                            <input type="password" class="form-control rounded-0 bs-input" id="confirmPassword">
                        </div>
                    </div>
                </div>
            </form>

            <div class="row m-0 pr-2 mt-5">
                <div class="col text-center">
                    <button type="button" class="btn btn-primary rounded-0 btn-lg bs-btn-register" data-toggle="modal"
                        data-target="#verifyEmailModal">REGISTER</button>
                </div>
            </div>
            <div class="row m-0 pr-2 mt-4">
                <div class="col text-center">
                    <a href="#" style="color: gray;">Back to login</a>
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
                            <p style="color: gray;">Your account creation almost finished. We sent email to <a
                                    style="color: black;">john@gmail.com</a></p>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

<script src="{{asset('assets/frontend/assets/js/template.js')}}"></script>

 <!-- Register Form js -->
   <script src="{{asset('assets/frontend/assets/js/register-form-focus.js')}}"></script>
@endsection