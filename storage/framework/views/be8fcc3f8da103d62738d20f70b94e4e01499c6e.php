<!-- HEADER -->
<header id="header">
    <div id="logo-group"  style="display: inline-block;">

        <!--             PLACE YOUR LOGO HERE style="margin-top: 3px;"-->
<!--        <span id="logo"> 
            <img src="<?php echo e(asset('img/logo.png')); ?>" height="20" alt="GRA">
                                                                     <img src="<?php echo e(asset('img/text.png')); ?>" style="height: 38px;" alt="GRA">

        </span>-->
         <div class="column">
             <img src="<?php echo e(asset('img/logo.png')); ?>" alt="GRA" style="width:50px;height: 48px;">
            </div>
            <div class="column">
                <p style="font-weight: bold;font-size: 24px; padding-top: 5px;">VIMS</p>
<!--                <img src="<?php echo e(asset('img/text.png')); ?>" alt="VIMS" style="width:50px;height: 48px;">-->
            </div>

    </div>

    <div class="row col-md-8" style="padding-top: 3px;">
            <form  action="<?php echo e(url('search')); ?>" method="get" >

                    <div class="input-group input-group-lg">
                        <input class="form-control input-lg " style="border-radius: 25px;" type="text" required name="searchparam" placeholder="Number Plate, Chasis Number etc"  id="search-user">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-fw fa-search fa-lg"></i>
                            </button>
                        </div>
                        <!--                    </form>-->


                    </div>

                </form>
    
        </div>
    
   
    <!-- pulled right: nav area -->
    <div class="pull-right">


        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fas fa-bars"></i></a> </span>
        </div>

        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="<?php echo e(url('logout')); ?>" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fas fa-sign-out-alt"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->

        <!-- end search mobile button -->


        <!-- end input: search field -->

        <!-- fullscreen button -->

        <!-- end fullscreen button -->
       
    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->
