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



{{--@endif--}}

@yield('content')


<footer class="footer" id="backend_footer">
    {{--Chatbox Button--}}
    <div class="chat-box-button">

    </div>

    <strong>company name</strong> v 1.1 &copy; Copyright 2020


</footer>

@include('layouts.backEndjavascript')
</body>
</html>