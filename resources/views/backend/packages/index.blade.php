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

            
            <!-- Add Permission View Packages-->
            @can('viewPackage')

            <?php if(isset($packages)) {  ?>

            @foreach ($packages as $package)
            <tr>
                <td>{{ $package->id }}</td>
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
                    <a class="mr-3" href='{{ route("packages.show",[ 'package' => $package->id ]) }}' > <button class="btn btn-primary">Details</button></a>
                
                <!-- Add Permission Edit Packages-->
                @can('viewPackage')
                    <a class="mr-3" href='{{ route("packages.edit",[ 'package' => $package->id ]) }}' > <button class="btn btn-primary">Edit</button></a>
                @endcan   
                
                @can('deletePackage')
                   <button type="button" onclick="delete_package({{ $package->id }})" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Delete
                    </button>
                 @endcan
                    </div>
                    
                </td>
            </tr>
            @endforeach
         
        <?php } ?> 

        @endcan
            
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
          <h5 class="modal-title" id="exampleModalLabel">Delete Packge(<b><span id="delete_package_name"></span></b>)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> 
          Are you Sure...?
        </div>
        <form action="{{ route('packages.delete') }}" method="post">
            {{csrf_field()}}
            <input  type="hidden" name="id" id="id">
         
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


    //Delete button scirpt
    function delete_package(id) {
        //Preparing the values
        let delete_package_name = document.getElementById(id+'-name').innerHTML;

        //Setting the values
        document.getElementById("delete_package_name").innerHTML = delete_package_name;
        document.getElementById('id').value = id;
    }

    

</script>


@endsection