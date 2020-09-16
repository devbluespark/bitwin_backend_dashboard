@extends('layouts.frontend.app')

@section('content')

<div class="container">
<h2>Bid customer Details</h2>

fname name : {{ Auth::guard('biduser')->user()->user_fname }} 
email : {{ Auth::guard('biduser')->user()->email}}


</div>
@endsection   