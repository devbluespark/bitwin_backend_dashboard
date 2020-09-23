@extends('layouts.backend.app')

@section('content')

<div class="col-12">

    <h1>Currency</h1><br><br>



<div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card p-3">

            {{--  <form action="" method="" class="form-inline">

                {{ csrf_field() }}
                <div class="form-inline">
                  <div class="form-group col-md-6">
                    <label for="product_name">Roll Value (us Dollers)</label>
                    <input type="text" class="form-control" required name="product_name" value="{{ $product['product_name'] ?? old('product_name') }}" placeholder="">
                    @if ($errors->has('product_name'))
                    <span class="help-block">
                      <div class='alert alert-danger text-center'>
                        {{ $errors->first('product_name') }}
                      </div>
                    </span>
                  @endif
                  </div>
                </div>


            </form>  --}}


            <div class="form-inline row">

                <div class="col-6">




                    <form class="form-inline" action="">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <label for="roll_price">Roll Price(US Dollers):</label>
                        <input type="number" class="form-control ml-3" id="roll_price" name="roll_price"  value="{{ $roll_price['roll_price']}}">
                        </div>


                        <button type="button" class="btn btn-success ml-3 roll_price">update</button>
                    </form>





                </div>

                <div class="col-6">


                <form class="form-inline" action="">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for="convert_us_lkr">US Dollers 1 TO LKR:</label>
                    <input type="number" class="form-control ml-3" id="convert_us_lkr" name="convert_us_lkr"  value="{{ $us_to_lkr->us_to_lkr }}">
                    </div>


                    <button type="button" class="btn btn-success ml-3 convert_us_lkr">update</button>
                </form>


                </div>


            </div>




        </div>
    </div>
</div>
</div>


<script>


    $(document).ready(function(){



        $(document).on('click','.roll_price',function(){

            var roll_price = document.getElementById('roll_price').value;

            $.ajax({
                url : '{{ route("ajax-roll-price")}}',
                method : "post",
                data : {roll_price:roll_price, _token:"{{csrf_token()}}"},
                dataType : "json",
                success : function (response) {

                    console.log(response);

                }

                });



        });



        $(document).on('click','.convert_us_lkr',function(){

            var convert_us_lkr = document.getElementById('convert_us_lkr').value;


            $.ajax({
                url : '{{ route("ajax-convert-us-lkr")}}',
                method : "post",
                data : {convert_us_lkr:convert_us_lkr, _token:"{{csrf_token()}}"},
                dataType : "json",
                success : function (response) {

                    console.log(response);

                }

                });

        });

    });


</script>




@endsection
