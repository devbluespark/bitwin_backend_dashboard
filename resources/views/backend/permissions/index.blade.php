@extends('layouts.backend.app')

@section('content')

<div class="col-12">
    
<div class="col-12 col-md-offset-1">
    <h1><i class="fa fa-key"></i>Permissions Management
    <a href="{{ route('users.index') }}" class="btn btn-default pull-right"><button class="btn btn-primary">Users</button></a>
    <a href="{{ route('roles.index') }}" class="btn btn-default pull-right"><button class="btn btn-primary">Roles</button></a>
    <a href="{{ route('permissions.create') }}" class="btn btn-success"><i class="fa fa-plus"></i></a>
    </h1>
    <hr>
    <div class="table-responsive">
        <table id="example" class="display" style="width:100%" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Permissions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->id }}</td>
                    <td>{{ $permission->name }}</td> 
                    <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                           
                           
                        <a class="mr-3" href='{{ route("permissions.edit",[ 'permission' => $permission->id ]) }}' > <button class="btn btn-warning">
                            <i class="fa fa-pencil mx-2"></i>
                        </button></a>
              
                        <button class="btn btn-danger btn-flat btn-sm delete-confirm" data-id="{{ $permission->id }}" data-action="{{ route('permissions.destroy',$permission->id) }}">
                            <i class="fa fa-trash mx-3"></i>
                        </button>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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