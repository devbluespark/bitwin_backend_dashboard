
    <!-- Start side nav -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="text-center mb-4">
            <h1>LOGO</h1>
        </div>
        <div class="p-2">
            <a href="{{route("dashboard.index")}}" class="left-nav-link"><i class="material-icons mr-3">dashboard</i>
                Dashboard</a>
        </div>
        <div class="p-2">
            <a href="/products" class="left-nav-link"><i class="material-icons mr-3">category</i> Bid Item</a>
        </div>
        <div class="p-2">
            <a href="{{route("referrels.index")}}" class="left-nav-link"><i class="material-icons mr-3">people</i> Referels</a>
        </div>
        <div class="p-2">
            <a href="{{route("history.index")}}" class="left-nav-link"><i class="material-icons mr-3">restore</i> History</a>
        </div>
        <div class="p-2 ">
            <a href="{{ route("packages.index")}}" class="left-nav-link n"><i class="material-icons mr-3">redeem</i> Packages</a>
        </div>
        <div class="p-2">
            <a href="#" class="left-nav-link"><i class="material-icons mr-3">contacts</i> Profile</a>
        </div>
        <div class="p-2">
            <a href="#" class="left-nav-link"><i class="material-icons mr-3">login</i> Logout</a>
        </div>
    </div>
    <!-- End side nav -->