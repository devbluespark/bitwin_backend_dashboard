<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Bid Win System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    @include('layouts.frontend.header-dashboard')

    <style>
        #main thead th {
            border-top: 0;
        }
    </style>
</head>

<body>



    @include('layouts.frontend.sidebar')
    @yield('content')



</body>

</html>