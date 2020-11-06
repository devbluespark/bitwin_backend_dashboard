@extends('layouts.backend.app')

@section('content')

<div class="container col-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title mb-3">Profile of {{ $customer->username }} </strong>
        </div>
        <div class="card-body">
            @if(isset($success))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{$success}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if(isset($error))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{$error}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="mx-auto d-block">
                <?php
                if ($customer->user_image === NULL) {
                    $customer->user_image = "default.png";
                }

                ?>
                <img class="rounded-circle mx-auto d-block" width="200px" src="{{ asset('storage/images/bid_users').'/'.$customer->user_image }}" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">{{ $customer->user_fname }} {{ $customer->user_lname }}</h5>
                <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{ $customer->user_address }}</div>
            </div>
            <hr>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card p-3">
                <form class="form-horizontal" action="{{ route('customer.update') }}" method="POST">
                    @csrf
                    <input name="user_id" type="text" class="form-control" value="{{ $customer->id }}" hidden>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>First Name</label>
                            <input name="fName" type="text" class="form-control" value="{{ $customer->user_fname }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Last Name</label>
                            <input name="lName" type="text" class="form-control" value="{{ $customer->user_lname }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control" value="{{$customer->email}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Mobile No</label>
                            <input name="mobile1" type="number" class="form-control" value="{{ $customer->user_phn1 }}" id="package_rolls">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Mobile No Extra</label>
                            <input name="mobile2" type="number" class="form-control" value="{{ $customer->user_phn2 }}" id="package_rolls">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Status</label>
                            @if ($customer->user_active == 1)
                            <input type="text" name="" class="form-control" value="Active" disabled>
                            @else
                            <input type="text" name="" class="form-control" value="Inactive" disabled>
                            @endif
                        </div>
                    </div>

                    <button class="btn btn-success mt-2 mb-2 float-right" type="submit">Save Changes</button>
                </form>

            </div>

            <a href="{{ route('customers.index')}}"><button class="btn btn-primary">Back</button></a>
        </div>
    </div>

    @endsection