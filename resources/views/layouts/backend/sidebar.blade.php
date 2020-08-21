<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{ asset('assets/backend/images/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ asset('assets/backend/images/logo2.png') }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li>
                    <a href="#"><i class="menu-icon fa fa-laptop ">Sample</i></a>
                </li>
                <li class="">
                <a href="{{ route('packages.index')}}"> <i class="menu-icon fa fa-dashboard"></i>Packages </a>
                </li>
                {{-- {!!  $htmlMenu !!} --}}

                {{-- Products side bar items --}}
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Products</a>
                    <ul class="sub-menu children dropdown-menu animated fadeIn">
                        <li>
                            <a href="/backend/products">VIEW </a>
                        </li>
                        <li>
                            <a href="/backend/addproducts">ADD </a>
                        </li>
                       
                    </ul>
                
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
