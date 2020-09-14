@extends('layouts.backend.app')

@section('content')

<div class="col-12">

<h1>Product Details</h1><br><br>
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">



          
            <form class="form-horizontal" >

              <div class="form-row" >

                <div class="form-group col-md-6">
                  <label for="inputEmail4">Product Name</label>
                  <input type="text" class="form-control"   value="{{ $product->id.'.  '.$product->product_name}}" disabled>
                  
              </div>
                
                
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Product Price</label>
                  <input type="text" class="form-control"   value="{{ $product->product_price}}" disabled>
                </div>
                

              </div>
              <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Bid Min Value</label>
                    <input type="number" class="form-control" value="{{ $product->product_bid_min_value}}" name="package_price" disabled>
    
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Bid Max Value</label>
                    <input type="number" name="package_rolls" class="form-control"  value="{{ $product->product_bid_max_value}}"  disabled>
                  
                  </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                      <label for="inputEmail4">How many Bids</label>
                      <input type="number" class="form-control" value="{{ $product->product_bid_rolls}}" name="package_price" disabled>
      
                    </div>
  
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Expired Date</label>
                      <input type="number" name="package_rolls" class="form-control"  value="{{ $product->product_expired_date }}"  disabled>
                    
                    </div>
                  </div>

                  <div class="form-row">

                    <div class="form-group col-md-6">
                        {{-- To check product is expired before Expired date --}}
                      <label for="inputEmail4">Expired</label>
                      <input type="number" class="form-control" value="{{ $product->product_expired}}" name="package_price" disabled>
      
                    </div>
  
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">product Active</label>
                  <input type="number" name="package_rolls" class="form-control"  value="{{$product->product_active}}"  disabled>
                    
                    </div>
                  </div>

                  <div class="form-row">

                    <div class="form-group col-md-6">
                       
                      <label for="inputEmail4">Product Level</label>
                      <input type="number" class="form-control" value="{{ $product->product_level}}" name="package_price" disabled>
      
                    </div>
  
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">product Offers</label>
                  <input type="number" name="package_rolls" class="form-control"  value="{{$product->product_offer}}"  disabled>
                    
                    </div>
                  </div>

                  <div class="form-row">

                    <div class="form-group col-md-6">
                       
                      <label for="inputEmail4">create at</label>
                      <input type="number" class="form-control" value="{{ $product->created_at }}" name="package_price" disabled>
      
                    </div>
  
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">updated_at</label>
                  <input type="number" name="package_rolls" class="form-control"  value="{{$product->updated_at }}"  disabled>
                    
                    </div>
                  </div>

                  <div class="form-row">

                    <div class="form-group col-md-6">
                       
                      <label for="inputEmail4">create by </label>
                      <input type="number" class="form-control" value="{{ $product->user }}" name="package_price" disabled>
      
                    </div>
  
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">product offers</label>
                      <input type="number" name="package_rolls" class="form-control"  value="{{$product->product_offer}}"  disabled>
                      
                    </div>
                  </div>


                  <div class="form-row">

                    <div class="form-group col-md-6">
                       
                      <label for="inputEmail4">Product Discritions</label>
                      <textarea class="form-control" disabled ></textarea>
      
                    </div>
  
                  </div>


            </form>


                

              <a href="{{ route('packages.index')}}"><button  class="btn btn-primary">Back</button></a>


            </div>
        </div>
    </div>
</div>


    @endsection