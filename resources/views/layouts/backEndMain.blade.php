<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <?php  date_default_timezone_set('Asia/Colombo');  ?>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
    @include('layouts.backEndstylesheets')

</head>

<body>


{{--@if (Sentinel::check() == true)--}}
@include('layouts.left-menu')
<div id="right-panel" class="right-panel">
@include('layouts.top-menu')
{{--@endif--}}

@yield('content')

</div>


@include('layouts.backEndjavascript')
</body>
</html>