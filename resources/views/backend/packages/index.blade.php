@extends('layouts.backend.app')

@section('content')

<div class="container">

    <h1>Pckages</h1><br><br>
   
<a href="{{ route('packages.create') }}"><button class="btn btn-primary mb-3">Add Package</button></a>
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
                <th>Active/Deactive</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($packages as $package)
            <tr>
                <td>{{ $package->package_id }}</td>
                <td>{{ $package->package_name }}</td>
                <td>{{ $package->package_price }}</td>
                <td>{{ $package->package_rolls }}</td>
                <td>
                    <?php if (($package->package_active) === 1) { ?>
                        <b>Active</b>
                    <?php }else { ?>
                        <b>Deactive</b>
                   <?php }  ?>
                </td>
                <td>
                    <a class="mr-3" href='{{ route("packages.show",[ 'package' => $package->package_id ]) }}' > <button class="btn btn-primary">Details</button></a>
                
                    <a class="mr-3" href='{{ route("packages.edit",[ 'package' => $package->package_id ]) }}' > <button class="btn btn-primary">Edit</button></a>
                
                    <a href='{{ route("packages.destroy",[ 'package' => $package->package_id ]) }}' > <button class="btn btn-primary">Delete</button></a>
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
                <th>Active/Deactive</th>
                <th class="text-center">Actions</th>
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