@extends('layouts.frontend.app')
@section('content')

 <!-- Start main div -->
 <div id="main">


    <div class="container">
        <h1>Secure Payment Via PayHere</h1>

        <div class="m-5">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="https://sandbox.payhere.lk/pay/checkout" method="POST" >
        @csrf


        <input type="hidden" name="merchant_id" value="1215318">    <!-- Replace your Merchant ID -->
        <input type="hidden" name="return_url" value="http://bidwin2.vemza.net/paypal/return">
        <input type="hidden" name="cancel_url" value="http://bidwin2.vemza.net/paypal/cancel">
        <input type="hidden" name="notify_url" value="http://bidwin2.vemza.net/paypal/notify">


        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" Value="{{ old('first_name')   }}">
                        @if ($errors->has('first_name'))
                            <div class="alert alert-danger">
                                {{ $errors->first('first_name') }}
                            </div>
                        @endif
                    </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name"  Value="{{ old('last_name') }}" placeholder="Enter last name.." >
                        @if ($errors->has('last_name'))
                            <div class="alert alert-danger">
                                {{ $errors->first('last_name') }}
                            </div>
                        @endif
                    </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" Value="{{ old('email')   }}">
                        @if ($errors->has('email'))
                            <div class="alert alert-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone"  Value="{{ old('phone') }}" placeholder="Enter last name.." >
                        @if ($errors->has('phone'))
                            <div class="alert alert-danger">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="city" Value="{{ old('city')   }}">
                        @if ($errors->has('city'))
                            <div class="alert alert-danger">
                                {{ $errors->first('city') }}
                            </div>
                        @endif
                    </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Address</label>
                        <textarea type="text" class="form-control" name="address"  placeholder="Enter last name.." >{{ old('address') }}</textarea>
                        @if ($errors->has('address'))
                            <div class="alert alert-danger">
                                {{ $errors->first('address') }}
                            </div>
                        @endif
                    </div>
                    </div>
                </div>
            </div>
        </div>





        <input type="hidden" name="order_id" value="{{ $data['oder_id']}}">
        <input type="hidden" name="items" value="{{ $data['package_name']}}"><br>
        <input type="hidden" name="currency" value="LKR">
        <input type="hidden" name="amount" value="{{ $data['lk_price']}}">
        <input type="hidden" name="custom_1" value="{{ $data['user_id']}}">
        <input type="hidden" name="custom_2" value="{{ $data['package_id']}}">


    <input type="hidden" name="country" value="Sri Lanka"><br><br>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Pay</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>





     </div>



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

<!-- Dashboard JS -->
<script src="{{asset('assets/frontend/assets/js/dashboard.js')}}"></script>



@endsection
