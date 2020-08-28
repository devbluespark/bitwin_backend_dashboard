<!DOCTYPE html>
<html  lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  date_default_timezone_set('Asia/Colombo');  ?>
  
    <title>Admin</title>
    @include('layouts.frontend.header')

</head>

<body>

{{-- @include('layouts.frontend.sidebar') --}}
{{-- <div id="right-panel" class="right-panel"> --}}

    @include('layouts.frontend.nav')
    @yield('content')

{{-- </div> --}}


    @include('layouts.frontend.footer')
</body>
</html>