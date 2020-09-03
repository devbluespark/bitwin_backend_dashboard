@extends('layouts.frontend.app-f')
@section('content')


    <!-- Start - Login form section -->
    <div class="row m-0">
        <div class="col-md-5 p-0 login-register-img-col">
            <img src="assets/img/section-1-img.png" alt="Image" class="p-5 register-img">
        </div>

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
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-8 pr-3">
                        <div class="bs-form-group" id="usernameDiv">
                            <label class="mb-0">username</label>
                            <input type="text" class="form-control rounded-0 bs-input" id="username">
                        </div>
                        <span class="text-danger"><small style="font-weight: 700;">Error Message</small></span>
                    </div>
                </div>
                <div class="form-row justify-content-center mt-3">
                    <div class="form-group  col-md-8 pr-3">
                        <div class="bs-form-group" id="passwordDiv">
                            <label class="mb-0">Password</label>
                            <input type="password" class="form-control rounded-0 bs-input" id="password">
                        </div>
                        <span class="text-danger"><small style="font-weight: 700;">Error Message</small></span>
                    </div>
                </div>
                <div class="form-row justify-content-center mt-0">
                    <div class="form-group col-md-8 pr-3 mt-0 text-right">
                        <a class="btn" data-toggle="modal" data-target="#passwordForgotModal">Forgotten Password?</a>
                    </div>
                </div>
                <div class="form-row justify-content-center mt-0">
                    <div class="form-group  col-md-8 pr-3">
                        <button type="button" class="btn btn-primary rounded-0 btn-lg btn-block">Login</button>
                    </div>
                </div>
            </form>
            <div class="row m-0 pr-2 mt-4">
                <div class="col text-center">
                    <p>Don't you have an account? <a href="#">Sign up</a></p>
                </div>
            </div>
            <hr>
            <div class="row m-0 p-0 mt-5 justify-content-center">
                <div class="col-md-5 m-0 socialMedia-Sign-button">
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
                <div class="col-md-5 m-0 socialMedia-Sign-button">
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
    <!-- End - Login form section -->

    <!-- Start - Password forgot modal  -->
    <div class="modal fade" id="passwordForgotModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="passwordForgotModalLabel" aria-hidden="true">
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
                            <h3 class="mb-4">RESET PASSWORD!</h3>

                            <form>
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-md-12 pr-3 text-left"
                                        style="padding-right: 5px !important;">
                                        <div class="bs-form-group" id="pwResetEmailDiv">
                                            <label class="mb-0">Email</label>
                                            <input type="email" class="form-control rounded-0 bs-input" id="pwResetEmail">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <button type="button" class="btn btn-primary rounded-0 btn-block mt-4 mb-4">Send Password
                                Reset Link</button>
                            <p style="color: gray;">Need help? <a href="#">Contact Us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End - Password forgot modal  -->

<script src="{{asset('assets/frontend/assets/js/template.js')}}"></script>
 <!-- Login Form js -->
 <script src="{{asset('assets/frontend/assets/js/login-form-focus.js')}}"></script>
@endsection