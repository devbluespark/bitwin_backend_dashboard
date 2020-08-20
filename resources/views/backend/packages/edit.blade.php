@extends('layouts.backend.app')

@section('content')

<div class="container">

    <h1>Packages Edit</h1><br><br>
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">



            <form class="form-horizontal" method="POST" action='{{ route("packages.update",[ "package" => $package['package_id']])}}'>
                {{ csrf_field() }}  {{ method_field('PUT') }}
                <div class="form-row" >

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Package Name</label>
                    <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Package Name" value="{{ $package['package_name'] ?? old('package_name') }}" required autofocus>
                    @if ($errors->has('package_name'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('package_name') }}</strong>
                      </span>
                    @endif
                </div>
                  
                  
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Package Descriptions</label>
                    <textarea id="package_description" type="text" class="form-control" name="package_description"  required autofocus>{{ $package['package_description'] ?? old('package_description') }}</textarea>
                    @if ($errors->has('package_description'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('package_description') }}</strong>
                        </span>
                     @endif
                  </div>
                  

                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Package Price</label>
                      <input type="number" class="form-control" id="package_price" value="{{ $package['package_price'] ?? old('package_price') }}" name="package_price" placeholder="Package price" autofocus required>
                      @if ($errors->has('package_price'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('package_price') }}</strong>
                      </span>
                     @endif
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Package Rolls</label>
                      <input type="number" name="package_rolls" class="form-control"  value="{{ $package['package_rolls'] ?? old('package_rolls') }}" id="package_rolls" placeholder="Package Rolls" required autofocus>
                      @if ($errors->has('package_rolls'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('package_rolls') }}</strong>
                      </span>
                  @endif
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputState">Active/Deactive</label>
    
                        <select class="form-control" id="package_active" name="package_active" value="{{ $package['package_active'] ?? old('package_active') }}" required >
                            @if ($package['package_active']===1)
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                            @else
                            <option value="0">Deactive</option> 
                            <option value="1">Active</option>
                            @endif
                             
                        </select>

                        @if ($errors->has('package_active'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('package_active') }}</strong>
                      </span>
                  @endif
                      </div>

                  </div>


                
                <button type="submit" class="btn btn-primary">Update</button>
              </form>



            </div>
        </div>
    </div>
</div>


    @endsection