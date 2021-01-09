@extends('layouts.backend.app')

@section('content')

<div class="col-12">

<h1>Product Details</h1><br><br>
  <div class="row justify-content-center">
      <div class="col-12">
          <div class="card p-3">




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
                    <input type="number" name="package_rolls" class="form-control"  value="{{ old('product_bid_max_value') ?? $product->product_bid_max_value}}" name="product_bid_max_value" id="product_bid_max_value" required >

                  </div>
                </div>
              </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                      <label for="inputEmail4">How many Bids</label>
                      <input type="number" class="form-control product_bid_rolls" value="{{ old('product_bid_rolls') ?? $product->product_bid_rolls}}" name="product_bid_rolls" id="product_bid_rolls" required>

                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Expired Date</label>
                      <input type="text" name="package_rolls" class="form-control"  value="{{ old('product_expired_date') ?? $product->product_expired_date }}"  name="product_expired_date" id="product_expired_date">

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
                                <option value="1" selected>Offerd Product</option>
                                <option value="0" >Not Offerd Product</option>
                            }@elseif($product->product_offer === 0){
                                <option value="0" selected>Not Offerd Product</option>
                                <option value="1" >Offerd Product</option>
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
                                     <img class="rounded mx-auto d-block"  src="{{ asset('storage/images/products').'/'.$product->product_img_1}}" height="250px" width="250px" alt="Card image cap">
                            </div>
                            <label id="new_image_product_img_1"></label>
                            </div>
                        @else
                        <label>
                            <input type="file" class="image-upload_" name="new_product_img_1" accept="image/*" required/>
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
                                     <img class="rounded mx-auto d-block"  src="{{ asset('storage/images/products').'/'.$product->product_img_2}}" height="250px" width="250px" alt="Card image cap">
                                </div>
                                <label id="new_image_product_img_2"></label>
                            </div>
                        @else
                        <label>
                            <input type="file" class="image-upload_" name="new_product_img_2" accept="image/*" required/>
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
                                     <img class="rounded mx-auto d-block"  src="{{ asset('storage/images/products').'/'.$product->product_img_3}}" height="250px" width="250px" alt="Card image cap">
                                </div>
                                <label id="new_image_product_img_3"></label>
                            </div>
                            @else
                            <label>
                                <input type="file" class="image-upload_" name="new_product_img_3" accept="image/*" required/>
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
                                     <img class="rounded mx-auto d-block"  src="{{ asset('storage/images/products').'/'.$product->product_img_4}}" height="250px" width="250px" alt="Card image cap">
                                </div>
                                <label id="new_image_product_img_4"></label>
                            </div>
                            @else
                            <label>
                                <input type="file" class="image-upload_" name="new_product_img_4" accept="image/*" required/>
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
                                     <img class="rounded mx-auto d-block"  src="{{ asset('storage/images/products').'/'.$product->product_img_5}}" height="250px" width="250px" alt="Card image cap">
                                </div>
                                <label id="new_image_product_img_5"></label>
                            </div>
                            @else
                            <label>
                                <input type="file" class="image-upload_" name="new_product_img_5" accept="image/*" required/>
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

function removeImage(product_id, product_image_name, product_image) {


   console.log(product_id);
   console.log(product_image_name);
   console.log(product_image);


   event.preventDefault();

    var img_remove = 'img_remove_'+product_image;
    var removeIcon = 'removeIcon_'+product_image;
    var new_image = 'new_image_'+product_image;

    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Image Has been Deleted',
  showConfirmButton: false,
  timer: 1500
})

document.getElementById(img_remove).innerHTML = "";
 document.getElementById(removeIcon).innerHTML ="";

$.ajax({
                     url : '{{ route("ajax-image-delete")}}',
                     method : "post",
                     data : {id:product_id, image:product_image, image_name:product_image_name, _token:"{{csrf_token()}}"},
                     dataType : "json",
                     success : function (response) {
                         console.log(response);
                        document.getElementById(new_image).innerHTML ="";
                         document.getElementById(new_image).innerHTML ='<input type="file" class="image-upload_" name="new_'+product_image+'" accept="image/*" required>';
                     }

    });

//    swal({
//         title: 'Are you sure?',
//         text: 'This record and it`s details will be permanantly deleted!',
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Yes, delete it!'
//     }).then(function(result) {

//         // document.getElementById(img_remove).innerHTML = "";
//         // document.getElementById(removeIcon).innerHTML ="";

//         $.ajax({
//                     url : '{{ route("ajax-image-delete")}}',
//                     method : "post",
//                     data : {id:product_id, image:product_image, image_name:product_image_name, _token:"{{csrf_token()}}"},
//                     dataType : "json",
//                     success : function (response) {
//                         console.log(response);
//                         // document.getElementById('new_image').innerHTML ="";
//                         // document.getElementById(new_image).innerHTML ='<input type="file" class="image-upload_" name="'+product_image+'" accept="image/*" />';
//                     }

//    });

//     });








}



// $('.delete-confirm').on('click', function (event) {
//     event.preventDefault();
//     const url = $(this).attr('href');
//     var current_object = $(this);
//     swal({
//         title: 'Are you sure?',
//         text: 'This Image Will be permanantly deleted!',
//         icon: 'warning',
//         buttons: ["Cancel", "Yes!"],
//     }).then(function(result) {
//         if (result) {
//             var action = current_object.attr('data-action');
//             var token = jQuery('meta[name="csrf-token"]').attr('content');
//             var id = current_object.attr('data-id');

//             $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
//             $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
//             $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
//             $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
//             $('body').find('.remove-form').submit();
//         }
//     });
// });

</script>


    @endsection
