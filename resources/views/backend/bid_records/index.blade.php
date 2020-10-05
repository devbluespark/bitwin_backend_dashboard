@extends('layouts.backend.app')

@section('content')


<div class="container col-12">

    <h1>Bid details</h1><br><br>
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card p-3">
                      <table id="example" class="display"  class="table">
                          <thead>
                              <tr>
                                  <th >ID</th>
                                  <th>User Name</th>
                                  <th>Product Name</th>
                                  <th>Bid Value</th>
                                  <th>Date</th>
                                  <th >Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($bid_records as $bid_record)
                              <tr>
                                  <td>{{ $bid_record->id }}</td>
                                  <td>{{ $bid_record->customer_name->user_fname }}</td>
                                  <td>{{ $bid_record->Product_name->product_name }}</td>
                                  <td>{{ $bid_record->bid_value}}</td>
                                  <td>{{ $bid_record->created_at}}</td>
                                  <td>
                                    <a class="mr-3" href='{{ route("bidrecords.show",$bid_record->id) }}' > <button class="btn btn-primary"> <i class="fa fa-info mx-2"></i></button></a>
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                          <tfoot>
                              <tr>
                                  <th>ID</th>
                                  <th>User Name</th>
                                  <th>Product Name</th>
                                  <th>Bid Value</th>
                                  <th>Date</th>
                                  <th>Actions</th>
                              </tr>
                          </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    //DataTable Script
    $(document).ready(function() {
            $('#example').DataTable();
        });
</script>


@endsection
