@extends('layouts.frontend.app')
@section('content')

 <!-- Start main div -->
 <div id="main">
    <!-- <a style="cursor: pointer;" onclick="openNav()"><i class="fa fa-bars"></i></a> -->

    <!-- Start main div content -->
    <div class="content">

        <div class="row m-0">
            <h3 class="mt-4 page-title">Packages</h3>
        </div>

        <div class="row m-0 p-5">

            @foreach ($packages as $package)
            <div class="col-md-4">
                <div class="card mb-3 package-card">
                    <div class="card-header text-center package-card-header">
                        <h5 class="package-card-title">{{$package->package_name}}</h5>
                    </div>
                    <div class="card-body text-center pt-0 pb-5">
                        <hr class="mt-0">
                        <h1 class="package-card-h1">{{$package->package_price}}</h1>
                        <h6 class="package-card-h6">Total Roll</h6>
                        <h5 class="mt-3 mb-4 text-primary">{{$package->package_rolls}}</h5>
                        <button id="myBtn" class="btn btn-outline-primary" onclick="loadPaymentModel('{{ $package->id }}', '{{ $package->package_name}}','{{$package->package_price}}','{{$package->lk_price}}')">BUY NOW</button>
                    </div>
                </div>
            </div>
            @endforeach


        </div>



    </div>
    <!-- End main div content -->

    <!-- Modal -->
<<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="post" action="{{ route('')}}" >
              @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Select Country:</label>
              <select type="text" name="country" class="form-control" id="recipient-name">
                <option value="srilanka">Sri Lanka</option>
              </select>
            </div>

            <div class="form-group">
              <label for="message-text" class="col-form-label">Select Payment Method</label>
              <select type="text" name="payment_method" class="form-control" id="recipient-name">
                <option value="payhere">Payhere</option>
              </select>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="sumbit" class="btn btn-primary">To Proccess</button>
        </div>
    </form>
      </div>
    </div>
  </div>



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

<script>
$(document).ready(function () {

// Attach Button click event listener
// $("#myBtn").click(function(){

//     // show Modal
//     $('#exampleModal').modal('show');
// });


});

    function loadPaymentModel(package_id , package_name, package_price, lk_price){
        // alert(lk_price);
        $('#exampleModal').modal('show');
    }




</script>

@endsection
