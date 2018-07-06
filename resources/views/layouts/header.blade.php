

<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    &nbsp;&nbsp;

    <div style="padding:20px;" id="search-chassis0">
        <form class="form-search form-inline"   action="{{url('search')}}" method="get">
            <i class="fa fa-search"></i>&nbsp;
            <input type="search" id="search"  name="searchparam" placeholder="Number Plate, Chasis Number etc"  />
        </form>
    </div>





    <ul class="nav navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Welcome, {{ Session::get('username')}}
            </a>

            <div class="dropdown-menu dropdown-menu-right">


<!--                <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Profile</a>-->
                <a class="dropdown-item" href="{{url('logout')}}"><i class="fa fa-lock"></i> Logout</a>
            </div>
        </li>
        <button class="navbar-toggler aside-menu-toggler" type="button">
  <!--        <span class="navbar-toggler-icon"></span>-->
        </button>
    </ul>
</header>