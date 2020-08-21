@extends('layouts.backend.app')

@section('content')

<div class="container">
<div class='col-lg-8 col-lg-offset-4'>
    <h1><i class='fa fa-key'></i> Create Role</h1>
    <hr>
    {{ Form::open(array('url' => 'backend/roles')) }}
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <h5><b>Assign Permissions</b></h5>
    <div class='form-group'>
        @foreach ($permissions as $permission)
            {{ Form::checkbox('permissions[]',  $permission->id ) }}
            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
        @endforeach
    </div>
    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
</div>
@endsection