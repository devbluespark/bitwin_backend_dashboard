@extends('layouts.backend.app')
@section('content')

<div class="container col-12" >
    <div class="row">
       <div class="col-md-12 col-md-offset-1">
          <div class="panel panel-default">
             <div class="panel-heading">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <strong class="card-title">Win Details</strong>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 ml-5">
                                    <div class="card row">
                                        <div class="card-body">
                                        <div class=" card-block col-6 mr-4 ">
                                            <div class="form-group"><label for="company"  class=" form-control-label">Product ID</label>
                                                <input type="text" id="company" value="{{$product_details->id}}" class="form-control">
                                            </div>
                                            <div class="form-group"><label for="vat" class=" form-control-label">Product Name</label>
                                                   <input type="text" id="vat" value="{{$product_details->product_name}}" class="form-control">
                                             </div>
                                            <div class="form-group"><label for="street" class=" form-control-label">Product Price</label>
                                                    <input type="text" id="street" value="{{$product_details->product_price}}" class="form-control">
                                             </div>    
                                             <div class="form-group"><label for="street" class=" form-control-label">User name</label>
                                                <input type="text" id="street" value="{{$user_records->user_fname}}" class="form-control">
                                         </div> 
                                         <div class="form-group"><label for="street" class=" form-control-label">User Mobile</label>
                                            <input type="text" id="street" value="{{$user_records->user_phn1}}" class="form-control">
                                            </div> 
                                            <div class="form-group"><label for="street" class=" form-control-label">User NIC</label>
                                                <input type="text" id="street" value="{{$user_records->user_nic}}" class="form-control">
                                            </div> 
                                                                                        
                                            </div> 
                                       <div class="col-2"></div>
                                       
                                       <div class="col-lg-4">
                                           <div class="row form-group">                                                       
                                               <div class="row">
                                                   <div class="text-center col-4">
                                                       <img src="/storage/images/{{$product_details->product_img_1}}" width="" class="rounded" alt="...">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                            
                                          </div> 
                                        </div> 
                                    </div>                                  
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection