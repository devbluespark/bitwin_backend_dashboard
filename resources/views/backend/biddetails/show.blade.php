@extends('layouts.backend.app')

@section('content')

<div class="container">


<div class="">
    <div class="card">
        <div class="card-header">
            <strong class="card-title mb-3">Profile of {{ $bid_records->user_fname }} </strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" width="200px" src="/storage/images/s_1597991551.jpeg" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">{{ $bid_records->user_fname }}  {{ $bid_records->user_lname }}</h5>
                <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{ $bid_records->user_address }}</div>
            </div>           
            <hr>
            <div class="col-md-3 col-lg-3">
                <div class="card bg-flat-color-4 text-light">
                    <div class="card-body">
                        <div class="h4 m-0">$ {{ $bid_records->user_own_coins }}</div>
                        <div>Total Available Coins...</div>
                        <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">          
            <form class="form-horizontal" >
              <div class="form-row" >
                <div class="form-group col-md-6">
                  <label for="inputEmail4">First Name</label>
                  <input type="text" class="form-control" id="" name="" value="{{ $bid_records->user_fname }}" disabled>                  
              </div>               
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Last Name</label>
                  <input type="text" class="form-control" id="" name="" value="{{ $bid_records->user_lname }}" disabled>
                </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="text" class="form-control" id="" value="{{$bid_records->user_email}}" name="" disabled>
    
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Mobile No</label>
                    <input type="number" name="" class="form-control"  value="{{ $bid_records->user_phn1 }}" id="package_rolls" disabled>
                  
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Mobile No Extra</label>
                    <input type="number" name="" class="form-control"  value="{{ $bid_records->user_phn2 }}" id="package_rolls" disabled>        
                  </div>       
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Status</label>
                    @if ($bid_records->user_active == 1)
                    <input type="text" name="" class="form-control"  value="Active" id="" disabled>        
                    @else 
                    <input type="text" name="" class="form-control"  value="Inactive" id="" disabled>        
                    @endif

                </div>
                </div>
            </form>
             <a href="{{ route('bid_recordss.index')}}"><button  class="btn btn-primary">Back</button></a>
            </div>
        </div>
    </div>
</div>


    @endsection