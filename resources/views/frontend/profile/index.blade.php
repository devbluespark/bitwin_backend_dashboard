@extends('layouts.frontend.app')
@section('content')


    <!-- Start main div -->
    <div id="main">
        <a class="btn" id="sideNavToggleBtn" onclick="navToggle()"><i class="fa fa-bars"></i></a>

        <!-- Start main div content -->
        <div class="content">

            <div class="row m-0">
                <h3 class="mt-4 page-title">Profile</h3>
            </div>

            <div class="row m-0 pl-5 pr-5 pt-5">
                <div class="col-md-2 p-2 profile-userImg">
                    <img class="rounded-circle" src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" alt="Image" style="width: 100%;">
                </div>

                <div id="userDetailsCol" class="col-md-9 pl-4">
                    <div>
                        <h5 style="font-weight: 700;">John Doe</h5>
                        <p class="mb-0" style="font-weight: 600;">+94771236218</p>
                        <p class="mb-0" style="font-weight: 600;">john@gmail.com</p>
                    </div>
                </div>
            </div>

            <form class="m-0 p-5 profile-form">
                <div class="form-row">
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="firstNameDiv">
                            <label class="mb-0">First Name</label>
                            <input type="text" class="form-control rounded-0 bs-input" id="firstName">
                        </div>
                    </div>
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="lastNameDiv">
                            <label class="mb-0">Last Name</label>
                            <input type="text" class="form-control rounded-0 bs-input" id="lastName">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="mobileNumberDiv">
                            <label class="mb-0">Mobile Number</label>
                            <input type="number" class="form-control rounded-0 bs-input" id="mobileNumber">
                        </div>
                    </div>
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="emailDiv">
                            <label class="mb-0">Email</label>
                            <input type="email" class="form-control rounded-0 bs-input" id="email">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="passwordDiv">
                            <label class="mb-0">Password</label>
                            <input type="password" class="form-control rounded-0 bs-input" id="password">
                        </div>
                    </div>
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="usernameDiv">
                            <label class="mb-0">Username</label>
                            <input type="text" class="form-control rounded-0 bs-input" id="username">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 pr-3">
                        <div class="bs-form-group" id="confirmPasswordDiv">
                            <label class="mb-0">Confirm Password</label>
                            <input type="password" class="form-control rounded-0 bs-input" id="confirmPassword">
                        </div>
                    </div>

                    <div class="form-group col-md-6 pr-3">
                        <button type="button" class="btn btn-primary rounded-0 btn-block" style="height: 64px;">Update
                            Profile</button>
                    </div>
                </div>
            </form>


        </div>
        <!-- End main div content -->

        <!-- Start - Footer -->
        <footer class="p-5 dashboard-footer">
            <div class="row m-0">
                <div class="col p-0">
                    <hr>
                    <p class="dashboard-footer-p">Designed & Developed By <a href="#">Bluespark</a> 2020</p>
                </div>
            </div>
        </footer>
        <!-- End - Footer -->

    </div>
    <!-- End main div -->



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

  
    <!-- Side Nav JS -->
    <script src="{{asset('assets/frontend/assets/js/side-nav.js')}}"></script>

    <!-- Referel Form js -->
    <script src="{{asset('assets/frontend/assets/js/profile-form-focus.js')}}"></script>
@endsection   