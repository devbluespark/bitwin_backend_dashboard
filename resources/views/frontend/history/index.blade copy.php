@extends('layouts.frontend.app')
@section('content')

 <!-- Start main div -->
 <div id="main" >
    <!-- <a style="cursor: pointer;" onclick="openNav()"><i class="fa fa-bars"></i></a> -->

    <!-- Start main div content -->
    <div class="content ">



        <div class=" m-0">
            {{--  <h3 class=" page-title">History</h3>  --}}


        <div class="my-4">
            <ul class="nav nav-pills mb-3 ml-4" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Bid Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Win Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Buy packages</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">




  <div>
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
    {{--  <nav aria-label="Page navigation calander" class="mt-4 ml-4 nav-right">
        <ul class="pagination justify-content-end">
            <li class="page-item mr-2"><a class="page-link" href="#"><i class="fa fa-calendar"></i></a></li>
        </ul>
    </nav>  --}}
</div>

<div class="row m-0 pl-5 pr-5 pb-5">




    <div class="col-md-6 mt-3">
        <div class="row m-0 item-card p-3" style="border-radius: 15px; background-color: white;">
            <div class="col-md-3 p-0" style="border-radius: 10px;">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" alt="Image"
                    style="width: 100%; border-radius: 10px; margin-bottom: 10px;">
            </div>
            <div class="col-md-9 pl-3 pr-0 pt-0 pb-0">
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <h6 class="mb-0" style="font-weight: 700;">Item Title</h6>
                    </div>
                    <div class="col p-0 text-right"
                        style="font-weight: 700; color: #2659EE; font-size: 0.8rem;">
                        Win
                    </div>
                </div>
                <div class="m-0 p-0 mt-2">
                    <p class="product-card-description-p">Max Bid <a
                            class="product-card-description-val">4000</a></p>
                    <p class="product-card-description-p">Min Bid <a
                            class="product-card-description-val">1000</a></p>
                    <p class="product-card-description-p">One Bid Price <a
                            class="product-card-description-val">10</a></p>
                </div>
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <p class="product-card-date mt-3">
                            2020/01/01 04:00PM
                        </p>
                    </div>
                    <div class="col p-0 text-right">
                        <button class="btn btn-outline-danger card-remove-button"><i
                                class="fa fa-trash-o"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-6 mt-3">
        <div class="row m-0 item-card p-3" style="border-radius: 15px; background-color: white;">
            <div class="col-md-3 p-0" style="border-radius: 10px;">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" alt="Image"
                    style="width: 100%; border-radius: 10px; margin-bottom: 10px;">
            </div>
            <div class="col-md-9 pl-3 pr-0 pt-0 pb-0">
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <h6 class="mb-0" style="font-weight: 700;">Item Title</h6>
                    </div>
                    <div class="col p-0 text-right"
                        style="font-weight: 700; color: #2659EE; font-size: 0.8rem;">
                        Win
                    </div>
                </div>
                <div class="m-0 p-0 mt-2">
                    <p class="product-card-description-p">Max Bid <a
                            class="product-card-description-val">4000</a></p>
                    <p class="product-card-description-p">Min Bid <a
                            class="product-card-description-val">1000</a></p>
                    <p class="product-card-description-p">One Bid Price <a
                            class="product-card-description-val">10</a></p>
                </div>
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <p class="product-card-date mt-3">
                            2020/01/01 04:00PM
                        </p>
                    </div>
                    <div class="col p-0 text-right">
                        <button class="btn btn-outline-danger card-remove-button"><i
                                class="fa fa-trash-o"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-md-6 mt-3">
        <div class="row m-0 item-card p-3" style="border-radius: 15px; background-color: white;">
            <div class="col-md-3 p-0" style="border-radius: 10px;">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" alt="Image"
                    style="width: 100%; border-radius: 10px; margin-bottom: 10px;">
            </div>
            <div class="col-md-9 pl-3 pr-0 pt-0 pb-0">
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <h6 class="mb-0" style="font-weight: 700;">Item Title</h6>
                    </div>
                    <div class="col p-0 text-right"
                        style="font-weight: 700; color: #2659EE; font-size: 0.8rem;">
                        Win
                    </div>
                </div>
                <div class="m-0 p-0 mt-2">
                    <p class="product-card-description-p">Max Bid <a
                            class="product-card-description-val">4000</a></p>
                    <p class="product-card-description-p">Min Bid <a
                            class="product-card-description-val">1000</a></p>
                    <p class="product-card-description-p">One Bid Price <a
                            class="product-card-description-val">10</a></p>
                </div>
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <p class="product-card-date mt-3">
                            2020/01/01 04:00PM
                        </p>
                    </div>
                    <div class="col p-0 text-right">
                        <button class="btn btn-outline-danger card-remove-button"><i
                                class="fa fa-trash-o"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-md-6 mt-3">
        <div class="row m-0 item-card p-3" style="border-radius: 15px; background-color: white;">
            <div class="col-md-3 p-0" style="border-radius: 10px;">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" alt="Image"
                    style="width: 100%; border-radius: 10px; margin-bottom: 10px;">
            </div>
            <div class="col-md-9 pl-3 pr-0 pt-0 pb-0">
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <h6 class="mb-0" style="font-weight: 700;">Item Title</h6>
                    </div>
                    <div class="col p-0 text-right"
                        style="font-weight: 700; color: #2659EE; font-size: 0.8rem;">
                        Win
                    </div>
                </div>
                <div class="m-0 p-0 mt-2">
                    <p class="product-card-description-p">Max Bid <a
                            class="product-card-description-val">4000</a></p>
                    <p class="product-card-description-p">Min Bid <a
                            class="product-card-description-val">1000</a></p>
                    <p class="product-card-description-p">One Bid Price <a
                            class="product-card-description-val">10</a></p>
                </div>
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <p class="product-card-date mt-3">
                            2020/01/01 04:00PM
                        </p>
                    </div>
                    <div class="col p-0 text-right">
                        <button class="btn btn-outline-danger card-remove-button"><i
                                class="fa fa-trash-o"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="row m-0 item-card p-3" style="border-radius: 15px; background-color: white;">
            <div class="col-md-3 p-0" style="border-radius: 10px;">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" alt="Image"
                    style="width: 100%; border-radius: 10px; margin-bottom: 10px;">
            </div>
            <div class="col-md-9 pl-3 pr-0 pt-0 pb-0">
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <h6 class="mb-0" style="font-weight: 700;">Item Title</h6>
                    </div>
                    <div class="col p-0 text-right"
                        style="font-weight: 700; color: #2659EE; font-size: 0.8rem;">
                        Win
                    </div>
                </div>
                <div class="m-0 p-0 mt-2">
                    <p class="product-card-description-p">Max Bid <a
                            class="product-card-description-val">4000</a></p>
                    <p class="product-card-description-p">Min Bid <a
                            class="product-card-description-val">1000</a></p>
                    <p class="product-card-description-p">One Bid Price <a
                            class="product-card-description-val">10</a></p>
                </div>
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <p class="product-card-date mt-3">
                            2020/01/01 04:00PM
                        </p>
                    </div>
                    <div class="col p-0 text-right">
                        <button class="btn btn-outline-danger card-remove-button"><i
                                class="fa fa-trash-o"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="row m-0 item-card p-3" style="border-radius: 15px; background-color: white;">
            <div class="col-md-3 p-0" style="border-radius: 10px;">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" alt="Image"
                    style="width: 100%; border-radius: 10px; margin-bottom: 10px;">
            </div>
            <div class="col-md-9 pl-3 pr-0 pt-0 pb-0">
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <h6 class="mb-0" style="font-weight: 700;">Item Title</h6>
                    </div>
                    <div class="col p-0 text-right"
                        style="font-weight: 700; color: #2659EE; font-size: 0.8rem;">
                        Win
                    </div>
                </div>
                <div class="m-0 p-0 mt-2">
                    <p class="product-card-description-p">Max Bid <a
                            class="product-card-description-val">4000</a></p>
                    <p class="product-card-description-p">Min Bid <a
                            class="product-card-description-val">1000</a></p>
                    <p class="product-card-description-p">One Bid Price <a
                            class="product-card-description-val">10</a></p>
                </div>
                <div class="row m-0 w-100">
                    <div class="col p-0">
                        <p class="product-card-date mt-3">
                            2020/01/01 04:00PM
                        </p>
                    </div>
                    <div class="col p-0 text-right">
                        <button class="btn btn-outline-danger card-remove-button"><i
                                class="fa fa-trash-o"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




















                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">sasasasas</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">22222222222222222222222222</div>
              </div>

        </div>




        </div>

    </div>
    <!-- End main div content -->

</div>
<!-- End main div -->


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

@endsection
