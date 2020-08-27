@extends('layouts.backend.app')
@section('content')

<div >
    <div class="row">
       <div class="col-md-12 col-md-offset-1">
          <div class="panel panel-default">
             <div class="panel-heading">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Product Details</strong>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company"  class=" form-control-label">Product ID</label><input type="text" id="company" value="{{$product->id}}" class="form-control">
                                        </div>
                                            <div class="form-group"><label for="vat" class=" form-control-label">Product Name</label><input type="text" id="vat" value="{{$product->product_name}}" class="form-control">
                                            </div>
                                                <div class="form-group"><label for="street" class=" form-control-label">Product Price</label><input type="text" id="street" value="{{$product->product_price}}" class="form-control">
                                                </div>
                                                    <div class="row form-group">
                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <label for="city" class=" form-control-label">Bid Min Value</label><input type="text" id="city" value="{{$product->product_bid_min_value}}" class="form-control">
                                                            </div>
                                                         </div>
                                                            <div class="col-8">
                                                                <div class="form-group">
                                                                    <label for="postal-code" class=" form-control-label">Bid Max Value</label><input type="text" id="postal-code" value="{{$product->product_bid_max_value}}" class="form-control">
                                                                 </div>
                                                            </div>
                                                        </div>
                                                            <div class="form-group">
                                                                <label for="country" class=" form-control-label">Expire Status</label><input type="text" id="country" 
                                                                value="@if ($product['product_expired'] === 1)Active
                                                                    @else Deactivated
                                                                  @endif"
                                                                   class="form-control">
                                                            </div>
                                                       
                                                        <div class="form-group">
                                                            <label for="country" class=" form-control-label">Product Status</label><input type="text" id="country" 
                                                            value="@if ($product['product_active'] === 1)Active
                                                                   @else Deactivated
                                                                 @endif"
                                                         class="form-control">
                                                        </div>
                                                        <div class="row">
                                                            <div class="text-center col-2">
                                                                @if ($product['product_img_1'] != "noimage.jpg") 
                                                                <img src="/storage/images/{{$product->product_img_1}}" class="rounded" alt="...">
                                                                @endif
                                                              </div>
                                                              <div class="text-center col-2">
                                                                @if ($product['product_img_2'] != "noimage.jpg")
                                                                <img src="/storage/images/{{$product->product_img_2}}" class="rounded" alt="...">
                                                                @endif
                                                              </div>
                                                              <div class="text-center col-2">
                                                                @if ($product['product_img_3'] != "noimage.jpg")
                                                                <img src="/storage/images/{{$product->product_img_3}}" class="rounded" alt="...">
                                                                @endif
                                                              </div>
                                                              <div class="text-center col-2">
                                                                @if ($product['product_img_4'] != "noimage.jpg")
                                                                <img src="/storage/images/{{$product->product_img_4}}" class="rounded" alt="...">
                                                                @endif
                                                              </div>
                                                              <div class="text-center col-2">
                                                                @if ($product['product_img_5'] != "noimage.jpg")
                                                                <img src="/storage/images/{{$product->product_img_5}}" class="rounded" alt="...">
                                                                @endif
                                                              </div>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>       
                                           
                       </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
            </div>
        </div>
    </div>
</div>

@endsection