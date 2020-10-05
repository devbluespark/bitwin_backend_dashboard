@extends('layouts.backend.app')

@section('content')
<div class="col-12">
<h1>Customers</h1><br><br>


  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">
                <table id="example" class="display"  class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Email</th>
                            <th>Time Zone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->user_fname }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->timezone }}</td>
                            <td>

                              <a class="mr-3" href='{{ route("customers.show",$customer->id ) }}' > <button class="btn btn-primary"> <i class="fa fa-info mx-2"></i></button></a>

                              @can('allDetailsCustomer')
                              <a class="mr-3" href='/backend/customer_details_all/{{$customer->id }}' > <button class="btn btn-warning"> <i class="fa fa fa-money mx-2""></i></button></a>
                              @endcan


                              @can('changeActiveCustomer')
                              @if ($customer->user_active == 1)
                              <button type="button" onclick="sweet_alert_deactivate({{ $customer->id }})" class="btn btn-success" data-toggle="modal" data-target="#exampleModaldeactivate"> <i class="fa fa-check"></i></button>
                              @else
                              <button type="button" onclick="sweet_alert_activate({{ $customer->id }})" class="btn  btn-danger" data-toggle="modal" data-target="#exampleModalactivate"> <i class="fa fa-times"></i></button>
                              @endif
                              @endcan


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
