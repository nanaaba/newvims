<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

        <title> VIMS </title>
        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Basic Styles -->

        <link href="<?php echo e(asset('vendors/css/flag-icon.min.css')); ?>" rel="stylesheet'">
        <link href="<?php echo e(asset('vendors/css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('vendors/css/simple-line-icons.min.css')); ?>" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <!-- Main styles for this application -->
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

        <!-- FAVICONS -->
        <link rel="shortcut icon" href="<?php echo e(asset('img/favicon/favicon.ico')); ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo e(asset('img/favicon/favicon.ico')); ?>" type="image/x-icon">
        <link href="<?php echo e(asset('vendors/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

        <!-- Styles required by this views -->
        <link href="<?php echo e(asset('vendors/css/daterangepicker.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('vendors/css/gauge.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('vendors/css/toastr.min.css')); ?>" rel="stylesheet">
        <style type="text/css">
            

            .app-header.navbar .navbar-brand {


                background-color:#20a8d8;

            }

            .app-header.navbar {
                position: fixed !important;
                z-index: 1020;
                width: 100%;
                text-align: center;
                background-color: #20a8d8;
                border-bottom: 1px solid #20a8d8;
            }



            .sidebar .nav-link.active, .sidebar .navbar .active.dropdown-toggle, .navbar .sidebar .active.dropdown-toggle {
                color: #fff;
                background: #4d9ad1;
            }

            .navbar-nav .nav-link, .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-nav .dropdown-toggle {
                color: rgba(255, 255, 255, 0.7);
            }

            .sidebar .nav-dropdown.open {
                background: #20a8d8;
                border-radius: 0.25rem;
            }

            .sidebar .nav-link:hover, .sidebar .navbar .dropdown-toggle:hover, .navbar .sidebar .dropdown-toggle:hover {
                color: #fff;
                background: #20a8d8;
            }
            
            .select2{
                width:100%;   
            }
        </style>
        <?php echo $__env->yieldContent('styles'); ?>
    </head>


    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

        <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="app-body">
            <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- Left panel : Navigation area -->
            <!-- Note: This width of the aside area can be adjusted through LESS variables -->

            <!-- END NAVIGATION -->

            <!-- MAIN PANEL -->
            <main class="main">

                <?php echo $__env->yieldContent('content'); ?>



                <div class="modal fade"  id="loaderModal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">


                        <div  id="loader" style="position: absolute;
                              margin: auto;
                              top: 0;
                              right: 0;
                              bottom: 0;
                              left: 0; width: 100px;
                              height: 100px;
                              margin-top: 150px;">
                            <i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i>
                            <span class="loader-text">Wait...</span>
                        </div>


                    </div>

                </div>

                <div class="modal " id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="post" id="deleteForm">
                                <div class="modal-body">
                                    <div>
                                        <p>
                                            Are you sure you want to delete?.<span class="holder" id="holdername"></span> 
                                        </p>
                                    </div>
                                    <input type="hidden" class="form-control form-control-lg input-lg" id="token" name="_token" value="<?php echo csrf_token() ?>" />

                                    <input type="hidden" id="code" name="code"/>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    <button type="submit"  class="btn btn-primary">YES</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </main>
        </div>
        <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('customjs'); ?>

    </body>

</html>