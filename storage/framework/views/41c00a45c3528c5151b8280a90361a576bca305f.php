
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                Dashboard
            </li>
            <li class="nav-item <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('dashboard')); ?>"><i class="icon-speedometer"></i>
                    Dashboard</a>
            </li>


            <li class=" nav-item nav-dropdown <?php echo e(Request::is('drivers*') ? 'active' : ''); ?>">

                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-lg fa-fw fa-user"></i> Driver</a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item <?php echo e(Request::is('drivers/new') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('drivers/new')); ?>"  class="nav-link">
                            New Driver</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::is('drivers/all') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('drivers/all')); ?>"  class="nav-link">
                            All Drivers</a>
                    </li>
                    <li class="nav-item  <?php echo e(Request::is('drivers/assign') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('drivers/assign')); ?>"  class="nav-link">
                            Assign Vehicles</a>
                    </li>

                </ul>
            </li>


            <li class="nav-item nav-dropdown  <?php echo e(Request::is('vehicles*') ? 'active' : ''); ?>">

                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-car"></i> Vehicle</a>

                <ul class="nav-dropdown-items">

                    <li class="nav-item  <?php echo e(Request::is('vehicles/new') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('vehicles/new')); ?>"  class="nav-link">
                            New Vehicle</a>
                    </li>
                    <li class="nav-item  <?php echo e(Request::is('vehicles/all') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('vehicles/all')); ?>"  class="nav-link">
                            All Vehicles</a>
                    </li>


                </ul>
            </li>


            <li class=" nav-item nav-dropdown <?php echo e(Request::is('trips*') ? 'active' : ''); ?>">
               
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-bus"></i> Trips</a>

                <ul class="nav-dropdown-items">


                    <li class="nav-item <?php echo e(Request::is('trips/new') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('trips/new')); ?>"  class="nav-link">
                            New Trip</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::is('trips/all') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('trips/all')); ?>"  class="nav-link">
                            All Trips</a>
                    </li>


                </ul>
            </li>

            <li class="nav-item  <?php echo e(Request::is('agentcases*') ? 'active' : ''); ?>">
                <a class="nav-link"  href="<?php echo e(url('agentcases')); ?>">

                    <i class="fa fa-lg fa-fw fa-suitcase"></i>
                   Reported Cases
                </a>
            </li>

            <li class="nav-item <?php echo e(Request::is('users*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('users')); ?>">

                    <i class="fa fa-lg fa-fw fa-users"></i>
                   User Management

                </a>
            </li>
            <li class="nav-item  <?php echo e(Request::is('reports*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('reports')); ?>">
                    <i class="fa fa-lg fa-fw fa-file"></i>
                     Report
                </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('audits*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('audits')); ?>">
                    <i class="fa fa-lg fa-fw fa-clipboard"></i>
                  Audit Logs
                </a>
            </li>

            
        </ul>
    </nav>
</div>