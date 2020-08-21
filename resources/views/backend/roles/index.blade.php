@extends('layouts.backend.app')

@section('content')

<div class="container">

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-key"></i> Roles Management
    <a href="{{ route('users.index') }}" class="btn btn-default pull-right"> <button class="btn btn-primary">Users</button></a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right"> <button class="btn btn-primary"> Permissions </button></a>
    <a href="{{ URL::to('backend/roles/create') }}" class="btn btn-success">Add Role</a>
    </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>
                    <td class="">
                    <a href="{{ URL::to('backend/roles/'.$role->id.'/edit') }}" class="btn btn-warning pull-left  mr-3">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection