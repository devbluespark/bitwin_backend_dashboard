@extends('layouts.backend.app')

@section('content')

<div class="container">

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> User Management 
        <a href="{{ route('roles.index') }}" class="btn btn-default pull-right"> <button class="btn btn-primary">Roles</button></a>
        <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right"><button class="btn btn-primary">Permissions</button></a>
        <a href="{{ route('users.create') }}" class="btn btn-success"><i class="fa fa-plus"></i></a>
        </h1>
        <hr>
        <div class="table-responsive">

    <table id="example" class="display" style="width:100%" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th class="">Actions</th>
            </tr>
        </thead>
        <tbody>
            

                    
                <?php if(isset($users)) {  ?>
    
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>
        
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                           
                           
                            <a class="mr-3" href='{{ route("users.edit",[ 'package' => $user->id ]) }}' > <button class="btn btn-warning">
                                <i class="fa fa-pencil mx-2"></i>
                            </button></a>
                  
                            <button class="btn btn-danger btn-flat btn-sm delete-confirm" data-id="{{ $user->id }}" data-action="{{ route('users.destroy',$user->id) }}">
                                <i class="fa fa-trash mx-3"></i>
                            </button>
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
                <th>Email</th>
                <th>Roles</th>
                <th class="">Actions</th>
            </tr>

        </tfoot>
     
    </table>
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