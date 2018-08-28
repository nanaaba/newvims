
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">

            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}"><i class="icon-speedometer"></i>
                    Dashboard</a>
            </li>

            <?php
            if (Session::get('role') == "Administrator") {
                ?>

                <li class=" nav-item nav-dropdown {{ Request::is('drivers*') ? 'active' : '' }}">

                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-lg fa-fw fa-user"></i> Driver</a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item {{ Request::is('drivers/new') ? 'active' : '' }}">
                            <a href="{{ url('drivers/new') }}"  class="nav-link">
                                New Driver</a>
                        </li>
                        <li class="nav-item {{ Request::is('drivers/all') ? 'active' : '' }}">
                            <a href="{{ url('drivers/all') }}"  class="nav-link">
                                All Drivers</a>
                        </li>
                        <li class="nav-item  {{ Request::is('drivers/assign') ? 'active' : '' }}">
                            <a href="{{ url('drivers/assign') }}"  class="nav-link">
                                Assign Vehicles</a>
                        </li>

                        <li class="nav-item {{ Request::is('drivers/blacklisted') ? 'active' : '' }}">
                            <a href="{{ url('drivers/blacklisted') }}"  class="nav-link">
                                Blacklisted Drivers</a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item nav-dropdown  {{ Request::is('vehicles*') ? 'active' : '' }}">

                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-car"></i> Vehicle</a>

                    <ul class="nav-dropdown-items">

                        <li class="nav-item  {{ Request::is('vehicles/new') ? 'active' : '' }}">
                            <a href="{{ url('vehicles/new') }}"  class="nav-link">
                                New Vehicle</a>
                        </li>
                        <li class="nav-item  {{ Request::is('vehicles/all') ? 'active' : '' }}">
                            <a href="{{ url('vehicles/all') }}"  class="nav-link">
                                All Vehicles</a>
                        </li>


                    </ul>
                </li>


                <li class=" nav-item nav-dropdown {{ Request::is('trips*') ? 'active' : '' }}">

                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-bus"></i> Trips</a>

                    <ul class="nav-dropdown-items">


                        <li class="nav-item {{ Request::is('trips/new') ? 'active' : '' }}">
                            <a href="{{ url('trips/new') }}"  class="nav-link">
                                New Trip</a>
                        </li>
                        <li class="nav-item {{ Request::is('trips/all') ? 'active' : '' }}">
                            <a href="{{ url('trips/all') }}"  class="nav-link">
                                All Trips</a>
                        </li>


                    </ul>
                </li>


                <li class=" nav-item nav-dropdown {{ Request::is('cases*') ? 'active' : '' }}">

                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-bus"></i> Reported Cases</a>

                    <ul class="nav-dropdown-items">


                        <li class="nav-item {{ Request::is('cases/all') ? 'active' : '' }}">
                            <a href="{{ url('cases/all') }}"  class="nav-link">
                                All Cases</a>
                        </li>
                        <li class="nav-item {{ Request::is('cases/agents') ? 'active' : '' }}">
                            <a href="{{ url('cases/agents') }}"  class="nav-link">
                                Agents Cases</a>
                        </li>


                    </ul>
                </li>


           

                <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('users') }}">

                        <i class="fa fa-lg fa-fw fa-users"></i>
                        User Management

                    </a>
                </li>
                <!--                <li class="nav-item  {{ Request::is('reports*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('reports') }}">
                                        <i class="fa fa-lg fa-fw fa-file"></i>
                                        Report
                                    </a>
                                </li>-->
<!--                <li class="nav-item {{ Request::is('audits*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('audits') }}">
                        <i class="fa fa-lg fa-fw fa-clipboard"></i>
                        Audit Logs
                    </a>
                </li>-->
                <?php
            }
            ?>


            <?php
            if (Session::get('role') == "Agent") {
                ?>

                <li class=" nav-item nav-dropdown {{ Request::is('drivers*') ? 'active' : '' }}">

                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-lg fa-fw fa-user"></i> Driver</a>

                    <ul class="nav-dropdown-items">

                        <li class="nav-item {{ Request::is('drivers/all') ? 'active' : '' }}">
                            <a href="{{ url('drivers/all') }}"  class="nav-link">
                                All Drivers</a>
                        </li>
                        <li class="nav-item  {{ Request::is('drivers/assign') ? 'active' : '' }}">
                            <a href="{{ url('drivers/assign') }}"  class="nav-link">
                                Assign Vehicles</a>
                        </li>

                        <li class="nav-item {{ Request::is('drivers/blacklisted') ? 'active' : '' }}">
                            <a href="{{ url('drivers/blacklisted') }}"  class="nav-link">
                                Blacklisted Drivers</a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item nav-dropdown  {{ Request::is('vehicles*') ? 'active' : '' }}">

                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-car"></i> Vehicle</a>

                    <ul class="nav-dropdown-items">


                        <li class="nav-item  {{ Request::is('vehicles/all') ? 'active' : '' }}">
                            <a href="{{ url('vehicles/all') }}"  class="nav-link">
                                All Vehicles</a>
                        </li>


                    </ul>
                </li>


                <li class=" nav-item nav-dropdown {{ Request::is('trips*') ? 'active' : '' }}">

                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-bus"></i> Trips</a>

                    <ul class="nav-dropdown-items">


                        <li class="nav-item {{ Request::is('trips/all') ? 'active' : '' }}">
                            <a href="{{ url('trips/all') }}"  class="nav-link">
                                All Trips</a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item  {{ Request::is('agentcases*') ? 'active' : '' }}">
                    <a class="nav-link"  href="{{ url('agentcases') }}">

                        <i class="fa fa-lg fa-fw fa-suitcase"></i>
                        Reported Cases
                    </a>
                </li>

                <!--                <li class="nav-item  {{ Request::is('reports*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('reports') }}">
                                        <i class="fa fa-lg fa-fw fa-file"></i>
                                        Report
                                    </a>
                                </li>-->

                <?php
            }
            ?>
        </ul>
    </nav>
</div>