    


<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-6">

    </div>
    <div class="col-md-6 page-login-main">
        <div  class="centerdiv">

            <img src="<?php echo e(asset('img/logo.png')); ?>" height="50"  alt="...">

            <br><br>

            <h1 >VIMS</h1>
            <small >Enter official email and reset link will b sent.</small>
            <br><br>
            <div id="errordiv" style="display: none;">
                <div class="alert alert-danger " role="alert">
                    <button class="close" data-dismiss="alert">
                        ×
                    </button>
                    <strong>Error!</strong> <span id="errormsg"> </span>
                </div>

            </div>
            <div id="successdiv" style="display: none;">
                <div class="alert alert-success " role="alert">
<!--                    <button class="close" data-dismiss="alert">
                        ×
                    </button>-->
                    <strong><i class="fa fa-check"></i></strong> <span id="successmsg"> </span>
                </div>

            </div>
            <form  id="forgotPasswordForm" class="smart-form client-form">
                <?php echo e(csrf_field()); ?>

<!--                <p class="text-muted">Sign In to your account</p>-->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
              



                <br>
                
                <div class="form-group clearfix">
                    <div class="center-block">
                        <button type="submit" class="btn btn-primary px-4">Send Request</button>

                    </div>
                   
                </div>




            </form> 


        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>