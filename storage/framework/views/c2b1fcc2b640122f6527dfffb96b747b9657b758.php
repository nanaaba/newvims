<?php $__env->startSection('content'); ?>
<?php
$informaion = json_decode($information, true);
$details = $informaion['data'];

$trips = json_decode($trips, true);
?>
<div id="content">
    <div class="page-head">
        <h2 class="page-head-title"> <?php echo e($details['chasisNo']); ?> Information</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Vehicles</a></li>
            <li class="active"> <?php echo e($details['chasisNo']); ?> Information</li>
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
        <form id="updateVehicleForm" novalidate>


            <?php echo e(csrf_field()); ?>


            <div class="row">

                <div class="well well-sm well-light">
                    <h3> <?php echo e($details['chasisNo']); ?> Information
                        <br>
    <!--                    <<small>Simple Tabs</small>
                        -->
                    </h3>
                    <input type="hidden" name="vehicleno" value="<?php echo e($details['vehicleNo']); ?>"/>

                    <div id="tabs">
                        <ul>
                            <li>
                                <a href="#tabs-a">Vehicle Data</a>
                            </li>
                            <li>
                                <a href="#tabs-b">Registration Data</a>
                            </li>
                            <li>
                                <a href="#tabs-c">Permit Data</a>
                            </li>
                            <li>
                                <a href="#tabs-d">Ecowas Data</a>
                            </li>
                            <li>
                                <a href="#tabs-e">Trips</a>
                            </li>
                        </ul>

                        <div id="tabs-a" class="panel-body">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Vehicle Type</label>

                                    <select class="select2 select2-hidden-accessible vehicletypes" name="vehicleTypeId"  tabindex="-1" aria-hidden="true" required>

                                        <option value="<?php echo e($details['vehicleType']); ?>"><?php echo e($details['vehicleType']); ?></option>

                                    </select>


                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Hs Code</label>

                                    <input type="text" name="hsCode" value="<?php echo e($details['hsCode']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Status Code</label>

                                    <input type="text" name="statusCode" value="<?php echo e($details['statusCode']); ?>" class="form-control datepicker">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">CPC Code</label>

                                    <input type="text" name="cpcCode" value="<?php echo e($details['cpcCode']); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Country</label>


                                    <select class="select2 select2-hidden-accessible countries" name="resCountryId"  tabindex="-1" aria-hidden="true" required>

                                        <option value="">Select ---</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Origin Make</label>

                                    <input type="text" name="make" value="<?php echo e($details['make']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Model</label>

                                    <select class="select2 select2-hidden-accessible models" name="model"  tabindex="-1" aria-hidden="true" required>

                                        <option value="<?php echo e($details['model']); ?>"><?php echo e($details['model']); ?></option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Color</label>

                                    <select class="select2 select2-hidden-accessible" name="color"  tabindex="-1" aria-hidden="true" required>

                                        <option value="<?php echo e($details['colour']); ?>"><?php echo e($details['colour']); ?></option>

                                    </select>

                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Chassis Number</label>

                                    <input type="text" name="chasisNo" value="<?php echo e($details['chasisNo']); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Engine Number</label>

                                    <input type="text" name="engineNo" value="<?php echo e($details['engineNo']); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Front Plate Number</label>

                                    <input type="text" name="frontPlateNo" value="<?php echo e($details['frontPlateNo']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Back Plate Number</label>

                                    <input type="text" name="backPlateNo" value="<?php echo e($details['backPlateNo']); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class=" control-label">Description</label>
                                    <textarea name="description" rows="8" class="form-control">
                                                    <?php echo e(trim($details['description'])); ?>

                                    </textarea>

                                </div>
                            </div>

                        </div>
                        <div id="tabs-b" class="panel-body">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class=" control-label">Issue Date</label>

                                    <input type="text" name="regIssueDate"  value="<?php echo e($details['regIssueDate']); ?>" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class=" control-label">Expiry Date</label>
                                    <input type="text" name="regExpiryDate" value="<?php echo e($details['regExpiryDate']); ?>" class="form-control datepicker">

                                </div>
                            </div>
                        </div>
                        <div id="tabs-c" class="panel-body">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Permit No </label>

                                    <input type="text" name="permitNo" value="<?php echo e($details['permitNo']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Issue Date</label>

                                    <input type="text" name="permitIssueDate" value="<?php echo e($details['permitIssueDate']); ?>" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Expiry Date</label>
                                    <input type="text" name="permitExpiryDate" value="<?php echo e($details['permitExpiryDate']); ?>" class="form-control datepicker">

                                </div>
                            </div>
                        </div>

                        <div id="tabs-d" class="panel-body">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Ecowas No </label>

                                    <input type="text" name="ecowasNo" value="<?php echo e($details['ecowasNo']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Issue Date</label>

                                    <input type="text" name="ecowasIssueDate" value="<?php echo e($details['ecowasIssueDate']); ?>" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Expiry Date</label>
                                    <input type="text" name="ecowasExpiryDate" value="<?php echo e($details['ecowasExpiryDate']); ?>" class="form-control datepicker">

                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class=" control-label">Remarks</label>
                                    <textarea name="remarks" rows="8" class="form-control">
                                                    <?php echo e($details['remarks']); ?>


                                    </textarea>

                                </div>
                            </div>
                        </div>    


                        <div id="tabs-e" class="panel-body">
                            <div class="row"  >
                                <div class="col-lg-12">
                                    <div class="pull-left">
                                        <button data-toggle="modal" data-target="#newtrip" type="button" class="btn btn-space btn-primary">New Trip</button>
                                        <!--                    <a  class="btn btn-primary" href="bulk-beneficiary-upload" >New Category</a>-->

                                    </div>

                                </div>

                            </div>
                            <br>
                            <table id="tripsTbl" class="table table-condensed table-hover table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>Trip Type</th>  
                                        <th>Final Country</th>  
                                        <th>Vehicle(Front Plate)</th>  
                                        <th>Driver</th> 
                                        <th>Check In</th> 

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($trips['data'] as $value) {
                                        echo '<tr>'
                                        . '<td>'
                                        . $value['tripType']
                                        . '</td>'
                                        . '<td>'
                                        . $value['finalCountry']
                                        . '</td>'
                                        . '<td>'
                                        . $value['vehicle']['frontPlateNo']
                                        . '</td>'
                                        . '<td>'
                                        . $value['driver']['othernames'] . ' ' . $value['driver']['surname']
                                        . '</td>'
                                        . '<td>'
                                        . $value['checkInOn']
                                        . '</td>'
                                        . '<td><a   href="../../trip/' . $value['tripNo'] . '"    type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" ><i class="glyphicon glyphicon-eye-open"></i> </a></td> '
                                        . '</tr>';
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>

                    </div>


                </div>


            </div>

            <footer class="pull-right">
                <button type="submit" class="btn btn-primary btn-block">
                    Update
                </button>
            </footer>
        </form>
    </div>

</div>

<!--Form Modals-->
<div id="newtrip" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
    <div class="modal-dialog custom-width">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
                <h3 class="modal-title">New Trip</h3>
            </div>
            <form id="tripForm" novalidate>
                <!-- START ROW -->

                <?php echo e(csrf_field()); ?>

                <div class="modal-body">

                    <div class="row">


                        <input type="hidden" name="vehicleRegNo" value="<?php echo e($details['vehicleNo']); ?>"/>

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
                                <label class=" control-label">Trade Ref No </label>

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
                                <label class=" control-label">Car NetNo</label>

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
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                    <button type="submit" class="btn btn-info ">Proceed</button>
                </div>

            </form>


        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
<script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>

<script type="text/javascript">
    $('#tripsTbl').DataTable();
    $('#tabs').tabs();
    getSettings();
    function getSettings() {


        $.ajax({
            url: "<?php echo e(url('settings/all')); ?>",
            type: "GET",
            dataType: 'json',
            success: function (response) {
                var data = response.data;
                var countries = data['countries'];
                var genders = data['genders'];
                var statusCodes = data['statusCodes'];
                var vehicleMakes = data['vehicleMakes'];
                var vehicleModels = data['vehicleModels'];
                var vehicleTypes = data['vehicleTypes'];

                console.log(data);
                $.each(countries, function (i, item) {

                    $('.countries').append($('<option>', {
                        value: item.code,
                        text: item.name
                    }));
                });

                //vehicleTypes
                $.each(vehicleTypes, function (i, item) {

                    $('.vehicletypes').append($('<option>', {
                        value: item.typeId,
                        text: item.name
                    }));
                });

                $.each(vehicleModels, function (i, item) {

                    $('.models').append($('<option>', {
                        value: item.modelId,
                        text: item.name
                    }));
                });
                $.each(vehicleMakes, function (i, item) {

                    $('.vehiclemakes').append($('<option>', {
                        value: item.makeId,
                        text: item.name
                    }));
                });

                $.each(statusCodes, function (i, item) {

                    $('.statuscodes').append($('<option>', {
                        value: item.code,
                        text: item.name
                    }));
                });

                $.each(genders, function (i, item) {

                    $('.gender').append($('<option>', {
                        value: item.genderId,
                        text: item.name
                    }));
                });
            }

        });
    }

    function getTripInfo(tripid) {
        alert(tripid);
    }

    $('#updateVehicleForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        console.log('server data: ' + formData);
        $('#loaderModal').modal('show');

        $.ajax({
            url: "<?php echo e(url('vehicle/update')); ?>",
            type: "PUT",
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