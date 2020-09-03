@extends('layouts.frontend.app-f')

@section('content')

<!-- Start - Register form section -->
<div class="row m-0">
    <div class="col-md-5 p-0" style="background-color: #F7F9FE; height: 100vh;">
        <img src="{{asset('assets/frontend/assets/img/section-1-img.png')}}" alt="Image" class="p-5 register-img">
    </div>


    <div class="col-md-7 mt-5 p-5">
        <div class="row m-0 p-0">
            <div class="col m-0 p-0 text-center">
                <h1>WELCOME TO BIT 2 WIN</h1>
                <p style="color: gray;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    doloremque nulla, tempore at
                    quam dolor assumenda porro corrupti quos consequuntur incidunt mollitia laudantium minus nobis
                    veritatis! Rerum eius magni similique!</p>
            </div>
        </div>



      





           <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

 
    
    @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif


        <form class="mt-4"  method="POST" action="{{ route('user.login') }}">
            {{ csrf_field() }}
            <div class="form-row justify-content-center">
                <div class="col-md-8 pr-3 form-groupform-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                    <div class="bs-form-group" id="usernameDiv">
                        <label class="mb-0">email</label>
                        <input type="email" id="email" name="email" class="form-control rounded-0 bs-input" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-row justify-content-center mt-3">
                <div class="form-group  col-md-8 pr-3">
                    <div class="bs-form-group" id="passwordDiv">
                        <label class="mb-0">Password</label>
                        <input type="password" name="password" id="password" class="form-control rounded-0 bs-input" required>
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
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
        <p>Don't you have an account? <a href="{{ route('user.register') }}">Sign up</a></p>
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

@if (session('status'))
<div class="alert alert-warning">
   

   <!--  <script type="text/javascript">
      //   $(document).ready(function() {
           
        //    emailVerifyModel();
            
         //  function emailVerifyModel(){
          //      alert('okk');
         //    }


             
       // });
</script> -->


       <script type="text/javascript" >
       

            loadModel();
           function loadModel(){
                $('#popupmodal').modal('show');
            }
           
      

    </script>
    
    <div id="popupmodal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Notification: Please read</h3>
        </div>
        <div class="modal-body">
            <p>
                ss
            </p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
    
    

</div>
@endif


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


<script type="text/javascript">
  //  $(document).ready(function() {
     //   loadMode();

     //   function loadMode() {
     //       $('#verifyEmailModal').modal('show');
     //   }
       
      
   // });

   // $(document).ready(function($) {
  $("#div").on("click", "a", function(event) {
    event.preventDefault();
    jQuery.noConflict();
    $('#verifyEmailModal').modal('show');

  });


</script>


<!-- Login Form js -->
<script src="{{asset('assets/frontend/assets/js/login-form-focus.js')}}"></script>





@endsection
