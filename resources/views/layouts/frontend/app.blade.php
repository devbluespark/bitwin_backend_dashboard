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




</body>
</html>
