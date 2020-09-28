<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <a class="navbar-brand" href="./"><p>{{ $user = Auth::user()->name }}</p></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ asset('assets/backend/images/logo2.png') }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="">
                    <a href="/backend/dashboard"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Dashboard</a>

                </li>

                <li class="">
                    <a href="{{ route('currency.index')}}"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>$us vs LKR</a>
                </li>

                <!-- permission to userManagement access -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-unlock-alt"></i>Management</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-users"></i><a href="{{ route('users.index')}}">Users Management</a></li>
                        <li><i class="menu-icon fa fa-wrench"></i><a href="{{ route('permissions.index')}}">Permissions Managenet</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="{{ route('roles.index')}}">Roles Management</a></li>
                    </ul>
                </li>


                @can('accessPackage')
                <li class="">
                <a href="{{ route('packages.index')}}"> <i class="menu-icon fa fa-briefcase"></i>Packages </a>
                </li>
                @endcan

            

                @can('accessProduct')
                <li class="">
                    <a href="/backend/products"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Products</a>
                </li>
                @endcan

                @can('accessCustomer')
                <li class="">
                    <a href="/backend/customers"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Customers</a>
                </li>
                @endcan

                @can('accessBidRecord')
                 <li class="">
                    <a href="{{ route('bidrecords.index')}}"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-sort-amount-desc"></i>Bid Records</a>
                </li>
                @endcan


                @can('accessWinRecord')
                <li class="">
                    <a href="{{ route('winrecords.index')}}"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-sort-amount-desc"></i>Win Records</a>
                </li>
                @endcan

                @can('accessPayments')
                <li class="">
                    <a href="{{ route('payments-gateways.index')}}"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-btc"></i>Payments</a>
                </li>
                @endcan


                <li class="">
                    <a href="{{ route('findwinner.index')}}"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-trophy"></i>find Winner</a>
                </li>





            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
