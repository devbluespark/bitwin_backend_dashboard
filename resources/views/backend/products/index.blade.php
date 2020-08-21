@extends('layouts.backend.app')

@section('content')

<div class="">
    <div >
        <div class="row">
           <div class="col-md-12 col-md-offset-1">
              <div class="panel panel-default">
                 <div class="panel-heading">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <strong class="mr-5 ">Products</strong>
                                    <a href="/backend/addproducts"><button class="btn btn-primary mb-3 ml-5">Add </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
           </div>
        </div>
    </div>
    
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">
    <table id="example" class="display"  class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Min</th>
                <th>Max</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_bid_min_value }}</td>
                <td>{{ $product->product_bid_max_value }}</td>
                <td>
                    {{-- <a class="mr-3" href='{{ route("product.show",[ 'package' => $package->package_id ]) }}' > <button class="btn btn-primary">Details</button></a> --}}
                
                    <a class="mr-3" href='/backend/editproducts/{{$product->id}}' > <button class="btn btn-primary">Edit</button></a>
                
                    <a href='#' > <button class="btn btn-primary">Delete</button></a>
                </th>
            </tr>
            @endforeach
            
           
            
            
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Coins</th>
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
        } );

</script>


@endsection