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

                <!-- permission to userManagement access -->
           

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-unlock-alt"></i>Management</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-users"></i><a href="{{ route('users.index')}}">Users Management</a></li> 
                        <li><i class="menu-icon fa fa-wrench"></i><a href="{{ route('permissions.index')}}">Permissions Managenet</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="{{ route('roles.index')}}">Roles Management</a></li>
                    </ul>
                </li>
             

                
                <li class="">
                <a href="{{ route('packages.index')}}"> <i class="menu-icon fa fa-briefcase"></i>Packages </a>
                </li>
                {{-- {!!  $htmlMenu !!} --}}
        
                <li class="">
                    <a href="/backend/products"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Products</a>
                          
                </li>
                <li class="">
                    <a href="/backend/customers"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Customers</a>
                          
                </li>



                <li class="menu-item-has-children dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Payments</a>
                    <ul class="sub-menu children dropdown-menu">
                 <!--   <li><i class="menu-icon fa fa-usd"></i><a href="">Payments All</a></li> -->
                    <li><i class="menu-icon fa fa-btc"></i><a href="{{ route('payments-gateways.index')}}">Payment Gateway</a></li>
                    <li><i class="menu-icon fa fa-book"></i><a href="{{ route('payments-receipts.index')}}">Payment with Reciepts</a></li>
                    </ul>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
