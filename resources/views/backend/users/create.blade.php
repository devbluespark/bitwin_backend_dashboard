@extends('layouts.backend.app')

@section('content')

<div class="container">

<div class='col-md-10 col-lg-offset-4'>
    <h1><i class='fa fa-user-plus'></i> Create User</h1>
    <hr>
    {!! Form::open(array('url' => 'backend/users')) !!}
    <div class="form-group @if ($errors->has('name')) has-error @endif">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', '', array('class' => 'form-control')) !!}
    </div>
    <div class="form-group @if ($errors->has('email')) has-error @endif">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', '', array('class' => 'form-control')) !!}
    </div>
    <div class="form-group @if ($errors->has('roles')) has-error @endif">
        @foreach ($roles as $role)
            {!! Form::checkbox('roles[]',  $role->id ) !!}
            {!! Form::label($role->name, ucfirst($role->name)) !!}<br>
        @endforeach
    </div>
    <div class="form-group @if ($errors->has('password')) has-error @endif">
        {!! Form::label('password', 'Password') !!}<br>
        {!! Form::password('password', array('class' => 'form-control')) !!}
    </div>
    <div class="form-group @if ($errors->has('password')) has-error @endif">
        {!! Form::label('password', 'Confirm Password') !!}<br>
        {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
    </div>
    {!! Form::submit('Register', array('class' => 'btn btn-primary')) !!}
    {!! Form::close() !!}
</div>
@endsection