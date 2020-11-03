@extends('layouts.frontend.app')
@section('content')

<!-- Start main div -->
<div id="main">
    
    <!-- Start main div content -->
    <div class="content pl-5" style="padding-right: 3rem!important;">

        <div class="card border-info shadow mt-5 mb-5">
            <div class="card-header bg-info text-light">
                <h5 class="mb-0">Bid Items</h5>
            </div>
            <!-- <div class="card-body">
            </div> -->
        </div>
        
        <div class="row m-0">
            <!-- <h3 class="mt-4 page-title">Bid Items</h3> -->

            @if ($message = Session::get('bid-success'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif


            {{--  <nav aria-label="Page navigation calander" class="mt-4 ml-4 nav-right">
                <ul class="pagination justify-content-end">
                    <li class="page-item mr-2"><a class="page-link" href="#">
                            <i class="fa fa-calendar"></i>
                        </a></li>
                </ul>
            </nav>  --}}
        </div>

        <div class="row m-0 pl-5 pr-5 pb-5 justify-content-center">

            @if (isset($products))


            <!-- Sample Card -->
            @foreach($products as $product)
            <div class="col-md-2 mt-3 card p-3 bid-item-card shadow">
             @if ($product['product_img_1'] != "noimage.jpg")
            <img src="/storage/images/products/{{$product->product_img_1}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
            @else
            <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
            @endif
                <div class="card-body bid-item-card-body text-center w-100">
                    <h6 class="card-title">{{$product->product_name}}</h6>
                    <p class="card-text bid-item-card-text">
                        Max Bid <a class="bid-item-card-val">{{$product->product_bid_max_value}}</a><br>
                        Min Bid <a class="bid-item-card-val">{{$product->product_bid_min_value}}</a>


                    </p>
                </div>
                <div class="card-footer bid-item-card-footer mt-3">
                    <button class="btn btn-outline-primary btn-block getCustomeDetails"    data-id="{{ $product->id }}">BID</button>
                </div>
            </div>
            <!-- Sample Card -->
             {{-- For Image show on model --}}
             <span  style="display:none;" id="{{ $product->id }}-image" >{{ asset('storage/images/products').'/'.$product->product_img_1}}</span>

            @endforeach

            @endif

        </div>

    </div>
    <!-- End main div content -->

</div>
<!-- End main div -->






  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 15px;">
            <div class="modal-body pt-1" id="model-ajax-load">
                <div class="row m-0">
                    <div class="col p-0 text-right">
                        <a type="button" class="btn p-0" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-md-4">
                        <img src="" alt="Image" class="w-100" id="img_1">
                    </div>
                    <div class="col-md-8">
                        <h5  class="font-weight-bold"> <span id="product_name"></span> </h5>
                        <p class="product-modal-description-p">How Many Rolls <a
                            class="product-modal-description-val"><span id="product_bid_rolls"></span></a></p>
                        <p class="product-modal-description-p">Min Bid <a
                                class="product-modal-description-val"><span id="product_bid_min_value"></span></a></p>
                        <p class="product-modal-description-p">Max Bid <a
                                class="product-modal-description-val"><span id="product_bid_max_value"></span></a></p>


                        <div class="row m-0 mt-2">
                            <div class="col-10 m-0 p-0">
                                <div class="progress" id="progress">

                                </div>
                            </div>
                            <div class="col-2 m-0">
                                <span id="product_bid_records_percentage"></span> %
                            </div>

                        </div>


                        <form class="mt-2">
                            <label class="product-modal-description-val">Your Bid</label>
                            <div class="form-row m-0 p-0 mb-1">
                                <input type="text" class="form-control col-md-8 mr-3 mt-3">
                                <button type="submit" class="btn btn-primary mb-2 col-md-3 mr-3 mt-3">Bid</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row m-0 p-3">
                    <h5 class="font-weight-bold">Item Description</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem reiciendis deserunt
                        accusantium aperiam sequi voluptatum ea rem animi perferendis, doloribus iste. Recusandae
                        rerum sunt sint nulla ducimus officiis iure corporis!</p>
                </div>
            </div>
        </div>
    </div>
  </div>










<p id="demo"></p>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

<!-- Side Nav JS -->
<script src="{{asset('assets/frontend/assets/js/side-nav.js')}}"></script>

<script>

    $(document).ready(function(){
            $(document).on('click','.getCustomeDetails',function(){

                var id = $(this).data('id');

                $.ajax({
                    url : '{{ url("ajax-users-rolls")}}',
                    method : "post",
                    data : {id:id, _token:"{{csrf_token()}}"},
                    dataType : "json",
                    success : function (response) {

                        console.log(response);
                        // console.log(response.product.id);

                        var img_1 = '{{ asset("storage/images/products")}}/'+response.product.product_img_1;

                        document.getElementById("model-ajax-load").innerHTML = "";
                        document.getElementById("model-ajax-load").innerHTML = '<div class="row m-0">'+
                                                                                    '<div class="col p-0 text-right">'+
                                                                                        '<a type="button" class="btn p-0" data-dismiss="modal"><i class="fa fa-times"></i></a>'+
                                                                                    '</div>'+
                                                                                '</div>'+
                                                                                '<div class="row m-0">'+
                                                                                    '<div class="col-md-4">'+
                                                                                        '<img src="" alt="Image" class="w-100" id="img_1">'+
                                                                                    '</div>'+
                                                                                    '<div class="col-md-8">'+
                                                                                        '<h5  class="font-weight-bold"> '+response.product.product_name+' </h5>'+
                                                                                        '<p class="product-modal-description-p">How Many Rolls <a class="product-modal-description-val"><span id="response.product.bid_rolls" >'+response.product.product_bid_rolls+'</span></a></p>'+
                                                                                        '<p class="product-modal-description-p">Min Bid <a class="product-modal-description-val"><span id="response.product.min_value" >'+response.product.product_bid_min_value+'</span></a></p>'+
                                                                                        '<p class="product-modal-description-p">Max Bid <a class="product-modal-description-val"><span id="response.product.max_value" >'+response.product.product_bid_max_value+'</span></a></p>'+

                                                                                        '<div class="row m-0 mt-2">'+
                                                                                            '<div class="col-10 m-0 p-0">'+
                                                                                                '<div class="progress" >'+
                                                                                                    '<div class="progress-bar" role="progressbar" style="width: '+response.product.state_bar+'%"  aria-valuemin="0" aria-valuemax="100"></div>'+
                                                                                                '</div>'+
                                                                                            '</div>'+
                                                                                            '<div class="col-2 m-0">'+
                                                                                                response.product.state_bar+' %'+
                                                                                            '</div>'+
                                                                                        '</div>'+
                                                                                        '<div class="form-inside-modal" id="form-inside-modal">'+

                                                                                        '<form class="mt-2">'+
                                                                                            '<label class="product-modal-description-val">Your Bid</label>'+
                                                                                            '<div class="form-row m-0 p-0 mb-1">'+
                                                                                                '<input type="number" class="form-control col-md-8 mr-3 mt-3">'+
                                                                                                '<button type="submit" class="btn btn-primary mb-2 col-md-3 mr-3 mt-3">Bid</button>'+
                                                                                            '</div>'+
                                                                                        '</form>'+

                                                                                        '</div>'+

                                                                                    '</div>'+
                                                                                '</div>'+
                                                                                '<div class="row m-0 p-3">'+
                                                                                    '<h5 class="font-weight-bold">Item Description</h5>'+
                                                                                    '<p>eriam sequi voluptatum ea rem animi perferendis, doloribus iste. Recusandae rerum sunt sint ! '+response.product.product_discription+'</p>'+
                                                                                '</div>'+
                                                                            '</div>';



                        document.getElementById("img_1").src = img_1;







                        if(response.can===0){

                            document.getElementById("form-inside-modal").innerHTML = "";
                            document.getElementById("form-inside-modal").innerHTML = '<form class="mt-2">'+
                                                                                            '<p>Buy Rolls Amount: '+response.buy_rolls+' </P>'+
                                                                                            '<p>Bonus Rolls Amount: '+response.bonus_rolls+'</P>'+
                                                                                            '<label class="text-danger">'+response.error+'</label><br>'+
                                                                                            '<label class="product-modal-description-val">Your Bid</label>'+
                                                                                            '<div class="form-row m-0 p-0 mb-1">'+
                                                                                                '<input type="number" class="form-control col-md-8 mr-3 mt-3 " disabled >'+
                                                                                                '<button type="submit" class="btn btn-primary mb-2 col-md-3 mr-3 mt-3 disabled" disabled >Bid</button>'+
                                                                                            '</div>'+
                                                                                        '</form>';

                        }


                        if(response.can===1){

                            document.getElementById("form-inside-modal").innerHTML = "";
                            document.getElementById("form-inside-modal").innerHTML = '<form class="mt-2" method="post" action="{{ route('user.products.bid') }}" >'+
                                                                                            '@csrf'+
                                                                                            '<span id="response.free_rolls" hidden >'+response.free_rolls+'</span>'+
                                                                                            '<p>Buy Rolls Amount: <span id="response.buy_rolls">'+response.buy_rolls+'</span></P>'+
                                                                                            '<p>Bonus Rolls Amount: <span id="response.bonus_rolls">'+response.bonus_rolls+'</span></P>'+
                                                                                            '<input type="hidden" name="product_id" value="'+response.product.id+'">'+
                                                                                            '<input type="hidden" name="product_level" id="product_level" value="'+response.product.product_level+'">'+
                                                                                            '<input type="hidden" name="product_bid_rolls" id="product_bid_rolls" value="'+response.product.product_bid_rolls+'">'+
                                                                                            '<input type="hidden" name="user_buy_rolls" id="user_buy_rolls" value="'+response.buy_rolls+'">'+
                                                                                            '<input type="hidden" name="user_bonus_rolls" id="user_bonus_rolls" value="'+response.bonus_rolls+'">'+
                                                                                            '<label class="text-success">'+response.success+'</label><br>'+
                                                                                            '<label class="product-modal-description-val">Your Bid</label>'+
                                                                                            '<div class="form-row m-0 p-0 mb-1">'+
                                                                                                '<input type="number" name="bid_input" class="form-control col-md-8 mr-3 mt-3 bid-input"   id="bid-input" >'+
                                                                                                '<button type="submit"  onClick="return bidValidate()" class="btn btn-primary mb-2 col-md-3 mr-3 mt-3 bid-validate " >Bid</button>'+
                                                                                            '</div>'+
                                                                                            '<div id="free_bid_options">'+
                                                                                            '</div>'+
                                                                                        '</form>';




                                if(response.product.product_level === "free" ){

                                    if(parseInt(response.free_rolls) === 1){
                                    document.getElementById("free_bid_options").innerHTML="";
                                    document.getElementById("free_bid_options").innerHTML='<input type="checkbox" class="form-check-input" id="select_free_bid" name="select_free_bid" >'+
                                                                                        '<label class="form-check-label" for="exampleCheck1">Pay using free bid</label>';
                                    }
                                    if(response.free_rolls === 0){
                                        document.getElementById("free_bid_options").innerHTML="";
                                        document.getElementById("free_bid_options").innerHTML='<input type="checkbox" class="form-check-input" id="select_free_bid" name="select_free_bid" disabled >'+
                                                                                        '<label class="form-check-label text-danger" for="exampleCheck1">You have used today Free bid</label>';
                                    }
                                }


                                if(response.product.product_level === "intermediate"){

                                if(parseInt(response.free_rolls) === 1){
                                    document.getElementById("free_bid_options").innerHTML="";
                                    document.getElementById("free_bid_options").innerHTML='<input type="checkbox" class="form-check-input" id="select_free_bid" name="select_free_bid">'+
                                                                                        '<label class="form-check-label" for="exampleCheck1">Use free bid for  1 roll</label>';
                                }
                                if(response.free_rolls === 0){
                                    document.getElementById("free_bid_options").innerHTML="";
                                    document.getElementById("free_bid_options").innerHTML='<input type="checkbox" class="form-check-input" id="select_free_bid" name="select_free_bid" disabled>'+
                                                                                        '<label class="form-check-label text-danger" for="exampleCheck1">You have used today Free bid</label>';
                                }
                            }

                        }




                        if(response.product.product_offer === 1){
                            var expired_date = response.product.product_expired_date;
                            // Get today's date and time
                            var now = new Date().getTime();

                            // Find the distance between now and the count down date
                            var distance = expired_date - now;


                            // Time calculations for days, hours, minutes and seconds
                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            console.log(now);
                            console.log(expired_date);
                            console.log(distance);

                        }











                        showModal();
                        function showModal() {
                             $('#myModal').modal('show');
                        }


                    }
                });
            });








    });



    function bidValidate(){

       var bid_min_value=  parseInt(document.getElementById("response.product.min_value").innerHTML) ;
       var bid_max_value=  parseInt(document.getElementById("response.product.max_value").innerHTML) ;
       var bidinput = parseInt(document.getElementById("bid-input").value);
       var product_level =document.getElementById("product_level").value;

        var product_rolls = document.getElementById("product_bid_rolls").value;
       var free_rolls = parseInt(document.getElementById("response.free_rolls").innerHTML);
       var buy_rolls = parseInt(document.getElementById("response.buy_rolls").innerHTML);
       var bonus_rolls = parseInt(document.getElementById("response.bonus_rolls").innerHTML);




        if(bidinput >= bid_min_value && bidinput<= bid_max_value){


            if(product_level === "free"){

                if((buy_rolls+bonus_rolls) === 0){
                    if(document.getElementById("select_free_bid").checked === false){
                         alert("you dont have any Buy or bonus rolls, plese select free bid option");
                         return false;
                     }
                }
                return true;
            }

            if(product_level === "intermediate"){

                if((buy_rolls+bonus_rolls) < product_rolls){
                    if(document.getElementById("select_free_bid").checked === false){
                         alert("you dont have any Buy or bonus rolls, plese select free bid option");
                         return false;
                     }
                }
                return true;
            }



        }else{
            alert("Enterd value should be between min and max bid values");
            return false;
        }




    }




</script>

@endsection
