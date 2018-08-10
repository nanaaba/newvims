<?php $__env->startSection('content'); ?>

<ol class="breadcrumb">
    <li class="breadcrumb-item">Vehicle</li>
    <li class="breadcrumb-item active">New Vehicle</li>
    <!-- Breadcrumb Menu-->

</ol>


<div class="container-fluid">
    <div class="animated fadeIn">

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
        <form id="vehicleForm" novalidate>

            <div class="row">

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Vehicle Details</strong>
                        </div>
                        <div class="card-body">

                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Vehicle Type</label>

                                        <select class="select2 form-control  vehicletypes" name="vehicleTypeId"  tabindex="-1" aria-hidden="true" required
                                                style="width: 100%">

                                            <option value="">Select ---</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Hs Code</label>

                                        <input type="text" name="hsCode" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Status Code</label>

                                        <select class="select2 form-control statuscodes" style="width: 100%" name="statusCodeId"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select ---</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3" style="display: none;">
                                    <div class="form-group">
                                        <label class=" control-label">CPC Code</label>

                                        <input type="text" name="cpcCode" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Country Of Origin</label>


                                        <select class="select2 form-control  countries"  style="width: 100%" name="resCountryId"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select ---</option>

                                        </select>
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Model</label>

                                        <select class="select2 form-control models" name="model"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select---</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Color</label>
                                        <input type="text" name="color" class="form-control">


                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Chassis Number</label>

                                        <input type="text" name="chasisNo" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Engine Number</label>

                                        <input type="text" name="engineNo" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Front PlateNumber</label>

                                        <input type="text" name="frontPlateNo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Back PlateNumber</label>

                                        <input type="text" name="backPlateNo" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">TripType</label>

                                        <select class="select2 form-control tviTypes" name="tripType"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select---</option>

                                        </select>
                                    </div>
                                </div>


                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label class=" control-label">Description</label>
                                        <textarea name="description" rows="10" class="form-control"></textarea>

                                    </div>
                                </div>


                            </div>
                            <div class="row">

                                <div class="col-sm-9">
                                    <div class="card-header">
                                        <strong>Registration Data</strong>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Registration ID </label>

                                                <input type="text" name="regID" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Date of Issue </label>

                                                <input type="text" name="regIssueDate" data-dateformat="yy-mm-dd" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Date of Expiry </label>
                                                <input type="text" name="regExpiryDate" data-dateformat="yy-mm-dd" class="form-control datepicker">

                                            </div>
                                        </div>
                                    </div>

                                </div>




                                <div class="col-sm-9">

                                    <div class="card-header">
                                        <strong>International Permit Data:</strong>
                                    </div>
                                    <br>

                                    <div class="row">

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Permit No </label>

                                                <input type="text" name="permitNo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Date of Issue </label>

                                                <input type="text" name="permitIssueDate" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Date of Expiry </label>
                                                <input type="text" name="permitExpiryDate" class="form-control datepicker" data-dateformat="yy-mm-dd">

                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div>
                            
                            
                            <footer class="pull-right">
    <button type="submit" class="btn btn-primary btn-block">
        Submit
    </button>
</footer>
                        </div>



                    </div>
                </div>

            </div>
    </div>

</div>
<!--/.row-->


</form>

</div>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
<script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script type="text/javascript">

$('.datepicker').datepicker({
    format: 'dd-mm-yyyy'
});
$('#vehicleForm').on('submit', function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    console.log('server data: ' + formData);
    $('#loaderModal').modal('show');

    $.ajax({
        url: "<?php echo e(url('vehicle/new')); ?>",
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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>