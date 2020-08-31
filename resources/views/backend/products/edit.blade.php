@extends('layouts.backend.app')
@section('content')

<div class="container col-12" >
    <div class="row">
       <div class="col-md-12 col-md-offset-1">
          <div class="panel panel-default">
             <div class="panel-heading">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Products Edit</strong>
                            </div>
                            @if (session('suc'))
                              <div class='alert alert-primary text-center'>
                                  {{session('suc')}}
                              </div>
                              @elseif (session('er'))
                              <div class='alert alert-danger text-center'>
                                  {{session('er')}}
                              </div>
                               @endif
                            <div class="card-body">
                                <form action="{{ route("products.update",[ "product" => $product['id']])}}" method="POST" enctype='multipart/form-data'>
                                  {{ csrf_field() }} {{ method_field('PUT') }}
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="product_name">Product Name</label>
                                      <input type="text" class="form-control" value="{{$product->product_name}}" required name="product_name" placeholder="">
                                      @if ($errors->has('product_name'))
                                        <span class="help-block">
                                          <div class='alert alert-danger text-center'>
                                            {{ $errors->first('product_name') }}
                                          </div>
                                        </span>
                                      @endif
                                    </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Product Price</label>
                                        <input type="text" class="form-control"required name="product_price" value="{{$product->product_price}}" id="inputPassword4" placeholder="">
                                        @if ($errors->has('product_name'))
                                        <span class="help-block">
                                          <div class='alert alert-danger text-center'>
                                            {{ $errors->first('product_price') }}
                                          </div>
                                        </span>
                                      @endif
                                      </div>
                                    </div>
                                    <div class="row">
                                    <div class="form-group col">
                                      <label for="inputAddress">Product Bit Value</label>
                                      <input type="text" class="form-control"required name="product_bid_rolls"value="{{$product->product_bid_rolls}}" id="inputAddress" placeholder="">
                                      @if ($errors->has('product_name'))
                                      <span class="help-block">
                                        <div class='alert alert-danger text-center'>
                                          {{ $errors->first('product_bid_rolls') }}
                                        </div>
                                      </span>
                                    @endif
                                    </div>
                                    <div class="form-group col">
                                      <label for="inputAddress2">Product Bid Min Value</label>
                                      <input type="text" class="form-control"required name="product_bid_min_value"value="{{$product->product_bid_min_value}}" id="inputAddress2" placeholder="">
                                      @if ($errors->has('product_name'))
                                      <span class="help-block">
                                        <div class='alert alert-danger text-center'>
                                          {{ $errors->first('product_bid_min_value') }}
                                        </div>
                                      </span>
                                    @endif
                                    </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">Product Bid Max Value</label>
                                        <input type="text" class="form-control"required name="product_bid_max_value"value="{{$product->product_bid_max_value}}" id="inputCity">
                                        @if ($errors->has('product_name'))
                                        <span class="help-block">
                                          <div class='alert alert-danger text-center'>
                                            {{ $errors->first('product_bid_max_value') }}
                                          </div>
                                        </span>
                                      @endif
                                      </div>                                                             
                                    </div>
                                    <div class="wrapper_">                                      
                                      <div class="box">   
                                        @if ($product['product_img_1'] != "noimage.jpg") 
                                        <a class="mr-2" href="/delete_product_image" > <button class="btn btn-danger"> <i class="fa fa fa-trash mx-1""></i></button></a> 
                                        @endif                                  
                                        <div class="card-body">
                                          <div class="  mb-3">
                                            @if ($product['product_img_1'] != "noimage.jpg") 
                                              <img class="rounded-circle "  src="/storage/images/{{$product->product_img_1}}" width="150px" alt="Card image cap">
                                              @else
                                              <img class="rounded-circle " src="{{asset('assets/backend/images/admin.jpg')}}" width="150px" alt="Card image cap">
                                            @endif
                                            </div>
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_1" accept="image/*" />
                                          </label>  
                                        </div>                                                         
                                      </div>
                                  <div class="row">
                                      <div class="box col-3">
                                        @if ($product['product_img_2'] != "noimage.jpg") 
                                        <a class="mr-2" href="/delete_product_image" > <button class="btn btn-danger"> <i class="fa fa fa-trash mx-1""></i></button></a> 
                                        @endif
                                        <div class="card-body">
                                          <div class="  mb-3">
                                            @if ($product['product_img_2'] != "noimage.jpg") 
                                            <img class="rounded-circle " src="/storage/images/{{$product->product_img_2}}" width="150px" alt="Card image cap">
                                            @else
                                            <img class="rounded-circle " src="{{asset('assets/backend/images/admin.jpg')}}" width="150px" alt="Card image cap">
                                            @endif

                                          </div>
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_2"  accept="image/*" />
                                          </label>
                                        </div>
                                      </div>
                                      <div class="box col-3">
                                        @if ($product['product_img_3'] != "noimage.jpg") 
                                        <a class="mr-2" href="/delete_product_image" > <button class="btn btn-danger"> <i class="fa fa fa-trash mx-1""></i></button></a> 
                                        @endif
                                        <div class="card-body">
                                          <div class="  mb-3">
                                            @if ($product['product_img_3'] != "noimage.jpg") 
                                              <img class="rounded-circle " src="/storage/images/{{$product->product_img_3}}" width="150px" alt="Card image cap">
                                              @else
                                              <img class="rounded-circle " src="{{asset('assets/backend/images/admin.jpg')}}" width="150px" alt="Card image cap">
                                              @endif

                                          </div>
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_3" accept="image/*" />
                                          </label>
                                        </div>
                                      </div>
                                      <div class="box col-3">
                                        @if ($product['product_img_4'] != "noimage.jpg") 
                                        <a class="mr-2" href="/delete_product_image" > <button class="btn btn-danger"> <i class="fa fa fa-trash mx-1""></i></button></a> 
                                        @endif
                                        <div class="card-body">
                                          <div class="  mb-3">
                                            @if ($product['product_img_4'] != "noimage.jpg") 
                                              <img class="rounded-circle " src="/storage/images/{{$product->product_img_4}}" width="150px" alt="Card image cap">
                                              @else
                                              <img class="rounded-circle " src="{{asset('assets/backend/images/admin.jpg')}}" width="150px" alt="Card image cap">
                                              @endif

                                          </div>
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_4" accept="image/*" />
                                          </label>
                                        </div>
                                      </div>           
                                      <div class="box col-3">
                                        @if ($product['product_img_5'] != "noimage.jpg") 
                                        <a class="mr-2" href="/delete_product_image" > <button class="btn btn-danger"> <i class="fa fa fa-trash mx-1""></i></button></a> 
                                        @endif
                                        <div class="card-body">
                                          <div class="  mb-3">
                                            @if ($product['product_img_5'] != "noimage.jpg") 
                                              <img class="rounded-circle " src="/storage/images/{{$product->product_img_5}}" width="150px" alt="Card image cap">
                                              @else
                                              <img class="rounded-circle " src="{{asset('assets/backend/images/admin.jpg')}}" width="150px" alt="Card image cap">
                                            @endif
                                            </div>
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_5" accept="image/*" />
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">Product Expired</label>
                                        <input type="text" class="form-control"required value="@if ($product['product_expired'] === 1)Expired
                                        @else Not Expired                                        
                                         @endif" name="" id="inputCity">
                                      </div>                                                             
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">Product Featured or Not</label>
                                        <div class="row">
                                          <input type="text" class="form-control col-3" name="" 
                                          value="@if ($product['product_featured'] == 1)Featured
                                            @else Not Featured                                        
                                            @endif" id="">
                                          <div class="form-group">
                                            <select name="product_featured" id="remarks" class="form-control">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        </div>
    
                                      </div>                                                             
                                    </div>
                                    <button type="submit" class="btn btn-primary">UPDATE</button>
                                </form>
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