@extends('layouts.backend.app')

@section('content')

<div class="container">

<h1>Payments Details </h1><br><br>
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">



          
            <form class="form-horizontal" >

              <div class="form-row" >

                <div class="form-group col-md-6">
                  <label for="inputEmail4">Payment ID</label>
                  <input type="text" class="form-control" id="package_name" name="package_name" value="{{ $payment_gateway['id'] }}" disabled>
                  
              </div>

              <div class="form-group col-md-6">
                <label for="inputEmail4">reciepts code</label>
                <input type="text" class="form-control" id="package_price" value="" name="package_price" disabled>

              </div>

              </div>


              <div class="form-row" >            
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Payment Date</label>
                  <input type="text" class="form-control" id="package_name" name="package_name" value="{{ $payment_gateway['created_at'] }}" disabled>
                </div>
                

                <div class="form-group col-md-6">
                  <label for="inputEmail4">Payment Amount</label>
                  <input type="number" class="form-control" id="package_price" value="{{ $payment_gateway['payment_amount']  }}" name="package_price" disabled>
  
                </div>

              </div>




              <div class="form-row">

                  

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Payment bank</label>
                    <input type="text" name="package_rolls" class="form-control"  value="{{  $payment_gateway['payment_bank'] }}" id="package_rolls" disabled>
                  
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">customer ID</label>
                    <input type="number" class="form-control" id="package_price" value="{{ $payment_gateway->BidUser->id  }}" name="package_price" disabled>
    
                  </div>

                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Customer Name</label>
                      <input type="text" name="create_user" class="form-control"  value="{{ $payment_gateway->BidUser->user_fname }}" id="package_rolls" disabled>
                    
                    </div>

                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">package ID</label>
                    <input type="number" class="form-control" id="package_price" value="{{ $payment_gateway->package->id  }}" name="package_price" disabled>
    
                  </div>

                    <div class="form-group col-md-6">
                      <label for="inputPassword4">package Name</label>
                      <input type="text" name="create_user" class="form-control"  value="{{  $payment_gateway->package->package_name }}" id="package_rolls" disabled>
                    
                    </div>

                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">package price</label>
                    <input type="number" class="form-control" id="package_price" value="{{ $payment_gateway->package->package_price }}" name="package_price" disabled>
    
                  </div>

                    <div class="form-group col-md-6">
                      <label for="inputPassword4">package Bids</label>
                      <input type="text" name="create_user" class="form-control"  value="{{ $payment_gateway->package->package_rolls }}" id="package_rolls" disabled>
                    
                    </div>

                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">reciepts code</label>
                    <input type="number" class="form-control" id="package_price" value="" name="package_price" disabled>
    
                  </div>

                  

                </div>



            </form>


                

              <a href="{{ route('payments-gateways.index')}}"><button  class="btn btn-primary">Back</button></a>


            </div>
        </div>
    </div>
</div>


    @endsection