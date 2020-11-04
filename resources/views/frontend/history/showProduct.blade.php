@extends('layouts.frontend.app')
@section('content')

<!-- Start main div -->
<div id="main" class="p-5">

    <div class="card border-info shadow">
        <div class="card-header bg-info text-light">
            <h5 class="mb-0 text-center">Product Details</h5>
        </div>
        <div class="card-body">
            <div class="row m-0">
                <img class="rounded mx-auto d-block" src="{{ asset('storage/images/products').'/'.$product_details['product_img_1'] }}" length="200" height="200" alt="">
                <div class="col-3">
                    @if (empty($win_details))
                    <div class="alert alert-info font-weight-bold" role="alert">
                        <i class="fa fa-info mr-2"></i> Not Winner Yet
                    </div>
                    @else
                    <div class="alert alert-info font-weight-bold" role="alert">
                        <p class="small font-weight-bold"><i class="fa fa-trophy mr-2"></i>Win by,</p>
                        <div class="text-center">
                            <img class="showProcutWinCard" src="{{asset('assets/frontend/assets/img/noimage.jpg')}}" alt="Winner">
                        </div>
                        <div class="text-center mt-2">
                            FirstName
                        </div>

                    </div>
                    @endif
                </div>
            </div>

            <div class="row m-0 mb-3">
                <div class="mr-2 font-weight-bold"><a class="text-secondary">Name : </a>{{ $product_details['product_name'] }}</div>
                <div class="mr-2 font-weight-bold"><a class="text-secondary">Price : </a>{{ $product_details['product_price'] }} $</div>
            </div>

            <div class="row m-0">
                <h5>All records for product</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Bid Value</th>
                            <th scope="col">Date and Time</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($bid_records as $bid_record)
                        <tr>
                            <th>#</th>
                            <td>{{ $bid_record->bid_value }}</td>
                            <td>{{ $bid_record->created_at }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>



                 <!-- Pagination - Start -->
          <div class="row m-0 justify-content-center">
            {{ $bid_records->links() }}
          </div>
          <!-- Pagination - End -->

        </div>
    </div>


</div>
<!-- End main div -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

<!-- Side Nav JS -->
<script src="{{asset('assets/frontend/assets/js/side-nav.js')}}"></script>

@endsection
