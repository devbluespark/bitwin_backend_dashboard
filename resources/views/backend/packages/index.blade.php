@extends('layouts.backend.app')

@section('content')

<div class="container">

    <h1>Packages</h1><br><br>
   
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

            <?php if(isset($packages)) {  ?>

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
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="mr-3" href='{{ route("packages.show",[ 'package' => $package->package_id ]) }}' > <button class="btn btn-primary">Details</button></a>
                
                    <a class="mr-3" href='{{ route("packages.edit",[ 'package' => $package->package_id ]) }}' > <button class="btn btn-primary">Edit</button></a>
                
                 <!--   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Delete
                         </button>
                        <form action="{{ route('packages.destroy',['package'=>$package->package_id]) }}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form> -->
                    </div>
                    
                </th>
            </tr>
            @endforeach
         
        <?php } ?> 
            
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


<?php if(isset($package)) {  ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Packge</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you Sure...?
        </div>
        <form action="{{ route('packages.destroy',['package'=>$package->package_id]) }}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
         
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Delete</button>
        </div>
    </form>
      </div>
    </div>
  </div>

<?php } ?>


<script>
    //DataTable Script
    $(document).ready(function() {
            $('#example').DataTable();
        } );

</script>


@endsection