@extends('layouts.backend.app')

@section('content')

<div class="container">

<h1>Payments Details </h1><br><br>
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">


            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">##</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>payment ID</td>
                  <td>{{  $payment_receipt['id']  }}</td>
                </tr>
                <tr>
                  <td>Payment Date</td>
                  <td>{{ $payment_receipt['created_at'] }}</td>
                </tr>
                <tr>
                  <td>Payment Amount</td>
                  <td>{{ $payment_receipt['payment_amount']  }}</td>
                </tr>
                <tr>
                  <td>Payment bank</td>
                  <td>{{  $payment_receipt['payment_bank'] }}</td>
                </tr>
                <tr>
                  <td>customer ID</td>
                  <td>{{ $payment_receipt->BidUser->id  }}</td>
                </tr>

                <tr>
                  <td>Customer Name</td>
                  <td>{{ $payment_receipt->BidUser->user_fname }}</td>
                </tr>


                <tr>
                  <td>Selected Package Name</td>
                  <td>{{  $payment_receipt->package->package_name }}</td>
                </tr>

                <tr>
                  <td>Package Price</td>
                  <td>{{ $payment_receipt->package->package_price }} USD</td>
                </tr>
     
                <tr>
                  <td>Image</td>
                  <td>
                    <img  onclick="preview_image()" src=" {{ asset('public/images/').'/'.$payment_receipt['receipt_image']}}" alt="" data-toggle="modal" data-target=".bd-example-modal-lg" id="imageresource">
                  </td>
                </tr>
 
              </tbody>
            </table>

              <a href="{{ route('payments-receipts.index')}}"><button  class="btn btn-primary">Back</button></a>


            </div>
        </div>
    </div>
</div>



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
   
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Image preview</h4>
        </div>
        <div class="modal-body">
          <img src="" id="imagepreview" style="width: 100%; height: 100%;" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
   
  </div>
</div>






<script>



function preview_image(path) {
  $('#imagepreview').attr('src', $('#imageresource').attr('src')); 
}

</script>


    @endsection