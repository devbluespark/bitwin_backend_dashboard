<!DOCTYPE html>
<html  lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  date_default_timezone_set('Asia/Colombo');  ?>
  
    <title>Admin</title>
    @include('layouts.frontend.header-dashboard')

</head>

<body>



    @include('layouts.frontend.sidebar')
    @yield('content')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
    
    
    <script type="text/javascript">

    $( document ).ready(function() {
            //    var timezone = moment.tz.guess();

    
        </script>

</body>
</html>
