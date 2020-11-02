@extends('layouts.frontend.app')
@section('content')

<!-- Start main div -->
<div id="main">
    <!-- <a style="cursor: pointer;" onclick="openNav()"><i class="fa fa-bars"></i></a> -->

    <!-- Start main div content -->
    <div class="content">

        <div class="row m-0">
            <div class="col-md-9 m-0 p-0 pl-4">
                <!-- <a style="cursor: pointer; float: left;" onclick="openNav()"><i class="fa fa-bars"></i></a> -->
                <div class="row m-0 pt-4 p-0">
                    <h3 style="margin-left: 15px;">Dashboard</h3>
                </div>

                <div class="row card-deck m-0 p-0 pr-4">

                    <div class="col-md-4">
                        <div class="card m-0 dashboard-card">
                            <div class="card-body text-center">
                                <h5 style="color: gray;">All Rolls</h5>
                                <div class="row m-0 p-0">
                                    <div class="col p-0 m-0">
                                    <p class="m-0" style="color: black; font-weight: 700;">{{ $rolls['buy'] }}</p>
                                        <p class="mb-0"><small style="color: gray; font-weight: 600;">Buy</small>
                                        </p>
                                    </div>
                                    <div class="col p-0 m-0 bs-card-border-left">
                                        <p class="m-0" style="color: black; font-weight: 700;">{{ $rolls['bonus'] }}</p>
                                        <p class="mb-0"><small style="color: gray; font-weight: 600;">Bonus</small>
                                        </p>
                                    </div>
                                    <div class="col p-0 m-0 bs-card-border-left">
                                        <p class="m-0" style="color: black; font-weight: 700;">{{ $rolls['free'] }}</p>
                                        <p class="mb-0"><small style="color: gray; font-weight: 600;">Free</small>
                                        </p>
                                    </div>
                                    <div class="col p-0 m-0 bs-card-border-left">
                                        <p class="m-0" style="color: black; font-weight: 700;">{{ $rolls['sum'] }}</p>
                                        <p class="mb-0"><small style="color: gray; font-weight: 600;">All</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card m-0 dashboard-card">
                            <div class="card-body text-center">




                                <h1>{{ $referels_count }}</h1>

                                <p style="color: gray;" class="mb-0">All Refferals</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-0 dashboard-card">
                            <div class="card-body text-center">

                                <h1>{{ $win_products_count}}</h1>
                                <p style="color: gray;" class="mb-0">All Win Items</p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row m-0 pt-4 dashboard-card dashboard-row">
                    <div class="row m-0 w-100">
                        <div class="col">
                            <h5 class="mb-0" style="font-weight: 700;">Bid Chart</h5>
                            <p style="color: gray; font-size: 14px;">01 April - 25 April</p>
                        </div>
                        <div class="col text-right">
                            <span class="material-icons">date_range</span>
                        </div>
                    </div>
                    <canvas id="myChart" width="300" height="100"></canvas>
                </div>

                <div class="row m-0 pt-4 dashboard-card dashboard-row mb-5">
                    <div class="row m-0 w-100">
                        <div class="col">
                            <h5 class="mb-0" style="font-weight: 700;">Current Sale Items</h5>
                        </div>
                        <div class="col text-right">
                            <a href="" style="color: gray; font-size: 12px;">
                                <p>View All</p>
                            </a>
                        </div>
                    </div>

                    <div class="row m-0 w-100 pb-3">
                        <div class="col-md-4 mt-3">
                            <div class="row m-0 item-card">
                                <div
                                    style="background-color: white; width: 40px; height: 40px; text-align: center; padding-top: 3px; border-radius: 10px;">
                                    <img src="{{asset('assets/frontend/assets/img/test-item-card-img.png')}}" alt="Image" style="width: 80%;">
                                </div>
                                <div class="pl-2" style="padding-top: 12px;">
                                    <p class="mb-0" style="font-size: 14px; line-height: 0px; font-weight: 600;">
                                        Item Title</p>
                                    <small style="color: gray; font-weight: 600;">20/200</small>
                                </div>
                                <div class="col m-0 p-0 text-right pr-2" style="margin-top: 5px !important;">
                                    <a href="#"
                                        class="btn btn-sm rounded-pill btn-outline-primary item-card-button">BIDss</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class="row m-0 item-card">
                                <div
                                    style="background-color: white; width: 40px; height: 40px; text-align: center; padding-top: 3px; border-radius: 10px;">
                                    <img src="{{asset('assets/frontend/assets/img/test-item-card-img.png')}}" alt="Image" style="width: 80%;">
                                </div>
                                <div class="pl-2" style="padding-top: 12px;">
                                    <p class="mb-0" style="font-size: 14px; line-height: 0px; font-weight: 600;">
                                        Item Title</p>
                                    <small style="color: gray; font-weight: 600;">20/200</small>
                                </div>
                                <div class="col m-0 p-0 text-right pr-2" style="margin-top: 5px !important;">
                                    <a href="#"
                                        class="btn btn-sm rounded-pill btn-outline-primary item-card-button">BID</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class="row m-0 item-card">
                                <div
                                    style="background-color: white; width: 40px; height: 40px; text-align: center; padding-top: 3px; border-radius: 10px;">
                                    <img src="{{asset('assets/frontend/assets/img/test-item-card-img.png')}}" alt="Image" style="width: 80%;">
                                </div>
                                <div class="pl-2" style="padding-top: 12px;">
                                    <p class="mb-0" style="font-size: 14px; line-height: 0px; font-weight: 600;">
                                        Item Title</p>
                                    <small style="color: gray; font-weight: 600;">20/200</small>
                                </div>
                                <div class="col m-0 p-0 text-right pr-2" style="margin-top: 5px !important;">
                                    <a href="#" class="btn btn-sm rounded-pill btn-outline-primary item-card-button">
                                         BID
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <div class="col-md-3 m-0 p-3 pt-4" style="background-color: white;">
                <h5 style="font-weight: 700;">New Items</h5>

                @if (isset($latest_products))


                @foreach($latest_products as $latest_product)
                <div class="row m-0 item-card">
                    <div
                        style="width: 40px; height: 40px; text-align: center; padding-top: 3px; border-radius: 10px;">
                        @if ($latest_product['product_img_1'] != "noimage.jpg")
                        {{-- <img src="/storage/images/{{$latest_product->product_img_1}}" alt="Image" style="width: 100%; border-radius: 10px;"> --}}
                          <img src="{{asset('storage/images/products').'/'.$latest_product->product_img_1 }}" alt="Image" style="width: 100%; border-radius: 10px;">
                        @else
                        <img src="{{asset('storage/images/products/noimage.jpg')}}" alt="Image" style="width: 100%; border-radius: 10px;">
                        @endif
                    </div>
                    <div class="pl-2" style="padding-top: 12px;">
                        <p class="mb-0" style="font-size: 14px; line-height: 0px; font-weight: 600;">{{$latest_product->product_name}}</p>
                        <small style="color: gray; font-weight: 600;">20/200</small>
                    </div>
                    <div class="col m-0 p-0 text-right pr-2" style="margin-top: 5px !important;">

                            <a class="btn btn-sm rounded-pill btn-outline-primary item-card-button getCustomeDetails"    data-id="{{ $latest_product->id }}">BID</a>
                    </div>
                </div>

                 {{-- For Image show on model --}}
                 <span  style="display:none;" id="{{ $latest_product->id }}-image" >{{ asset('storage/images/products').'/'.$latest_product->product_img_1}}</span>

                @endforeach

                @endif
            </div>

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






<!-- End - Item view model -->

{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" --}}
{{-- integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> --}}
{{-- </script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

<!-- ChartJS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg=="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"
integrity="sha512-G8JE1Xbr0egZE5gNGyUm1fF764iHVfRXshIoUWCTPAbKkkItp/6qal5YAHXrxEu4HNfPTQs6HOu3D5vCGS1j3w=="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"
integrity="sha512-vBmx0N/uQOXznm/Nbkp7h0P1RfLSj0HQrFSzV8m7rOGyj30fYAOKHYvCNez+yM8IrfnW0TCodDEjRqf6fodf/Q=="
crossorigin="anonymous"></script>

<!-- Side Nav JS -->
<script src="{{asset('assets/frontend/assets/js/side-nav.js')}}"></script>

<!-- Dashboard JS -->
<script src="{{asset('assets/frontend/assets/js/dashboard.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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

                 Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'you dont have any Buy or bonus rolls, plese select free bid option!',
                     })


                  return false;
              }
         }
         return true;
     }

     if(product_level === "intermediate"){

         if((buy_rolls+bonus_rolls) < product_rolls){
             if(document.getElementById("select_free_bid").checked === false){

                 Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'you dont have any Buy or bonus rolls, plese select free bid option!',
                     })


                  return false;
              }
         }
         return true;
     }



 }else{


     Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'Enterd value should be between min and max bid values!',
                     })

     return false;
 }




}





    // function show_details(product) {
    //     var result = Object.entries(product);


    //     // Printing values
    //     for(var i = 0; i < result.length; i++) {
    //             for(var z = 0; z < result[i].length; z++) {
    //                 result[i][z];
    //             }

    //      }


    //      let product_id= result[0][1];

    //      let product_name= result[1][1];
    //      let product_bid_rolls= result[3][1];
    //      let product_bid_min_value= result[4][1];
    //      let product_bid_max_value= result[5][1];
    //      let product_img_1= result[6][1];



    //      let product_bid_records_percentage= result[19][1];


    //     document.getElementById("product_name").innerHTML = product_name;
    //     document.getElementById("product_bid_rolls").innerHTML = product_bid_rolls;
    //     document.getElementById("product_bid_min_value").innerHTML = product_bid_min_value;
    //     document.getElementById("product_bid_max_value").innerHTML=product_bid_max_value;
    //     document.getElementById("product_bid_records_percentage").innerHTML = product_bid_records_percentage;
    //     // document.getElementById("img_1").src = '/storage/images/products/'.product_img_1;

    //     let image = document.getElementById(product['id']+'-image').innerHTML;
    //     document.getElementById("img_1").src = image;

    //     document.getElementById("progress").innerHTML =""

    //     document.getElementById("progress").innerHTML = '<div class="progress-bar" role="progressbar" style="width:'+product_bid_records_percentage+'%"  aria-valuemin="0" aria-valuemax="100"></div>'

    // }



</script>








@endsection
