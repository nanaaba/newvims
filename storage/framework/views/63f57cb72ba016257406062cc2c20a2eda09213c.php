<?php $__env->startSection('content'); ?>
<div id="content">
    <div class="page-head">
        <h2 class="page-head-title">New Trip </h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="<?php echo e(url('vehicles/all')); ?>">Trips</a></li>
            <li class="active">New Trip </li>
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

            <form id="tripForm" novalidate>
                <!-- START ROW -->

                <?php echo e(csrf_field()); ?>

                <div class="row">

                    <!-- NEW COL START -->
                    <article class="col-sm-12 col-md-12 col-lg-12 ">

                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-sortable" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">

                            <header role="heading" class="ui-sortable-handle">
                                

                                <span class="widget-icon"> 
                                    <i class="fa fa-edit"></i> </span>
                                <h2>Trip Data </h2>				

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

                                    <div class="row">

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Vehicle Involve </label>

                                                <select class="select2 select2-hidden-accessible vehicles" name="vehicleRegNo"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select---</option>

                                                </select>                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Driver Involve </label>

                                                <select class="select2 select2-hidden-accessible drivers" name="driverRegNo"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select---</option>

                                                </select>                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Trip Type </label>
                                                <select class="select2 select2-hidden-accessible tviTypes" name="tripTypeId"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select---</option>

                                                </select>    
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Regime</label>

                                                <select class="select2 select2-hidden-accessible regimes" name="regime"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select---</option>

                                                </select>  

                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Customs Office</label>


                                                <select class="select2 select2-hidden-accessible offices" name="customsOfficeCode"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select---</option>

                                                </select>  

                                            </div>
                                        </div>



                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Trade Ref Number </label>

                                                <input type="text" name="tradeRefNo" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Country of Consignment </label>
                                                <select class="select2 select2-hidden-accessible country" name="consCountryCode"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Last Country</label>
                                                <select class="select2 select2-hidden-accessible country" name="lastCountryCode"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Next Country</label>
                                                <select class="select2 select2-hidden-accessible country" name="nextCountryCode"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Final Country</label>
                                                <select class="select2 select2-hidden-accessible country" name="finalCountryCode"  tabindex="-1" aria-hidden="true" required>

                                                    <option value="">Select ---</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Entry Office</label>

                                                <input type="text" name="entryOfficeCode" class="form-control">
                                            </div>
                                        </div><div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Exit Office</label>

                                                <input type="text" name="exitOfficeCode" class="form-control">
                                            </div>
                                        </div><div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Car NetNumber</label>

                                                <input type="text" name="carnetNo" class="form-control">
                                            </div>
                                        </div><div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Check In</label>

                                                <input type="text" name="checkInDate" data-dateformat="dd-mm-yy" class="form-control datepicker">
                                            </div>
                                        </div><div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Stay Duration</label>

                                                <input type="text" name="stayDuration" class="form-control">
                                            </div>
                                        </div><div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Import Duration</label>

                                                <input type="text" name="importDuration" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Permit Expiry Date</label>

                                                <input type="text" name="permExpiryDate" data-dateformat="dd-mm-yy" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Purpose</label>

                                                <input type="text" name="purpose" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Remarks</label>

                                                <input type="text" name="remarks" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">CheckIn By</label>

                                                <input type="text" name="checkInBy" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">CheckIn On</label>

                                                <input type="text" name="checkInOn" data-dateformat="dd-mm-yy" class="form-control datepicker">
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
                        Save 
                    </button>
                </footer>

            </form>

            <!-- END ROW -->

        </section>
    </div>
</form>

</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
<script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script type="text/javascript">

$('.datepicker').datepicker({
    format: 'dd-mm-yyyy'
});
$('#tripForm').on('submit', function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    console.log('server data: ' + formData);
    $('#loaderModal').modal('show');

    $.ajax({
        url: "<?php echo e(url('trips/new')); ?>",
        type: "POST",
        data: formData,
        dataType: "json",
        success: function (data) {
            $('#loaderModal').modal('hide');

            console.log(data);
            var status = data.status;
            console.log('status is :' + status);

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
getVehicles();

getDrivers();
function getVehicles() {


    $.ajax({
        url: "<?php echo e(url('vehicles/getall')); ?>",
        type: "GET",
        dataType: 'json',
        success: function (response) {
            var data = response.data;

            $.each(data, function (i, item) {

                $('.vehicles').append($('<option>', {
                    value: item.vehicleNo,
                    text: item.frontPlateNo
                }));
            });


        }

    });
}

function getDrivers() {


    $.ajax({
        url: "<?php echo e(url('drivers/getall')); ?>",
        type: "GET",
        dataType: 'json',
        success: function (response) {
            var data = response.data;

            $.each(data, function (i, item) {

                $('.drivers').append($('<option>', {
                    value: item.driverRegNo,
                    text: item.othernames + ' ' + item.surname
                }));
            });


        }

    });
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>