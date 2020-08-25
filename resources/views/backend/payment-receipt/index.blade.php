@extends('layouts.backend.app')

@section('content')

<div class="container">

    <h1>Payments with Receipts</h1><br><br>
 
<div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">

        <h2 class="text-center text-warning">Not Confirm</h2>
    <table id="example" class="display" style="width:100%" class="table">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Payment Date</th>
                <th>Payment Amount</th>
                <th>Bank</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>

            
           
            <?php if(isset($payments_not_confirmed)) {  ?>

            @foreach ($payments_not_confirmed as $payment_not_confirmed)
            <tr>
                <td>{{ $payment_not_confirmed->BidUser->user_fname }}</td>
                <td>{{ $payment_not_confirmed->created_at }}</td>
                <td>{{ $payment_not_confirmed->payment_amount }}</td>
                <td>{{ $payment_not_confirmed->payment_bank }}</td>

                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="mr-3 px-3 btn btn-primary" href='{{ route("payments-receipts.show",[ 'payment-receipt' => $payment_not_confirmed->id ]) }}' ><i class="fa fa-info mx-2"></i></a>
                  

                    <button class="btn btn-warning btn-flat btn-sm payment-confirm" data-id="{{ $payment_not_confirmed->id }}" data-action="{{ route('payments-receipts.confirmed') }}">
                        <i class="fa fa-check-square-o mx-3"></i>
                    </button>
                
                    </div>
                    
                </td>
            </tr>
            @endforeach
         
        <?php } ?> 

      
            
        </tbody>
       
    </table>

</div>





<div class="card p-3">

    <h2 class="text-center text-info">Confirmed</h2>   
    <table id="example2" class="display" style="width:100%" class="table">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Payment Date</th>
                <th>Pyment Amount</th>
                <th>Bank</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>

            

            <?php if(isset($payments_confirmed)) {  ?>

            @foreach ($payments_confirmed as $payment_confirmed)
            <tr>
                <td>{{ $payment_confirmed->BidUser->user_fname }}</td>
                <td>{{ $payment_confirmed->created_at }}</td>
                <td>{{ $payment_confirmed->payment_amount }}</td>
                <td>{{ $payment_confirmed->payment_bank }}</td>

                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="mr-3 px-3 btn btn-primary" href='{{ route("payments-receipts.show",[ 'payment-receipt' => $payment_confirmed->id ]) }}' ><i class="fa fa-info mx-2"></i></a>
    
                
                    </div>
                    
                </td>
            </tr>
            @endforeach
         
        <?php } ?> 

            
        </tbody>
       
    </table>

</div>






</div>
</div>
</div>
</div>




<script>
    //DataTable Script
    $(document).ready(function() {
            $('#example').DataTable();
            $('#example2').DataTable();
        } );




        $('.payment-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    var current_object = $(this);
    swal({
        title: 'Confirme ?',
        text: 'This record and it`s details wii be Confiremd payment',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(result) {
        if (result) {
            var action = current_object.attr('data-action');
            var token = jQuery('meta[name="csrf-token"]').attr('content');
            var id = current_object.attr('data-id');

            $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
            $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
            $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
            $('body').find('.remove-form').submit();
        }
    });
});
    

</script>


@endsection