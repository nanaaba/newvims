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
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

        <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-production-plugins.min.css')); ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-production.min.css')); ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-skins.min.css')); ?>">

        <!-- SmartAdmin RTL Support  -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-rtl.min.css')); ?>">

        <!-- We recommend you use "your_style.css')}}" to override SmartAdmin
             specific styles this will also ensure you retrain your customization with each SmartAdmin update.
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/your_style.css')); ?>"> -->

        <!-- Demo purpose only: goes with demo.js')}}, you can delete this css when designing your own WebApp -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap-datepicker.min.css')); ?>"/>

        
        <!-- FAVICONS -->
        <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

        <!-- GOOGLE FONT -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

        <!-- Specifying a Webpage Icon for Web Clip 
                 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
     
        <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>">


<meta name="theme-color" content="#ffffff">
        <style type="text/css">
            .rcorners{
    border-radius: 25px;
    padding: 20px; 
    width: 200px;
    height: 150px; 
}

            textarea {
                resize: none;
            }
        
* {
    box-sizing: border-box;
}

.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
</style>
    </head>


    <body class="">

        <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS variables -->

        <!-- END NAVIGATION -->

        <!-- MAIN PANEL -->
        <div id="main" role="main">
            <?php echo $__env->yieldContent('content'); ?>


        </div>
        <div class="modal fade " id="loaderModal" data-keyboard="false" data-backdrop="static" role="dialog" >
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



        <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('customjs'); ?>

    </body>

</html>