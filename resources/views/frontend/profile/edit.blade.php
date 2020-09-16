@extends('layouts.frontend.app')

@section('content')

<div class="container">
<h2>Bid customer Update Details</h2>





<form class="form-horizontal" method="POST" action="{{ route('profile.update',[ 'profile'=> $bid_user['id']])}}" enctype="multipart/form-data">
              {{ csrf_field() }}  {{ method_field('PUT') }}
              <div class="form-row" >

                <div class="form-group col-md-6">
                  <label for="inputEmail4">customer ID</label>
                  <input disabled type="text" class="form-control" id="id" name="id" placeholder="" value="{{ $bid_user['id'] ?? old('id') }}" required autofocus>
                  @if ($errors->has('id'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('id') }}</strong>
                    </span>
                  @endif
              </div>
                
                
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Customr First Name</label>
                  <input id="user_fname" type="text" class="form-control" name="user_fname" value="{{ $bid_user['user_fname'] ?? old('user_fname') }}" required autofocus>
                  @if ($errors->has('user_fname'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('user_fname') }}</strong>
                      </span>
                   @endif
                </div>
                

              </div>

              <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Customr Last Name</label>
                    <input type="text" class="form-control" id="user_lname" value="{{ $bid_user['user_lname'] ?? old('user_lname') }}" name="user_lname"  autofocus required>
                    @if ($errors->has('user_lname'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('user_lname') }}</strong>
                    </span>
                   @endif
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="text" disabled name="email" class="form-control"  value="{{ $bid_user['email'] ?? old('email') }}" id="email"  required autofocus>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                  </div>
                </div>

                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">phn 1</label>
                    <input type="number" name="user_phn1" class="form-control"  value="{{ $bid_user['user_phn1'] ?? old('user_phn1') }}" id="user_phn1"  required autofocus>
                    @if ($errors->has('user_phn1'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('user_phn1') }}</strong>
                    </span>
                @endif
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Phon2</label>
                    <input type="number" name="user_phn2" class="form-control"  value="{{ $bid_user['user_phn2'] ?? old('user_phn2') }}" id="user_phn2"  required autofocus>
                    @if ($errors->has('user_phn2'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('user_phn2') }}</strong>
                    </span>
                @endif
                </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">address</label>
                      <input type="text" name="user_address" class="form-control"  value="{{ $bid_user['user_address'] ?? old('user_address') }}" id="user_address"  required autofocus>
                      @if ($errors->has('user_address'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('user_address') }}</strong>
                      </span>
                  @endif
                      </div>
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">NIC</label>
                      <input type="text" name="user_nic" class="form-control"  value="{{ $bid_user['user_nic'] ?? old('user_nic') }}" id="user_nic"  required autofocus>
                      @if ($errors->has('user_nic'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('user_nic') }}</strong>
                      </span>
                  @endif
                      </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                     
                      </div>
                      <div class="form-group col-md-6">
                      <label for="inputPassword4">User Image</label>
                      <input type="file" name="user_image" class="form-control" >
                     
                      @if ($errors->has('user_image'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('user_image') }}</strong>
                      </span>
                  @endif
                      </div>
                  </div>




              
              <button type="submit" class="btn btn-primary">Update</button>
            </form>



</div>
@endsection   