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
    @include('layouts.backend.header')

</head>

<body>

    @include('layouts.backend.sidebar')
<div id="right-panel" class="right-panel">

    @include('layouts.backend.nav')
    @yield('content')

</div>


    @include('layouts.backend.footer')
</body>
</html>