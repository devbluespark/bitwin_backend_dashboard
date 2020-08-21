@extends('layouts.backend.app')

@section('content')

<div class="container">
    
<div class="col-md-10 col-md-offset-1">
    <h1><i class="fa fa-key"></i>Permissions Management
    <a href="{{ route('users.index') }}" class="btn btn-default pull-right"><button class="btn btn-primary">Users</button></a>
    <a href="{{ route('roles.index') }}" class="btn btn-default pull-right"><button class="btn btn-primary">Roles</button></a>
    <a href="{{ URL::to('backend/permissions/create') }}" class="btn btn-success">Add Permission</a>
    </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td> 
                    <td class="btn-group">
                    <a href="{{ URL::to('backend/permissions/'.$permission->id.'/edit') }}" class="btn btn-warning pull-left mr-4">Edit</a>
                <!--    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!} -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection