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
                                        <p class="m-0" style="color: black; font-weight: 700;">05</p>
                                        <p class="mb-0"><small style="color: gray; font-weight: 600;">Buy</small>
                                        </p>
                                    </div>
                                    <div class="col p-0 m-0 bs-card-border-left">
                                        <p class="m-0" style="color: black; font-weight: 700;">05</p>
                                        <p class="mb-0"><small style="color: gray; font-weight: 600;">Buy</small>
                                        </p>
                                    </div>
                                    <div class="col p-0 m-0 bs-card-border-left">
                                        <p class="m-0" style="color: black; font-weight: 700;">05</p>
                                        <p class="mb-0"><small style="color: gray; font-weight: 600;">Buy</small>
                                        </p>
                                    </div>
                                    <div class="col p-0 m-0 bs-card-border-left">
                                        <p class="m-0" style="color: black; font-weight: 700;">05</p>
                                        <p class="mb-0"><small style="color: gray; font-weight: 600;">Buy</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4">
                        <div class="card m-0 dashboard-card">
                            <div class="card-body text-center">
                                @foreach($dashboard_details as $dashboard_detail )
                                <h1>{{ $dashboard_detail->count_referells }}</h1>
                                @endforeach
                                <p style="color: gray;" class="mb-0">All Refferals</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-0 dashboard-card">
                            <div class="card-body text-center">
                                @foreach($dashboard_details as $dashboard_detail )
                                <h1>200</h1>
                                @endforeach
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
                                    <a href="#"
                                        class="btn btn-sm rounded-pill btn-outline-primary item-card-button">BID</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <div class="col-md-3 m-0 p-3 pt-4" style="background-color: white;">
                <h5 style="font-weight: 700;">New Items</h5>
                @foreach($latest_products as $latest_product)
                <div class="row m-0 item-card">
                    <div
                        style="background-color: white; width: 40px; height: 40px; text-align: center; padding-top: 3px; border-radius: 10px;">
                        <img src="/storage/images/{{$latest_product->product_img_1}}" alt="Image" style="width: 80%;">
                    </div>
                    <div class="pl-2" style="padding-top: 12px;">
                        <p class="mb-0" style="font-size: 14px; line-height: 0px; font-weight: 600;">{{$latest_product->product_name}}</p>
                        <small style="color: gray; font-weight: 600;">20/200</small>
                    </div>
                    <div class="col m-0 p-0 text-right pr-2" style="margin-top: 5px !important;">
                        <a href="#" class="btn btn-sm rounded-pill btn-outline-primary item-card-button"
                            data-toggle="modal" data-target="#viewItemModal">BID</a>
                    </div>
                </div>
                @endforeach
            </div>

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
                        <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" alt="Image" class="w-100">
                    </div>
                    <div class="col-md-8">
                        <h5 class="font-weight-bold">Product Title</h5>
                        <p class="product-modal-description-p">Max Bid <a
                                class="product-modal-description-val">4000</a></p>
                        <p class="product-modal-description-p">Min Bid <a
                                class="product-modal-description-val">1000</a></p>
                        <p class="product-modal-description-p">One Bid Price <a
                                class="product-modal-description-val">10</a></p>

                        <div class="row m-0 mt-2">
                            <div class="col-10 m-0 p-0">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-2 m-0">
                                10%
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


<!-- End - Item view model -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
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
@endsection