
    <!-- Start side nav -->
    <div id="mySidenav" class="sidenav" style="border-right: 2px solid var(--info);">
        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
        <div class="text-center mb-4">
            <h1>LOGO</h1>
        </div>
        <div class="p-2">
        <a id="dashboard-a" href="{{ route("user.dashboard.index") }}" class="left-nav-link"><i class="material-icons mr-3">dashboard</i>
                Dashboard</a>
        </div>
        <div class="p-2">
            <a href="{{route("user.products.index")}}" class="left-nav-link"><i class="material-icons mr-3">category</i> Bid Item</a>
        </div>
        <div class="p-2">
            <a href="{{route("user.referrals.index")}}" class="left-nav-link"><i class="material-icons mr-3">people</i> Referels</a>
        </div>
        <div class="p-2">
            <a href="{{route("user.history.index")}}" class="left-nav-link"><i class="material-icons mr-3">restore</i> History</a>
        </div>
        <div class="p-2 ">
            <a href="{{ route("user.packages.index")}}" class="left-nav-link n"><i class="material-icons mr-3">redeem</i> Packages</a>
        </div>
        <div class="p-2">
            <a href="{{ route("user.profiles.index")}}" class="left-nav-link"><i class="material-icons mr-3">contacts</i> Profile</a>
        </div>
        <div class="p-2">
            <a class="left-nav-link" href="{{ route('user.logout') }}"
                                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><i class="material-icons mr-3">login</i> Logout</a>

                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
        </div>
    </div>
    <!-- End side nav -->

    <a class="btn" id="sideNavToggleBtn" onclick="navToggle()"><i class="fa fa-bars"></i></a>