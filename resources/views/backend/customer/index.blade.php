@extends('layouts.backend.app')

@section('content')

<div class="">
    <div >
        <div class="row">
           <div class="col-md-12 col-md-offset-1">
              <div class="panel panel-default">
                 <div class="panel-heading">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <strong class="mr-5 ">Customers</strong>
                                    <a href="{{ route('customers.create') }}"><button class="btn btn-primary mb-3 ml-5"> <i class="fa fa-plus"></i> </button></a>
                                  </div>
                            </div>
                        </div>
                    </div>
              </div>
           </div>
        </div>
    </div>
    
  <div class="row justify-content-center">
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
                  @if ($customer->user_active == 1)
                  <button type="button" onclick="unpublish_product({{ $customer->id }})" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalunpublish"> <i class="fa fa-check"></i></button>                
                  @else
                  <button type="button" onclick="publish_product({{ $customer->id }})" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalpublish"> <i class="fa fa-check"></i></button>                
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



</div>
</div>
</div>
</div>
</div>

<?php if(isset($product)) {  ?>

  <!-- Modal to delete -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete product(<b><span id="delete_product_name"></span></b>)</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"> 
            Are you Sure...?
          </div>
          <form action="productdelete" method="POST">
              {{csrf_field()}}
          <input  type="hidden" name="id"  id="hidden_delete">
           
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Delete</button>
          </div>
      </form>
        </div>
      </div>
    </div>

     <!-- Modal to publish -->
  <div class="modal fade" id="exampleModalpublish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Publish product(<b><span id="publish_product_name"></span></b>)</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"> 
            Are you Sure...?
          </div>
          <form action="productpublish" method="POST">
              {{csrf_field()}}
          <input  type="hidden" name="id" id="hidden_publish" >
           
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Publish</button>
          </div>
      </form>
        </div>
      </div>
    </div>

    <!-- Modal to unpublish -->
  <div class="modal fade" id="exampleModalunpublish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Unublish product(<b><span id="publish_product_name"></span></b>)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> 
          Are you Sure...?
        </div>
        <form action="productunpublish" method="POST">
            {{csrf_field()}}
        <input  type="hidden" name="id" id="hidden_unpublish" >
         
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Unublish</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  
  <?php } ?>

<script>
    //DataTable Script
    $(document).ready(function() {
            $('#example').DataTable();
        } );

        //Delete button scirpt
    function delete_product(id) {
    
    document.querySelector('#hidden_delete').value = id;
   
    }
     //publish button scirpt
     function publish_product(id) {
       
        document.querySelector('#hidden_publish').value = id;
    
  
    }
    //publish button scirpt
    function unpublish_product(id) {
       
       document.querySelector('#hidden_unpublish').value = id;
   
 
   }

</script>


@endsection