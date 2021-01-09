@extends('layouts.backend.app')

@section('content')

<div class="col-12">

    <h1>Packages</h1><br><br>

    @can('addPackage') 
        <a href="{{ route('packages.create') }}" class="btn btn-success px-4 mb-3" ><i class="fa fa-plus"></i></a>
    @endcan

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
                    <a class="mr-3 px-3 btn btn-primary" href='{{ route("packages.show",[ 'package' => $package->id ]) }}' ><i class="fa fa-info mx-2"></i></a>
                
                <!-- Add Permission Edit Packages-->
                @can('editPackage')
                    <a class="mr-3 btn btn-warning" href='{{ route("packages.edit",[ 'package' => $package->id ]) }}' ><i class="fa fa-pencil mx-2"></i></a>
                @endcan   
                
                @can('deletePackage')
                    <button class="btn btn-danger btn-flat btn-sm delete-confirm" data-id="{{ $package->id }}" data-action="{{ route('packages.destroy',$package->id) }}">
                        <i class="fa fa-trash mx-3"></i>
                    </button>
                 @endcan
                    </div>
                    
                </td>
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




<script>
    //DataTable Script
    $(document).ready(function() {
            $('#example').DataTable();
        } );


    



        $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    var current_object = $(this);
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(result) {
        if (result) {
            var action = current_object.attr('data-action');
            var token = jQuery('meta[name="csrf-token"]').attr('content');
            var id = current_object.attr('data-id');

            $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
            $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
            $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
            $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
            $('body').find('.remove-form').submit();
        }
    });
});
    

</script>


@endsection