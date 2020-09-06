@extends('layouts.frontend.app')
@section('content')

<!-- Start main div -->
<div id="main">
    <!-- <a style="cursor: pointer;" onclick="openNav()"><i class="fa fa-bars"></i></a> -->

    <!-- Start main div content -->
    <div class="content">

        <div class="row m-0">
            <h3 class="mt-4 page-title">Bid Items</h3>
            <nav aria-label="Page navigation example" class="mt-4 w-75">
                <ul class="pagination justify-content-end">
                    <li class="page-item mr-2 disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                class="fa fa-angle-double-left"></i></a>
                    </li>
                    <li class="page-item mr-2"><a class="page-link currunt-page-link" href="#">1</a></li>
                    <li class="page-item mr-2"><a class="page-link" href="#">2</a></li>
                    <li class="page-item mr-2"><a class="page-link" href="#">3</a></li>
                    <li class="page-item mr-2">
                        <a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
                    </li>
                </ul>
            </nav>
            <nav aria-label="Page navigation calander" class="mt-4 ml-4 nav-right">
                <ul class="pagination justify-content-end">
                    <li class="page-item mr-2"><a class="page-link" href="#">
                            <i class="fa fa-calendar"></i>
                        </a></li>
                </ul>
            </nav>
        </div>

        <div class="row m-0 pl-5 pr-5 pb-5 justify-content-center">

            @if (isset($products))
                
          
            <!-- Sample Card -->
            @foreach($products as $product)
            <div class="col-md-2 mt-3 card p-3 bid-item-card">
             @if ($product['product_img_1'] != "noimage.jpg") 
            <img src="/storage/images/{{$product->product_img_1}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
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
                    <button class="btn btn-outline-primary btn-block" onclick="show_details({{ $product }})"  data-toggle="modal" data-target="#viewItemModal">BID</button>
                </div>
            </div>
            <!-- Sample Card -->
            @endforeach

            @endif

        </div>

    </div>
    <!-- End main div content -->

</div>
<!-- End main div -->


<!-- Start - Item view modal -->
<div class="modal fade" id="viewItemModal" tabindex="-1" aria-labelledby="viewItemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 15px;">
            <div class="modal-body pt-1">
                <div class="row m-0">
                    <div class="col p-0 text-right">
                        <a type="button" class="btn p-0" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/frontend/assets/img/noimage.jpg')}}" alt="Image" class="w-100" id="img_1">
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


<p id="demo"></p>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

<!-- Side Nav JS -->
<script src="{{asset('assets/frontend/assets/js/side-nav.js')}}"></script>

<script>


       function show_details(product) {

            var result = Object.entries(product); 
      
            // Printing values 
            for(var i = 0; i < result.length; i++) { 
                for(var z = 0; z < result[i].length; z++) { 
                    result[i][z]; 
                } 
               
         } 

         let product_id= result[0][1];
         let product_name= result[1][1];
         let product_bid_rolls= result[3][1];
         let product_bid_min_value= result[4][1];
         let product_bid_max_value= result[5][1];
         let product_img_1= result[6][1];
        //  let product_img_2= result[7][1];
        //  let product_img_3= result[8][1];
        //  let product_img_4= result[9][1];
        //  let product_img_5= result[10][1];
         let product_bid_records_percentage= result[19][1];
        


        //  console.log(product_id);
        //  console.log(product_name);
        //  console.log(product_bid_rolls);
        //  console.log(product_bid_min_value);
        //  console.log(product_bid_max_value);
        //  console.log(product_img_1);
        //  console.log(product_img_2);
        //  console.log(product_img_3);
        //  console.log(product_img_4);
        //  console.log(product_img_5);
        //  console.log(product_bid_records_percentage);


        // document.getElementById("product_id").innerHTML =  product_id;
        document.getElementById("product_name").innerHTML = product_name;
        document.getElementById("product_bid_rolls").innerHTML = product_bid_rolls;
        document.getElementById("product_bid_min_value").innerHTML = product_bid_min_value;
        document.getElementById("product_bid_max_value").innerHTML=product_bid_max_value;
        document.getElementById("product_bid_records_percentage").innerHTML = product_bid_records_percentage;
        document.getElementById("img_1").src = '/storage/images/'.product_img_1;
     

      document.getElementById("progress").innerHTML =""

        document.getElementById("progress").innerHTML = '<div class="progress-bar" role="progressbar" style="width:'+product_bid_records_percentage+'%"  aria-valuemin="0" aria-valuemax="100"></div>'

       }



</script>

@endsection