    


<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-6">

    </div>
    <div class="col-md-6 page-login-main">
        <div  class="centerdiv">

            <img src="<?php echo e(asset('img/logo.png')); ?>" height="50"  alt="...">

            <br><br>

            <h1 >VIMS</h1>
            <small >Enter your official GRA email and personal password to login.</small>
            <br><br>
            <div id="errordiv" style="display: none;">
                <div class="alert alert-danger " role="alert">
                    <button class="close" data-dismiss="alert">
                        ×
                    </button>
                    <strong>Error!</strong> <span id="errormsg"> </span>
                </div>

            </div>
            <form  id="loginForm" class="smart-form client-form">
                <?php echo e(csrf_field()); ?>

<!--                <p class="text-muted">Sign In to your account</p>-->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-user"></i></span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-lock"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>




                <div class="form-group clearfix">
                    <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
                        <input type="checkbox" id="remember" name="checkbox">
                        <label for="inputCheckbox">Remember me</label>
                    </div>
                    <a class="pull-right" href="<?php echo e(url('forgotpassword')); ?>">Forgot password?</a>
                </div>
                <div class="form-group clearfix">
                    <div class="pull-left">
                        <button type="submit" class="btn btn-primary px-4">Login</button>

                    </div>
                    <div class="pull-right">
                  
                    <button type="button" class="btn btn-outline-secondary">Request Account</button>
                    </div>
                </div>




            </form> 


        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>