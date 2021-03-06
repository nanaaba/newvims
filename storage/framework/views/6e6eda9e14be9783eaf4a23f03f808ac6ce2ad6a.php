<!DOCTYPE html>
<html lang="en-us" id="extr-page">
    <head>
        <meta charset="utf-8">
        <title> VIMS</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- #CSS Links -->

        <link href="<?php echo e(asset('vendors/css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('vendors/css/simple-line-icons.min.css')); ?>" rel="stylesheet">
        <!-- Main styles for this application -->
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>">

        <style type="text/css">
            #centeredDiv { margin-right: auto; margin-left: auto; width: 400px;margin-top: 80px }
            img{
                margin-right: auto; margin-left: 150px;
            }
        </style>
    </head>




    <body class="app flex-row align-items-center">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <!-- Bootstrap and necessary plugins -->
        <script src="<?php echo e(asset('vendors/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendors/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendors/js/bootstrap.min.js')); ?>"></script>

    </body>




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

    <script type="text/javascript">

        $('#loginForm').submit(function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        console.log(formData);
        $('#loaderModal').modal('show');

        $('input:submit').attr("disabled", true);
        $.ajax({
        url: "<?php echo e(url('authenticateuser')); ?>",
                type: "POST",
                data: formData,
                dataType: "json",
                success: function (data) {
                 $('#loaderModal').modal('hide');

                console.log('data : ' + data.status);
                if (data.status == 0) {
                window.location = "dashboard";
                } else {
                $('#errordiv').show();
                $('#errormsg').html(data.message);
                }

                },
                error: function (jXHR, textStatus, errorThrown) {
                console.log(errorThrown);
                }
        });
        });

    </script>

</body>
</html>