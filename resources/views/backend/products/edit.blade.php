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
                                <strong class="card-title">Products Edit</strong>
                            </div>
                            <div class="card-body">
                                <form action="/backend/editproducts/{{$product->id}}" method="POST" enctype='multipart/form-data'>
                                  {{ csrf_field() }} {{ method_field('PUT') }}
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="product_name">Product Name</label>
                                      <input type="text" class="form-control" value="{{$product->product_name}}" required name="product_name" placeholder="">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Product Price</label>
                                        <input type="text" class="form-control"required name="product_price" value="{{$product->product_price}}" id="inputPassword4" placeholder="">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputAddress">Product Bit Value</label>
                                      <input type="text" class="form-control"required name="product_bid_rolls"value="{{$product->product_bid_rolls}}" id="inputAddress" placeholder="">
                                    </div>
                                    <div class="form-group">
                                      <label for="inputAddress2">Product Bid Min Value</label>
                                      <input type="text" class="form-control"required name="product_bid_min_value"value="{{$product->product_bid_min_value}}" id="inputAddress2" placeholder="">
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">Product Bid Max Value</label>
                                        <input type="text" class="form-control"required name="product_bid_max_value"value="{{$product->product_bid_max_value}}" id="inputCity">
                                      </div>                                                             
                                    </div>
                                    <div class="wrapper_">
                                      <div class="box">
                                        <div class="js--image-preview"></div>
                                        <div class="upload-options_">
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_1" accept="image/*" />
                                          </label>
                                        </div>
                                      </div>
                                  
                                      <div class="box">
                                        <div class="js--image-preview"></div>
                                        <div class="upload-options_">
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_2"  accept="image/*" />
                                          </label>
                                        </div>
                                      </div>
                                      <div class="box">
                                        <div class="js--image-preview"></div>
                                        <div class="upload-options_">
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_3" accept="image/*" />
                                          </label>
                                        </div>
                                      </div>
                                      <div class="box">
                                        <div class="js--image-preview"></div>
                                        <div class="upload-options_">
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_4" accept="image/*" />
                                          </label>
                                        </div>
                                      </div>           
                                      <div class="box">
                                        <div class="js--image-preview"></div>
                                        <div class="upload-options_">
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_5" accept="image/*" />
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">Product Expired</label>
                                        <input type="text" class="form-control"required value="{{$product->product_expired}}" name="product_expired" id="inputCity">
                                      </div>                                                             
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">Product Featured</label>
                                        <input type="text" class="form-control"required value="{{$product->product_featured}}"name="product_featured" id="inputCity">
                                      </div>                                                             
                                    </div>
                                    <button type="submit" class="btn btn-primary">ADD</button>
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