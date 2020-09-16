@extends('layouts.backend.app')

@section('content')

<div class="col-12">

<h1>Product Details</h1><br><br>
  <div class="row justify-content-center">
      <div class="col-12">
          <div class="card p-3">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


            <form class="form-horizontal" action="{{ route("products.update", $product->id)}}" method="post" enctype='multipart/form-data' >

                @csrf
                @method('PUT')
              <div class="form-row" >

                <div class="form-group col-md-6">
                  <label for="inputEmail4">Product Name</label>
                  <input type="text" class="form-control"   value="{{ old('product_name') ?? $product->product_name}}" name="product_name" id="product_name" required >

              </div>


                <div class="form-group col-md-6">
                  <label for="inputPassword4">Product Price</label>
                  <input type="number" class="form-control"   value="{{  old('product_price') ?? $product->product_price}}" name="product_price" id="product_price" required>
                </div>


              </div>
              <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Bid Min Value</label>
                    <input type="number" class="form-control" value="{{ old('product_bid_min_value') ?? $product->product_bid_min_value}}" name="product_bid_min_value" id="product_bid_min_value" required>

                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Bid Max Value</label>
                    <input type="number"  class="form-control"  value="{{ old('product_bid_max_value') ?? $product->product_bid_max_value}}" name="product_bid_max_value" id="product_bid_max_value" required >

                  </div>
                </div>
              </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                      <label for="inputEmail4">How many Bids</label>
                      <input type="number" class="form-control product_bid_rolls" value="{{ old('product_bid_rolls') ?? $product->product_bid_rolls}}" name="product_bid_rolls" id="product_bid_rolls" required>

                    </div>

                    {{-- <div class="form-group col-md-6">
                      <label for="inputPassword4">Expired Date</label>
                      <input type="text" name="package_rolls" class="form-control"  value="{{ old('product_expired_date') ?? $product->product_expired_date }}"  name="product_expired_date" id="product_expired_date">

                    </div> --}}
                    <div class="form-group col-md-6 ">
                        <label for="inputAddress">Expired Date:</label>

                        <i class="fa fa-calendar">
                        </i>
                        <input class="form-control" id="date" name="date" placeholder="yyyy/mm/dd" type="text" value="{{ old('date') ?? $product->product_expired_date }}"   />

                        @if ($errors->has('date'))
                        <span class="help-block">
                          <div class='alert alert-danger text-center'>
                            {{ $errors->first('date') }}
                          </div>
                        </span>
                      @endif

                      </div>

                  </div>



                  <div class="form-row">

                    <div class="form-group col-md-6">

                      <label for="inputEmail4">Product Level</label>
                      <select id="inputState" class="form-control" name="product_level" required>
                          @if ($product->product_level === "free") {
                            <option selected>free</option>
                            <option>intermediate</option>
                            <option>high</option>
                          }@elseif($product->product_level === "intermediate"){
                            <option selected>intermediate</option>
                            <option>free</option>
                            <option>high</option>
                          }@elseif($product->product_level === "high"){
                            <option selected>high</option>
                            <option>free</option>
                            <option>intermediate</option>

                          }@endif

                      </select>

                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputPassword4">product Offers</label>
                  {{-- <input type="text" name="package_rolls" class="form-control"  value=" @if($product->product_offer === 1) Offerd Product @else Not Offerd product @endif "  disabled> --}}
                        <select id="inputState" class="form-control" name="product_offer" required>
                            @if ($product->product_offer === 1){
                                <option value="1" selected>Offerd</option>
                                <option value="0" >Not Offerd</option>
                            }@elseif($product->product_offer === 0){
                                <option value="0" selected>Not Offerd</option>
                                <option value="1" >Offerd</option>
                            }@endif
                        </select>

                    </div>
                  </div>



                  <div class="form-row">


                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Product Discritions</label>
                         <textarea class="form-control" name="product_discription" id="product_discription" >{{ $product->product_discription }}</textarea>
                      </div>
                  </div>





                  <div class="form-row">

                    <div class="box col-3">
                        <p>Image 1</p>
                        @if (isset($product->product_img_1))
                            <div id="removeIcon_product_img_1">
                            <i href="" onclick="removeImage({{ $product->id }},'{{ $product->product_img_1 }}','product_img_1')" class="fa fa-trash fa-2x"> </i>
                            </div>

                            <div class="card-body">
                            <div class="mb-3" id="img_remove_product_img_1">
                                     <img class="rounded mx-auto d-block" name="product_img_1" src="{{ asset('storage/images/products').'/'.$product->product_img_1}}" height="250px" width="250px" alt="Card image cap">
                            </div>
                            <div id="new_image_product_img_1" class="invisible">
                                <input type="file" class="image-upload_" name="product_img_1" accept="image/*" />
                            </div>
                            </div>
                        @else
                        <label>
                            <input type="file" class="image-upload_" name="product_img_1" accept="image/*" required/>
                        </label>
                        @endif
                    </div>

                    <div class="box col-3">
                        <p>Image 2</p>
                        @if (isset($product->product_img_2))
                            <div id="removeIcon_product_img_2">
                            <i href="" onclick="removeImage({{$product->id}},'{{ $product->product_img_2 }}', 'product_img_2');" class="fa fa-trash fa-2x" > </i>
                            </div>

                            <div class="card-body">
                                <div class="mb-3" id="img_remove_product_img_2">
                                     <img  class="rounded mx-auto d-block" name="product_img_2" src="{{ asset('storage/images/products').'/'.$product->product_img_2}}" height="250px" width="250px" alt="Card image cap">
                                </div>
                                <div id="new_image_product_img_2" class="invisible">
                                    <input type="file" class="image-upload_" name="product_img_2" accept="image/*" />
                                </div>
                            </div>
                        @else
                        <label>
                            <input type="file" class="image-upload_" name="product_img_2" accept="image/*" />
                        </label>
                        @endif
                    </div>

                    <div class="box col-3">
                        <p>Image 3</p>
                        @if (isset($product->product_img_3))
                            <div id="removeIcon_product_img_3">
                            <i href="" onclick="removeImage({{$product->id}}, '{{$product->product_img_3}}', 'product_img_3');" class="fa fa-trash fa-2x" > </i>
                            </div>

                            <div class="card-body">
                                <div class="mb-3" id="img_remove_product_img_3">
                                     <img class="rounded mx-auto d-block" name="product_img_3" src="{{ asset('storage/images/products').'/'.$product->product_img_3}}" height="250px" width="250px" alt="Card image cap">
                                </div>
                                <div id="new_image_product_img_3" class="invisible">
                                    <input type="file" class="image-upload_" name="product_img_3" accept="image/*" />
                                </div>
                            </div>
                            @else
                            <label>
                                <input type="file" class="image-upload_" name="product_img_3" accept="image/*" />
                            </label>
                            @endif
                    </div>

                    <div class="box col-3">
                        <p>Image 4</p>
                        @if (isset($product->product_img_4))
                            <div id="removeIcon_product_img_4">
                            <i href="" onclick="removeImage({{$product->id}},'{{ $product->product_img_4 }}' ,'product_img_4');" class="fa fa-trash fa-2x" > </i>
                            </div>

                            <div class="card-body">
                                <div class="mb-3" id="img_remove_product_img_4">
                                     <img class="rounded mx-auto d-block" name="product_img_4"  src="{{ asset('storage/images/products').'/'.$product->product_img_4}}" height="250px" width="250px" alt="Card image cap">
                                </div>
                                <div id="new_image_product_img_4" class="invisible">
                                    <input type="file" class="image-upload_" name="product_img_4" accept="image/*" />
                                </div>
                            </div>
                            @else
                            <label>
                                <input type="file" class="image-upload_" name="product_img_4" accept="image/*" />
                            </label>
                            @endif
                    </div>

                </div>

                <div class="form-row">

                    <div class="box col-3">
                        <p>Image 5</p>
                        @if (isset($product->product_img_5))
                            <div id="removeIcon_product_img_5">
                            <i href="" onclick="removeImage({{$product->id}}, '{{$product->product_img_5}}' ,'product_img_5');" class="fa fa-trash fa-2x" > </i>
                            </div>

                            <div class="card-body">
                                <div class="mb-3" id="img_remove_product_img_5">
                                     <img class="rounded mx-auto d-block" name="product_img_5" src="{{ asset('storage/images/products').'/'.$product->product_img_5}}" height="250px" width="250px" alt="Card image cap">
                                </div>

                                <div id="new_image_product_img_5" class="invisible">
                                    <input type="file" class="image-upload_" name="product_img_5" accept="image/*" />
                                </div>

                            </div>
                            @else
                            <label>
                                <input type="file" class="image-upload_" name="product_img_5" accept="image/*" />
                            </label>
                            @endif
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Update</button>

            </form>




            </div>
        </div>
    </div>
</div>


<script>

$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy/mm/dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})





function removeImage(product_id, product_image_name, product_image) {


   console.log(product_id);
   console.log(product_image_name);
   console.log(product_image);


   event.preventDefault();

    var img_remove = 'img_remove_'+product_image;
    var removeIcon = 'removeIcon_'+product_image;
    var new_image = 'new_image_'+product_image;

    console.log(new_image);




    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Image Has been Deleted',
  showConfirmButton: false,
  timer: 1500
});

document.getElementById(img_remove).innerHTML = "";
 document.getElementById(removeIcon).innerHTML ="";

$.ajax({
                     url : '{{ route("ajax-image-delete")}}',
                     method : "post",
                     data : {id:product_id, image:product_image, image_name:product_image_name, _token:"{{csrf_token()}}"},
                     dataType : "json",
                     success : function (response) {
                         console.log(response);
                         $('#'+new_image).removeClass( "invisible" ).addClass( "visible" );

                        }

    });




}


</script>


    @endsection
