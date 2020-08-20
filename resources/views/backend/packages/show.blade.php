@extends('layouts.backend.app')

@section('content')

<div class="container">

    <h1>Pckage Details</h1><br><br>
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">



          
            <form class="form-horizontal" >

              <div class="form-row" >

                <div class="form-group col-md-6">
                  <label for="inputEmail4">Package Name</label>
                  <input type="text" class="form-control" id="package_name" name="package_name" value="{{ $package['package_name'] }}" disabled>
                  
              </div>
                
                
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Package Descriptions</label>
                  <textarea id="package_description" type="text" class="form-control" name="package_description" disabled>{{ $package['package_description'] }}</textarea>
                </div>
                

              </div>
              <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Package Price</label>
                    <input type="number" class="form-control" id="package_price" value="{{ $package['package_price']  }}" name="package_price" disabled>
    
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Package Rolls</label>
                    <input type="number" name="package_rolls" class="form-control"  value="{{ $package['package_rolls'] }}" id="package_rolls" disabled>
                    
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="inputState">Active/Deactive</label>
  
                      <select class="form-control" id="package_active" name="package_active" value="{{ $package['package_active'] }}" disabled >
                          @if ($package['package_active']===1)
                          <option value="1">Active</option>
                          <option value="0">Deactive</option>
                          @else
                          <option value="0">Deactive</option> 
                          <option value="1">Active</option>
                          @endif
                           
                      </select>

                      
                    </div>

                </div>



            </form>


                

              <a href="{{ route('packages.index')}}"><button  class="btn btn-primary">Back</button></a>


            </div>
        </div>
    </div>
</div>


    @endsection