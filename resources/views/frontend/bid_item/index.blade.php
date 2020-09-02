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

            <!-- Sample Card -->
            <div class="col-md-2 mt-3 card p-3 bid-item-card">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
                <div class="card-body bid-item-card-body text-center w-100">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text bid-item-card-text">
                        Max Bid <a class="bid-item-card-val">4000</a><br>
                        Min Bid <a class="bid-item-card-val">1000</a>
                    </p>
                </div>
                <div class="card-footer bid-item-card-footer mt-3">
                    <button class="btn btn-outline-primary btn-block">BID</button>
                </div>
            </div>
            <!-- Sample Card -->

            <!-- Start - Sample Cards -->
            <div class="col-md-2 mt-3 card p-3 bid-item-card">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
                <div class="card-body bid-item-card-body text-center w-100">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text bid-item-card-text">
                        Max Bid <a class="bid-item-card-val">4000</a><br>
                        Min Bid <a class="bid-item-card-val">1000</a>
                    </p>
                </div>
                <div class="card-footer bid-item-card-footer mt-3">
                    <button class="btn btn-outline-primary btn-block">BID</button>
                </div>
            </div>
            <div class="col-md-2 mt-3 card p-3 bid-item-card">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
                <div class="card-body bid-item-card-body text-center w-100">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text bid-item-card-text">
                        Max Bid <a class="bid-item-card-val">4000</a><br>
                        Min Bid <a class="bid-item-card-val">1000</a>
                    </p>
                </div>
                <div class="card-footer bid-item-card-footer mt-3">
                    <button class="btn btn-outline-primary btn-block">BID</button>
                </div>
            </div>
            <div class="col-md-2 mt-3 card p-3 bid-item-card">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
                <div class="card-body bid-item-card-body text-center w-100">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text bid-item-card-text">
                        Max Bid <a class="bid-item-card-val">4000</a><br>
                        Min Bid <a class="bid-item-card-val">1000</a>
                    </p>
                </div>
                <div class="card-footer bid-item-card-footer mt-3">
                    <button class="btn btn-outline-primary btn-block">BID</button>
                </div>
            </div>
            <div class="col-md-2 mt-3 card p-3 bid-item-card">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
                <div class="card-body bid-item-card-body text-center w-100">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text bid-item-card-text">
                        Max Bid <a class="bid-item-card-val">4000</a><br>
                        Min Bid <a class="bid-item-card-val">1000</a>
                    </p>
                </div>
                <div class="card-footer bid-item-card-footer mt-3">
                    <button class="btn btn-outline-primary btn-block">BID</button>
                </div>
            </div>
            <div class="col-md-2 mt-3 card p-3 bid-item-card">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
                <div class="card-body bid-item-card-body text-center w-100">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text bid-item-card-text">
                        Max Bid <a class="bid-item-card-val">4000</a><br>
                        Min Bid <a class="bid-item-card-val">1000</a>
                    </p>
                </div>
                <div class="card-footer bid-item-card-footer mt-3">
                    <button class="btn btn-outline-primary btn-block">BID</button>
                </div>
            </div>
            <div class="col-md-2 mt-3 card p-3 bid-item-card">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
                <div class="card-body bid-item-card-body text-center w-100">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text bid-item-card-text">
                        Max Bid <a class="bid-item-card-val">4000</a><br>
                        Min Bid <a class="bid-item-card-val">1000</a>
                    </p>
                </div>
                <div class="card-footer bid-item-card-footer mt-3">
                    <button class="btn btn-outline-primary btn-block">BID</button>
                </div>
            </div>
            <div class="col-md-2 mt-3 card p-3 bid-item-card">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
                <div class="card-body bid-item-card-body text-center w-100">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text bid-item-card-text">
                        Max Bid <a class="bid-item-card-val">4000</a><br>
                        Min Bid <a class="bid-item-card-val">1000</a>
                    </p>
                </div>
                <div class="card-footer bid-item-card-footer mt-3">
                    <button class="btn btn-outline-primary btn-block">BID</button>
                </div>
            </div>
            <div class="col-md-2 mt-3 card p-3 bid-item-card">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
                <div class="card-body bid-item-card-body text-center w-100">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text bid-item-card-text">
                        Max Bid <a class="bid-item-card-val">4000</a><br>
                        Min Bid <a class="bid-item-card-val">1000</a>
                    </p>
                </div>
                <div class="card-footer bid-item-card-footer mt-3">
                    <button class="btn btn-outline-primary btn-block">BID</button>
                </div>
            </div>
            <div class="col-md-2 mt-3 card p-3 bid-item-card">
                <img src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" class="card-img-top w-100 bid-item-card-img" alt="Image">
                <div class="card-body bid-item-card-body text-center w-100">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text bid-item-card-text">
                        Max Bid <a class="bid-item-card-val">4000</a><br>
                        Min Bid <a class="bid-item-card-val">1000</a>
                    </p>
                </div>
                <div class="card-footer bid-item-card-footer mt-3">
                    <button class="btn btn-outline-primary btn-block">BID</button>
                </div>
            </div>
            <!-- End - Sample Cards -->

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