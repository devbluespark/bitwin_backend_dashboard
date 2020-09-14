@extends('layouts.backend.app')
@section('content')

<div class="col-12" >
    <div class="row">
       <div class="col-md-12 col-md-offset-1">
          <div class="panel panel-default">
             <div class="panel-heading">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Products Add</strong>
                            </div>
                            <div class="card-body">
                              @if (session('suc'))
                              <div class='alert alert-primary text-center'>
                                  {{session('suc')}}
                              </div>
                              @elseif (session('er'))
                              <div class='alert alert-danger text-center'>
                                  {{session('er')}}
                              </div>
                               @endif
                                  <form action="{{ route("products.store")}}" method="POST" enctype='multipart/form-data'>
                                  {{ csrf_field() }}
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="product_name">Product Name</label>
                                        <input type="text" class="form-control" required name="product_name" value="{{ $product['product_name'] ?? old('product_name') }}" placeholder="">
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
                                        <input type="number" class="form-control"required name="product_price" value="{{ $product['product_price'] ?? old('product_price') }}" id="inputPassword4" placeholder="">
                                        @if ($errors->has('product_price'))
                                        <span class="help-block">
                                          <div class='alert alert-danger text-center'>
                                           {{ $errors->first('product_price') }}
                                          </div>
                                        </span>
                                      @endif
                                      </div>
                                    </div>
                                    <div class="form-row">
                                  
                                      <div class="form-group col-md-6">
                                        <label for="inputAddress2"> Bid Min Value</label>
                                        <input type="number" class="form-control"required name="product_bid_min_value" value="{{ $product['product_bid_min_value'] ?? old('product_bid_min_value') }}" id="inputAddress2" placeholder="">
                                        @if ($errors->has('product_bid_min_value'))
                                        <span class="help-block">
                                          <div class='alert alert-danger text-center'>
                                            {{ $errors->first('product_bid_min_value') }}
                                          </div>
                                        </span>
                                      @endif
                                      </div>
                                    {{-- <div class="form-row"> --}}
                                      <div class="form-group col-md-6">
                                        <label for="inputCity"> Bid Max Value</label>
                                        <input type="number" class="form-control"required name="product_bid_max_value" value="{{ $product['product_bid_max_value'] ?? old('product_bid_max_value') }}" id="inputCity">
                                        @if ($errors->has('product_bid_max_value'))
                                        <span class="help-block">
                                          <div class='alert alert-danger text-center'>
                                            {{ $errors->first('product_bid_max_value') }}
                                          </div>
                                        </span>
                                      @endif
                                      </div> 
                                      
                                     

                                      <div class="form-group col-md-6 ">
                                        <label for="inputAddress">How many rolls</label>
                                        <input type="number" class="form-control"required name="product_bid_rolls" value="{{ $product['product_bid_rolls'] ?? old('product_bid_rolls') }}" id="inputAddress" placeholder="">
                                        @if ($errors->has('product_bid_rolls'))
                                        <span class="help-block">
                                          <div class='alert alert-danger text-center'>
                                            {{ $errors->first('product_bid_rolls') }}
                                          </div>
                                        </span>
                                      @endif
                                      </div>

                                      <div class="form-group col-md-6 ">
                                        <label for="inputAddress">Select Product Level</label>
                                       
                                        <select id="inputState" class="form-control">
                                          <option selected disabled>Choose...</option>
                                          <option>free</option>
                                          <option>intermediate</option>
                                          <option>high</option>
                                        </select>

                                        @if ($errors->has('product_bid_rolls'))
                                        <span class="help-block">
                                          <div class='alert alert-danger text-center'>
                                            {{ $errors->first('product_bid_rolls') }}
                                          </div>
                                        </span>
                                      @endif
                                      </div>

                                      <div class="form-group col-md-6 ">
                                        <label for="inputAddress">Offers : </label>
                                       
                                        <label class="switch switch-text switch-primary switch-pill"><input type="checkbox" name="product_offers" class="switch-input" > <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>
                                        
                                      </div>
                                      
                                      
                                    </div>
                                    <div class="wrapper_">
                                      <div class="box">
                                        <div class="js--image-preview"></div>
                                        <div class="upload-options_">
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_1" accept="image/*" />
                                            @if ($errors->has('product_img_1'))
                                            <span class="help-block">
                                              <div class='alert alert-danger text-center'>{{ $errors->first('product_img_1') }}</div>
                                            </span>
                                          @endif
                                          </label>
                                        </div>
                                      </div>
                                  
                                      <div class="box">
                                        <div class="js--image-preview"></div>
                                        <div class="upload-options_">
                                          <label>
                                            <input type="file" class="image-upload_" name="product_img_2"  accept="image/*" />
                                            @if ($errors->has('product_img_2'))
                                            <span class="help-block">
                                              <div class='alert alert-danger text-center'>{{ $errors->first('product_img_2') }}</div>
                                            </span>
                                          @endif
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
                                    {{-- <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">Product Expired</label>
                                        <input type="text" class="form-control"required name="product_expired" id="inputCity">
                                      </div>                                                             
                                    </div> --}}
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <br>
                                        {{-- <label for="inputCity">Product Featured</label>                                        
                                        <label class="switch switch-default switch-primary mr-2"><input type="checkbox" class="switch-input" name="product_featured" > <span class="switch-label"></span> <span class="switch-handle"></span></label> --}}

                                      </div>                                                             
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create</button>
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