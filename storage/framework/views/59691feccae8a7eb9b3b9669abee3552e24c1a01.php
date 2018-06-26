<?php $__env->startSection('content'); ?>

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">New Vehicle</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Vehicles</a></li>
            <li class="active">New Vehicle</li>
        </ol>
    </div>
    <div class="main-content container-fluid">
        <!--Basic forms-->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default panel-border-color panel-border-color-primary">
                    <div class="panel-heading panel-heading-divider">
                        <div class="panel-body">
                            <form id="reportForm" >

                                <?php echo e(csrf_field()); ?>


                                <div class="row">

                                    <fieldset>
                                        <legend>Vehicle Data:</legend>






                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Vehicle Type</label>

                                                <select class="select2 select2-hidden-accessible" name="sex"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Hs Code</label>

                                                <input type="text" name="fullname" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Status Code</label>

                                                <input type="text" name="dob" class="form-control datepicker">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">CPC Code</label>

                                                <input type="text" name="email" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Country</label>

                                                <input type="text" name="contactno" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Origin Make</label>

                                                <input type="text" name="contactno" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Model</label>

                                                <select class="select2 select2-hidden-accessible" name="sex"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Color</label>

                                                <select class="select2 select2-hidden-accessible" name="sex"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>

                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Chassis Number</label>

                                                <input type="text" name="contactno" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Engine Number</label>

                                                <input type="text" name="contactno" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Plate Number</label>

                                                <input type="text" name="contactno" class="form-control">
                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Description</label>
                                                <textarea name="overseas_address" class="form-control"></textarea>

                                            </div>
                                        </div>


                                    </fieldset>
                                </div>
                                <br>
                                <div class="row">

                                    <fieldset>
                                        <legend>Registration Data:</legend>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Registered By</label>

                                                <input type="text" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Name</label>

                                                <input type="text" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Address</label>
                                                <textarea name="overseas_address" class="form-control"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Issue Date</label>

                                                <input type="text" name="email" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Expiry Date</label>
                                                <input type="text" name="email" class="form-control datepicker">

                                            </div>
                                        </div>
                                    </fieldset>
                                </div>


                                <br>
                                <div class="row">

                                    <fieldset>
                                        <legend>International Permit Data:</legend>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class=" control-label">Permit No </label>

                                                <input type="text" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Issue Date</label>

                                                <input type="text" name="email" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Expiry Date</label>
                                                <input type="text" name="email" class="form-control datepicker">

                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Ecowas Data:</legend>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class=" control-label">Ecowas No </label>

                                                <input type="text" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Issue Date</label>

                                                <input type="text" name="email" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Expiry Date</label>
                                                <input type="text" name="email" class="form-control datepicker">

                                            </div>
                                        </div>
                                                   <div class="col-sm-8">
                                    <div class="form-group">
                                        <label class=" control-label">Remarks</label>
                                        <textarea name="overseas_address" rows="8" class="form-control"></textarea>

                                    </div>
                                </div>
                                    </fieldset>

                                </div>
                     




                                <div class="row xs-pt-15">
                                    <div class="col-xs-6">

                                    </div>
                                    <div class="col-xs-6">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Save </button>

                                        </p>
                                    </div>
                                </div>
                            </form>





                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.forms', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>