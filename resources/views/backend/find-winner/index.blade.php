@extends('layouts.backend.app')

@section('content')

<div class="col-12">

    <h1>Find Winners</h1><br><br>



<div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">


    <table id="example" class="display" style="width:100%" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Rolls</th>
                <th>Product Percentage</th>
                <th>Find Winner</th>
            </tr>
        </thead>
        <tbody>




            <?php if(isset($products_to_find_winners)) {  ?>

            @foreach ($products_to_find_winners as $product_to_find_winner)
            <tr>
                <td>{{ $product_to_find_winner['id'] }}</td>
                <td>{{ $product_to_find_winner['product_name'] }}</td>
                <td>{{ $product_to_find_winner['product_price'] }}</td>
                 <td>{{ $product_to_find_winner['product_bid_rolls'] }}</td>
                 <td>{{ $product_to_find_winner['product_percentage'] }} %</td>
                 <td>
                     <a class="mr-3 px-3 btn btn-success" href='{{ route("findwinner.cal",[ 'product_id' => $product_to_find_winner['id'] ]) }}' >Find</i></a>
                     </td>


            </tr>
            @endforeach

        <?php } ?>



        </tbody>

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
