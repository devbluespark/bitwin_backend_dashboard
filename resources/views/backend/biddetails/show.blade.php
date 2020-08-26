@extends('layouts.backend.app')
@section('content')

<div class="">
    <div class="col-md-12 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <strong class="mr-5 ">Bids</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
        <div class="row">
           
        </div>  
    <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">
             <table id="example" class="display"  class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product ID</th>
                            <th>Bid Value</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>            
                            @foreach ($bid_records as $bid_record)
                                    <tr>
                                        <td>{{ $bid_record->id }}</td>
                                        <td>{{ $bid_record->product_id }}</td>
                                        <td>{{ $bid_record->bid_value }}</td>
                                        <td>               
                                        <a class="mr-3" href='' > <button class="btn btn-primary"> <i class="fa fa-eye"></i></button></a>                  
                                        {{-- <a class="mr-3" href='' > <button class="btn btn-primary"> <i class="fa fa-eye"></i></button></a>                   --}}                   
                                        </th>
                                    </tr>
                            @endforeach               
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Product ID</th>
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