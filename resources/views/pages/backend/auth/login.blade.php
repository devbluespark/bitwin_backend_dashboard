@extends('layouts.login')
@section('content')
    @if(session('error'))
        <script>
            var getMessage = '{{ session('error')  }}'

            $(document).ready(function(){

                swal("Please check!", getMessage ,"error");

            });
        </script>
    @endif

    <div class="container">

        <div class="row justify-content-center" id="login-form">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Login</strong> Form
                    </div>
                    <div class="card-body card-block">
                        <form action="/login" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="hf-email" class=" form-control-label">Email</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="user_name" id="user_name" name="user_name" placeholder="Enter Email..."
                                           class="form-control">
                                    <span class="help-block">Please enter your email</span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="hf-password" class=" form-control-label">Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="hf-password" name="password"
                                           placeholder="Enter Password..." class="form-control">
                                    <span class="help-block">Please enter your password</span>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-8">

                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Login
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection