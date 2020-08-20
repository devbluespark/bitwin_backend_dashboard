@extends('layouts.backend.app')

@section('content')

<div class="container">

    <h1>Pckage Details</h1><br><br>
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">



          
           
                <div class="form-row">

                  <div class="form-group col-md-5">

                    <div  class="control-label col-md-4" for="inputEmail4"><b>Package Name:</b></div>
                  <div  class="control-label col-md-6 " for="inputEmail4"><b class="text-left">{{ $package['package_name'] }}</b></div>
                </div>

                <div class="form-group col-md-7">

                  <div  class="control-label col-md-5" for="inputEmail4"><b>Package Descriptions:</b></div>
                <div  class="control-label col-md-7 " for="inputEmail4"><b class="text-left">{{  $package['package_description']  }}</b></div>
              </div>
                  
                </div>


                <div class="form-row">

                  <div class="form-group col-md-4">

                    <div  class="control-label col-md-4" for="inputEmail4"><b>Rolls:</b></div>
                  <div  class="control-label col-md-6 " for="inputEmail4"><b class="text-left">{{ $package['package_rolls'] }}</b></div>
                </div>

                <div class="form-group col-md-4">

                  <div  class="control-label col-md-4" for="inputEmail4"><b>Price:</b></div>
                <div  class="control-label col-md-6 " for="inputEmail4"><b class="text-left">{{  $package['package_price']  }}</b></div>
              </div>

              <div class="form-group col-md-4">

                <div  class="control-label col-md-4" for="inputEmail4"><b>Active/Deactive:</b></div>
                <div  class="control-label col-md-6 " for="inputEmail4"><b class="text-left">
             
                @if ($package['package_active'] === 1)
                            <p>Active</p>
                        @else
                            <p>Deactive</p>
                        @endif
              </b></div>
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
                        <label for="inputState">Active/Deactive : </label>
    

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