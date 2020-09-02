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
                  <td>{{ $payment_gateway['id'] }}</td>
                </tr>
                <tr>
                  <td>Payment Date</td>
                  <td>{{ $payment_gateway['created_at'] }}</td>
                </tr>
                <tr>
                  <td>Payment Amount</td>
                  <td>{{ $payment_gateway['payment_amount']  }}</td>
                </tr>
                <tr>
                  <td>Payment bank</td>
                  <td>{{  $payment_gateway['payment_bank'] }}</td>
                </tr>
                <tr>
                  <td>customer ID</td>
                  <td>{{  $bid_user['id'] }}</td>
                </tr>

                <tr>
                  <td>Customer Name</td>
                <td>{{ $bid_user['user_fname'] }}</td>
                </tr>


                <tr>
                  <td>Selected Package Name</td>
                <td>{{ $packages['package_name']}}</td>
                </tr>

                <tr>
                  <td>Selected Package Price</td>
                  <td>{{ $packages['package_price']}} USD</td>
                </tr>

                


              </tbody>
            </table>


                

              <a href="{{ route('payments-gateways.index')}}"><button  class="btn btn-primary">Back</button></a>


            </div>
        </div>
    </div>
</div>


    @endsection