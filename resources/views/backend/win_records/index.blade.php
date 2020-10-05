@extends('layouts.backend.app')

@section('content')


<div class="container col-12">
    <h1>Win Details</h1><br><br>
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
                                  <th >Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($win_records as $win_record)
                              <tr>
                                  <td>{{ $win_record->id }}</td>
                                  <td>{{ $win_record->customer_details->user_fname }}</td>
                                  <td>{{ $win_record->product_details->product_name }}</td>
                                  <td>{{ $win_record->bid_value}}</td>
                                  <td>
                                    <a class="mr-3" href='{{ route("winrecords.show", $win_record->id ) }}' > <button class="btn btn-primary"> <i class="fa fa-info mx-2"></i></button></a>
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
