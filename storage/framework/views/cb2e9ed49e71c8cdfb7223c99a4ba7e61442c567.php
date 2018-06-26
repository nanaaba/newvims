
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
            <!--            <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">-->

            <a href="#">
                <span>
                    Welcome, <?php echo e(Session::get('username')); ?>

                </span>
            </a> 

        </span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <!-- 
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>

            <li  class="<?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('dashboard')); ?>">
                    <i class="fa fa-lg fa-fw fas fa-tachometer-alt"></i>
                    <span class="menu-item-parent">Dashboard</span> 

                </a>
            </li>
            <li class="<?php echo e(Request::is('drivers*') ? 'active' : ''); ?>">
                <a href="#">
                    <i class="fa fa-lg fa-fw fa-user"></i> 
                    <span class="menu-item-parent">Driver</span></a>
                <ul>
                    <li class="<?php echo e(Request::is('drivers/new') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('drivers/new')); ?>"  class="menu-item">
                            New Driver</a>
                    </li>
                    <li class="<?php echo e(Request::is('drivers/all') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('drivers/all')); ?>"  class="menu-item">
                            All Drivers</a>
                    </li>
                    <li class="<?php echo e(Request::is('drivers/assign') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('drivers/assign')); ?>"  class="menu-item">
                            Assign Vehicles</a>
                    </li>

                </ul>
            </li>


            <li class="  <?php echo e(Request::is('vehicles*') ? 'active' : ''); ?>">
                <a href="#"> <i class="fa fa-lg fa-fw fa-car"></i> 
                    <span class="menu-item-parent">Vehicle</span></a>
                <ul class="sub-menu">


                    <li class="<?php echo e(Request::is('vehicles/new') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('vehicles/new')); ?>"  class="menu-item">
                            New Vehicle</a>
                    </li>
                    <li class="<?php echo e(Request::is('vehicles/all') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('vehicles/all')); ?>"  class="menu-item">
                            All Vehicles</a>
                    </li>


                </ul>
            </li>


            <li class="  <?php echo e(Request::is('trips*') ? 'active' : ''); ?>">
                <a href="#"> <i class="fa fa-lg fas fa-bus"></i> 
                    <span class="menu-item-parent">Trips</span></a>
                <ul class="sub-menu">


                    <li class="<?php echo e(Request::is('trips/new') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('trips/new')); ?>"  class="menu-item">
                            New Trip</a>
                    </li>
                    <li class="<?php echo e(Request::is('trips/all') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('trips/all')); ?>"  class="menu-item">
                            All Trips</a>
                    </li>


                </ul>
            </li>

            <li class="<?php echo e(Request::is('agentcases*') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('agentcases')); ?>">

                    <i class="fa fa-lg fa-fw fa-suitcase"></i>
                    <span class="menu-item-parent">Reported Cases</span> 
                </a>
            </li>

            <li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('users')); ?>">

                    <i class="fa fa-lg fa-fw fa-users"></i>
                    <span class="menu-item-parent">User Management</span> 

                </a>
            </li>
            <li class="<?php echo e(Request::is('reports*') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('reports')); ?>">
                    <i class="fa fa-lg fa-fw fa-file"></i>
                    <span class="menu-item-parent"> Report</span> 
                </a>
            </li>
            <li class="<?php echo e(Request::is('audits*') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('audits')); ?>">
                    <i class="fa fa-lg fa-fw fa-clipboard"></i>
                    <span class="menu-item-parent">Audit Logs</span>
                </a>
            </li>
        </ul>
    </nav>


    <span class="minifyme" data-action="minifyMenu"> 
        <i class="fa fa-arrow-circle-left hit"></i> 
    </span>

</aside>
