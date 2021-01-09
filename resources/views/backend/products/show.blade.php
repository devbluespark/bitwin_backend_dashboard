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
                      <input type="text" name="package_rolls" class="form-control"  value="{{ $product->product_expired_date }}"  disabled>

                    </div>
                  </div>

                  <div class="form-row">

                    <div class="form-group col-md-6">
                        {{-- To check product is expired before Expired date --}}
                      <label for="inputEmail4">Expired</label>
                      <input type="text" class="form-control" value=" @if($product->product_expired === 1) Product Has been Expired @else Not Expired yet @endif " name="package_price" disabled>

                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputPassword4">product Active</label>
                  <input type="text" name="package_rolls" class="form-control"  value="@if($product->product_active === 1 ) Published Product @else Unpublished product @endif "  disabled>

                    </div>
                  </div>

                  <div class="form-row">

                    <div class="form-group col-md-6">

                      <label for="inputEmail4">Product Level</label>
                      <input type="text" class="form-control" value="{{ $product->product_level }}" name="package_price" disabled>

                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputPassword4">product Offers</label>
                  <input type="text" name="package_rolls" class="form-control"  value=" @if($product->product_offer === 1) Offerd Product @else Not Offerd product @endif "  disabled>

                    </div>
                  </div>

                  <div class="form-row">

                    <div class="form-group col-md-6">

                      <label for="inputEmail4">create at</label>
                      <input type="text" class="form-control" value="{{ $product->created_at }}" name="package_price" disabled>

                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputPassword4">updated_at</label>
                  <input type="text" name="package_rolls" class="form-control"  value="{{$product->updated_at }}"  disabled>

                    </div>
                  </div>

                  <div class="form-row">

                    <div class="form-group col-md-6">

                      <label for="inputEmail4">create by </label>
                    <input type="text" class="form-control" value="{{ $user->name }}" name="package_price" disabled>

                    </div>


                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Product Discritions</label>
                         <textarea class="form-control" disabled >{{ $product->product_discription }}</textarea>
                      </div>
                  </div>


                  <div class="form-row">
                    @if(isset($product->product_img_1))
                      <div class="form-group col-md-3">
                          <img src="{{ asset('storage/images/products').'/'.$product->product_img_1 }}" height="250px" width="250px" >
                      </div>
                      @endif

                      @if(isset($product->product_img_2))
                      <div class="form-group col-md-3">
                        <img src="{{ asset('storage/images/products').'/'.$product->product_img_2 }}" height="250px" width="250px" >
                    </div>
                    @endif

                    @if(isset($product->product_img_3))
                    <div class="form-group col-md-3">
                        <img src="{{ asset('storage/images/products').'/'.$product->product_img_3 }}" height="250px" width="250px" >
                    </div>
                    @endif

                    @if(isset($product->product_img_4))
                    <div class="form-group col-md-3">
                        <img src="{{ asset('storage/images/products').'/'.$product->product_img_4 }}" height="250px" width="250px" >
                    </div>
                    @endif

                  </div>



                  <div class="form-row">
                    @if(isset($product->product_img_5))
                    <div class="form-group col-md-3">
                        <img src="{{ asset('storage/images/products').'/'.$product->product_img_5 }}" height="250px" width="250px" >
                    </div>
                    @endif

                </div>



            </form>




              <a href="{{ route('products.index')}}"><button  class="btn btn-primary">Back</button></a>


            </div>
        </div>
    </div>
</div>


    @endsection
