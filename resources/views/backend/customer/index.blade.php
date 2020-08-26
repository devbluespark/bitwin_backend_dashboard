@extends('layouts.backend.app')

@section('content')

<div class="">
    <div class="col-md-12 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <strong class="mr-5 ">Customers</strong>
                            {{-- <a href="{{ route('customers.create') }}"><button class="btn btn-primary mb-3 ml-5"> <i class="fa fa-plus"></i> </button></a> --}}
                          </div>
                    </div>
                </div>
            </div>
      </div>
  </div>
</div>

<div class="container">  
  <div class="row">
      <div class="col-md-12">
          <div class="card p-3">
                <table id="example" class="display"  class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Email</th>
                            <th>NIC</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>            
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->user_fname }}</td>
                            <td>{{ $customer->user_email }}</td>
                            <td>{{ $customer->user_nic }}</td>
                            <td>               
                              <a class="mr-3" href='{{ route("customers.show",$customer->id ) }}' > <button class="btn btn-primary"> <i class="fa fa-eye"></i></button></a>                  
                              <a class="mr-3" href='{{ route("biddetails.show",$customer->id ) }}' > <button class="btn btn-primary"> <i class="fa fa-eye"></i></button></a>                  
                              @if ($customer->user_active == 1)
                              <button type="button" onclick="sweet_alert_deactivate({{ $customer->id }})" class="btn btn-danger" data-toggle="modal" data-target="#exampleModaldeactivate"> <i class="fa fa-check"></i></button>                
                              @else
                              <button type="button" onclick="sweet_alert_activate({{ $customer->id }})" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalactivate"> <i class="fa fa-check"></i></button>                
                              @endif
                            </th>
                        </tr>
                        @endforeach
                            
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Coins</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>


                <form action="customerdeactivate" method="POST" id="deactivate_form">
                    {{csrf_field()}}
                <input  type="hidden" name="id" id="hidden_deactive">
                </form>

                <form action="customeractivate" method="POST" id="activate_form">
                  {{csrf_field()}}
                <input  type="hidden" name="id" id="hidden_active" >
                </form>
           
        </div>
      </div>
    </div>
</div>
<script>
//DataTable Script
$(document).ready(function() {
            $('#example').DataTable();
      });

//activate customer sweet alert
function sweet_alert_activate(id){
      Swal.fire({
            title: 'Do you want to Activate ?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            })
            .then((result) => {
              if (result.value) {
                return activate_customer(id)
              }
            })
     }
//Deactivate customer sweet alert
function sweet_alert_deactivate(id){
      Swal.fire({
            title: 'Do you want to Deactivate ?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            })
            .then((result) => {
              if (result.value) {
                return deactivate_customer(id)
              }
            })
     }

     //activate button scirpt
     function activate_customer(id) {      
        document.querySelector('#hidden_active').value = id; 
        document.querySelector('#activate_form').submit()     

    }
    //deavtivate button scirpt
    function deactivate_customer(id) {     
       document.querySelector('#hidden_deactive').value = id; 
       document.querySelector('#deactivate_form').submit()     

   }

</script>


@endsection