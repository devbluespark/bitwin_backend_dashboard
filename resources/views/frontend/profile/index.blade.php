@extends('layouts.frontend.app')
@section('content')

<!-- Start main div -->
<div id="main">
    <div class="container">

        <div class="card border-info mb-5 mt-5 shadow">
            <div class="card-header bg-info text-light" style="margin-left: -1px;">
                <h5 class="mb-0">Profile</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('user.profiles.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">

                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        @if ($bid_user['user_image'] == NULL)
                                        <img src="{{ asset('storage/images/bid_users').'/default.png' }}" alt="" width="200" height="200" class="rounded mx-auto d-block">
                                        @else
                                        <img src="{{ asset('storage/images/bid_users').'/'.$bid_user['user_image'] }}" alt="" width="200" height="200" class="rounded mx-auto d-block">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Select Image</label>
                                        <input type="file" class="image-upload" name="user_image" accept="image/*" />

                                        <!-- send old image value -->
                                        <input type="hidden" value="{{ $bid_user['user_image'] }}" name="old_image">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="user_fname" Value="{{ old('user_fname') ?? $bid_user['user_fname']  }}">
                                        @if ($errors->has('user_fname'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('user_fname') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="user_lname" Value="{{ old('user_lname') ?? $bid_user['user_lname'] }}" placeholder="Enter last name..">
                                        @if ($errors->has('user_lname'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('user_lname') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" Value="{{ old('email') ?? $bid_user['email']  }}" disabled>
                                        @if ($errors->has('email'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('email') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>NIC</label>
                                        <input type="text" class="form-control" name="user_nic" Value="{{ old('user_nic') ?? $bid_user['user_nic'] }}" placeholder="Enter NIC number..">
                                        @if ($errors->has('user_nic'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('user_nic') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="text" class="form-control" name="user_phn1" Value="{{ old('user_phn1') ?? $bid_user['user_phn1'] }}" placeholder="Enter Mobile number..">
                                        @if ($errors->has('user_phn1'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('user_phn1') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Home Number</label>
                                        <input type="text" class="form-control" name="user_phn2" Value="{{ old('user_phn2') ?? $bid_user['user_phn2'] }}" placeholder="Enter Landline number..">
                                        @if ($errors->has('user_phn2'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('user_phn2') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea type="text" class="form-control" name="user_address" placeholder="Enter Address">{{ old('user_address') ?? $bid_user['user_address']  }}</textarea>
                                        @if ($errors->has('user_address'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('user_address') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>





</div>
<!-- End main div -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

<!-- Side Nav JS -->
<script src="{{asset('assets/frontend/assets/js/side-nav.js')}}"></script>

@endsection