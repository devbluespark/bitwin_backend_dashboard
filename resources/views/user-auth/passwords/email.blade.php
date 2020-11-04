@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center mt-5">
        <div class="card border-primary w-75 shadow">
            <div class="card-header text-center bg-primary text-light" style="margin-left: -1px;">
                <h5 class="mb-0 font-weight-bold">Reset password</h5>
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('user.password.email') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label font-weight-bold">E-Mail Address</label>
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col">
                            <button type="submit" class="btn btn-primary float-right">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
@endsection