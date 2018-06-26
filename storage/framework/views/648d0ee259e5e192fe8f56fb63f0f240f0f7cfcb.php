<?php $__env->startSection('content'); ?>



<div id="content">
    <div class="page-head">
        <h2 class="page-head-title">New Driver</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="<?php echo e(url('drivers/all')); ?>">Drivers</a></li>
            <li class="active">New Driver</li>
        </ol>
    </div>
    <div class="main-content container-fluid">
        <div id="sucessdiv" style="display: none">

            <div class="alert alert-success fade in">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <i class="fa-fw fa fa-check"></i>
                <strong>Success</strong> <span id="successmsg"> </span>
            </div>
        </div>
        <div id="errordiv" style="display: none">
            <div class="alert alert-danger fade in">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <i class="fa-fw fa fa-times"></i>
                <strong>Error!</strong> <span id="errormsg"> </span>
            </div>
        </div>

        <section id="widget-grid" class="">

            <form id="driverForm" novalidate>
                <!-- START ROW -->
                <?php echo e(csrf_field()); ?>


                <div class="row">

                    <!-- NEW COL START -->
                    <article class="col-sm-12 col-md-12 col-lg-12 ">

                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-sortable"  data-widget-editbutton="false" data-widget-custombutton="false" role="widget">

                            <header role="heading" class="ui-sortable-handle">


                                <span class="widget-icon"> 
                                    <i class="fa fa-edit"></i> </span>
                                <h2>Driver Personal Details</h2>				


                            </header>

                            <!-- widget div-->
                            <div role="content">

                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox">
                                    <!-- This area used as dropdown edit box -->

                                </div>
                                <!-- end widget edit box -->

                                <!-- widget content -->
                                <div class="widget-body">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Surname</label>

                                            <input type="text" name="surname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Other Names</label>

                                            <input type="text" name="othernames" class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Sex</label>

                                            <select class="select2 select2-hidden-accessible gender" name="gender"  tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Date Of Birth</label>

                                            <input type="text" name="dob" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Email Address</label>

                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Local Phone Number</label>

                                            <input type="text" name="localPhone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Overseas Phone Number</label>

                                            <input type="text" name="foreignPhone" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Resident Country</label>


                                            <select class="select2 select2-hidden-accessible countries" name="residentCountryId"  tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Country Of Origin</label>


                                            <select class="select2 select2-hidden-accessible countries" name="countryCode"  tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class=" control-label">Local Address</label>
                                            <textarea name="localAddress" rows="10" class="form-control"></textarea>

                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class=" control-label">Overseas Address</label>
                                            <textarea name="foreignAddress"  rows="10" class="form-control"></textarea>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">National ID Type</label>


                                            <select class="select2 select2-hidden-accessible idtypes" name="nationalIdType"  tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Nationality ID Number</label>

                                            <input type="text" name="nationalId" class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Driver License Number</label>

                                            <input type="text" name="licenceNo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label"> Date of Issue</label>

                                            <input type="text" name="issueDate" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label"> Date of Expiry</label>

                                            <input type="text" name="expiryDate" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                        </div>
                                    </div>
                                </div>
                                <!-- end widget content -->

                            </div>
                            <!-- end widget div -->

                        </div>

                    </article>

                </div>



                <div class="row">

                    <!-- NEW COL START -->
                    <article class="col-sm-12 col-md-12 col-lg-12 ">

                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-sortable"  data-widget-editbutton="false" data-widget-custombutton="false" role="widget">

                            <header role="heading" class="ui-sortable-handle">


                                <span class="widget-icon"> 
                                    <i class="fa fa-edit"></i> </span>
                                <h2>Passport Details</h2>				

                                <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                            <!-- widget div-->
                            <div role="content">

                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox">
                                    <!-- This area used as dropdown edit box -->

                                </div>
                                <!-- end widget edit box -->

                                <!-- widget content -->
                                <div class="widget-body">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Passport No</label>

                                            <input type="text" name="passportNo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Date of Issue</label>

                                            <input type="text" data-dateformat="yy-mm-dd" name="passportIssueDate" class="form-control datepicker">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class=" control-label">Date of Expiry </label>

                                            <input type="text" data-dateformat="yy-mm-dd" name="passportExpiryDate" class="form-control datepicker">
                                        </div>
                                    </div>


                                </div>
                                <!-- end widget content -->

                            </div>
                            <!-- end widget div -->

                        </div>

                    </article>

                </div>





                <div class="row">

                    <!-- NEW COL START -->
                    <article class="col-sm-12 col-md-12 col-lg-12 ">

                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-sortable" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">

                            <header role="heading" class="ui-sortable-handle">


                                <span class="widget-icon"> 
                                    <i class="fa fa-edit"></i> </span>
                                <h2>Other Data</h2>				

                                <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                            <!-- widget div-->
                            <div role="content">

                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox">
                                    <!-- This area used as dropdown edit box -->

                                </div>
                                <!-- end widget edit box -->

                                <!-- widget content -->
                                <div class="widget-body">

                                    <div class="row col-lg-12">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class=" control-label">Reg. Date of Issue </label>

                                                <input type="text" " name="regIssueDate" class="form-control datepicker">
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label">Reg. Date of  Expiry </label>

                                                <input type="text" data-dateformat="yy-mm-dd" name="regExpiryDate" class="form-control datepicker">
                                            </div>


                                        </div>
                                        <div class="col-sm-6">


                                            <div class="form-group">
                                                <label class=" control-label">Remarks</label>
                                                <textarea name="remarks" rows="10" class="form-control"></textarea>


                                            </div>
                                        </div>


                                    </div>


                                </div>
                                <!-- end widget content -->

                            </div>
                            <!-- end widget div -->

                        </div>

                    </article>

                </div>


                <footer class="pull-right">
                    <button type="submit" class="btn btn-primary btn-block">
                        Submit
                    </button>
                </footer>

                <!-- END ROW -->
            </form>

        </section>



    </div>

</div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
<script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>


<script type="text/javascript">

$('.datepicker').datepicker({
    format: 'dd-mm-yyyy'
});

$('#driverForm').on('submit', function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    console.log('server data: ' + formData);
    $('#loaderModal').modal('show');

    $.ajax({
        url: "<?php echo e(url('driver/new')); ?>",
        type: "POST",
        data: formData,
        dataType: "json",
        success: function (data) {
            console.log(data);
            var status = data.status;
            console.log('status is :' + status);
            $('#loaderModal').modal('hide');

            if (status == 0) {
                $('#successmsg').html(data.message);
                $('#sucessdiv').show();
            } else {
                $('#errormsg').html(data.message);
                $('#errordiv').show();
            }
            $(window).scrollTop(0);

        },
        error: function (jXHR, textStatus, errorThrown) {
            $('input:submit').removeAttr("disabled");
            $('#errordiv').html('Contact System Administrator');
            $('#errormsg').show();
        }
    });


});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>