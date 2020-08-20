@extends('layouts.backend.app')

@section('content')

<div class="container">

    <h1>Pckage Details</h1><br><br>
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">



                <div class="form-row">

                  <div class="form-group col-md-6">
                  <label for="inputEmail4">Package Name: {{ $package['package_name'] }} </label>
                </div>
                  
                  
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Package Descriptions: {{ $package['package_description'] }}</label> 
                  </div>
                  
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Package Price: {{ $package['package_price'] }}</label>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Package Rolls: {{ $package['package_rolls'] }}</label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputState">Active/Deactive : @if ($package['package_active'] === 1)
                            <p>Active</p>
                        @else
                            <p>Deactive</p>
                        @endif</label>
    

                        @if ($errors->has('package_active'))
                      <span class="help-block">
                          <strong>{{ $errors->first('package_active') }}</strong>
                      </span>
                  @endif
                      </div>

                  </div>


                

              <a href="{{ route('packages.index')}}"><button  class="btn btn-primary">Back</button></a>


            </div>
        </div>
    </div>
</div>


    @endsection