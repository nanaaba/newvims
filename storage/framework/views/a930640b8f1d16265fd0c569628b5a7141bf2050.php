<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Vehicles monitoring">
        <meta name="author" content="xenon technologies">
        <meta name="keyword" content="VIMS">
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

        <title>VIMS - Error Message</title>

        <!-- Icons -->
        <link href="<?php echo e(asset('vendors/css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('vendors/css/simple-line-icons.min.css')); ?>" rel="stylesheet">
        <!-- Main styles for this application -->
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>">
        <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">

        <!-- Styles required by this views -->

    </head>


    <body class="app flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="clearfix">
                        <h1 class="float-left display-3 mr-4">500</h1>
                        <h4 class="pt-3">Please Contact System Administrator</h4>
                        <p class="text-muted">
                            <span><strong>Error Message:</strong></span>       <?php echo e(session('errordata')); ?>


                        <p><a class="btn btn-primary " href="<?php echo e(url('/login')); ?>">Return to homepage</a></p>

                        </p>

                    </div>

                </div>
            </div>
        </div>

        <!-- Bootstrap and necessary plugins -->
        <script src="<?php echo e(asset('vendors/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendors/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendors/js/bootstrap.min.js')); ?>"></script>

    </body>
</html>