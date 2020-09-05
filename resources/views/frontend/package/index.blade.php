@extends('layouts.frontend.app')
@section('content')

 
    <!-- Start main div -->
    <div id="main">
        <a class="btn" id="sideNavToggleBtn" onclick="navToggle()"><i class="fa fa-bars"></i></a>

        <!-- Start main div content -->
        <div class="content">

            <div class="row m-0">
                <h3 class="mt-4 page-title">Packages</h3>
            </div>

            <div class="row m-0 p-5" id="packagesRow">
                @foreach($packages as $package)
                <div class="col-md-4">
                    <div class="card mb-3 package-card">
                        <div class="card-header text-center package-card-header">
                            <h5 class="package-card-title">{{$package->package_name}}</h5>
                        </div>
                        <div class="card-body text-center pt-0 pb-5">
                            <hr class="mt-0">
                            <h1 class="package-card-h1">{{$package->package_rolls}}</h1>
                            <h6 class="package-card-h6">Total Roll</h6>
                            <h5 class="mt-3 mb-4 text-primary">{{$package->package_price}} LKR</h5>
                            <button class="btn btn-outline-primary">BUY NOW</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <!-- End main div content -->

        <!-- Start - Footer -->
        <footer class="p-5 dashboard-footer">
            <div class="row m-0">
                <div class="col p-0">
                    <hr>
                    <p class="dashboard-footer-p">Designed & Developed By <a href="#">Bluespark</a> 2020</p>
                </div>
            </div>
        </footer>
        <!-- End - Footer -->
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

<!-- Dashboard JS -->
<script src="{{asset('assets/frontend/assets/js/dashboard.js')}}"></script>

@endsection