@extends('layouts.frontend.app')
@section('content')

<!-- Start main div -->
<div id="main" class="p-5">

  <div class="card border-info">
    <div class="card-header pb-0 justify-content-center">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active rounded-pill" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Bid Records</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rounded-pill" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Win Records</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rounded-pill" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Packages that Buy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rounded-pill" id="pills-bonus-tab" data-toggle="pill" href="#pills-bonus" role="tab" aria-controls="pills-bonus" aria-selected="false">Bonus Rolls</a>
        </li>
      </ul>
    </div>
    <div class="card-body pt-0">
      <div class="tab-content" id="pills-tabContent">

        {{-- first Tab --}}
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Bid Value</th>
                <th scope="col">Date & time</th>
                <th scope="col" class="text-right">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($all_bid_records as $all_bid_record)
              <tr>
                <td>#</td>
                <td>{{$all_bid_record->product_name }}</td>
                <td>{{$all_bid_record->bid_value}}</td>
                <td>{{$all_bid_record->created_at }}</td>
                <td class="text-right">
                  <a class="btn btn-primary btn-sm rounded-pill font-weight-bold" href="{{ route('user.bid_products.show',['bid_product' => $all_bid_record->products_id ] )}}">
                    <i class="fa fa-eye mr-2"></i> View
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <!-- Pagination - Start -->
          <div class="row m-0 justify-content-center">
            {{ $all_bid_records->links() }}
          </div>
          <!-- Pagination - End -->

        </div>

        {{-- Second tab --}}
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Bid Value</th>
                <th scope="col">Date & time</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($win_details as $win_detail)


              <tr>
                <td>#</td>
                <td>{{$win_detail->product_name }}</td>
                <td>{{$win_detail->bid_value}}</td>
                <td>{{$win_detail->created_at }}</td>
                <td><a class="btn btn-primary" href="{{ route('user.bid_products.show',['bid_product' => $win_detail->products_id ] )}}">Product Details</a></td>
              </tr>

              @endforeach
            </tbody>
          </table>



        </div>

        {{-- third tab --}}
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">


          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Package Name</th>
                <th scope="col">Package Rolls</th>
                <th scope="col">Remain Rolls</th>
                <th scope="col">Date & time</th>
                {{-- <th scope="col">Actions</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach ($packages_buy as $package_buy)


              <tr>
                <td>{{$package_buy->package_name }}</td>
                <td>{{$package_buy->package_rolls }}</td>
                <td>{{$package_buy->remain_rolls}}</td>
                <td>{{$package_buy->created_at }}</td>
                {{-- <td><a class="btn btn-primary" href="{{ route('user.bid_products.show',['bid_product' => $win_detail->products_id ] )}}">Product Details</a></td> --}}
              </tr>

              @endforeach
            </tbody>
          </table>




        </div>

        {{-- Fourth tab --}}
        <div class="tab-pane fade" id="pills-bonus" role="tabpanel" aria-labelledby="pills-bonus-tab">

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">From</th>
                <th scope="col">Received Rolls</th>
                <th scope="col">Remain Rolls</th>
                <th scope="col">Date & time</th>
                {{-- <th scope="col">Actions</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach ($bonus_rolls as $bonus_roll)


              <tr>
                <td>{{$bonus_roll->child_user_name }}</td>
                <td>{{$bonus_roll->received_rolls }}</td>
                <td>{{$bonus_roll->remain_rolls}}</td>
                <td>{{$bonus_roll->created_at }}</td>
                {{-- <td><a class="btn btn-primary" href="{{ route('user.bid_products.show',['bid_product' => $win_detail->products_id ] )}}">Product Details</a></td> --}}
              </tr>

              @endforeach
            </tbody>
          </table>




        </div>




      </div>
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