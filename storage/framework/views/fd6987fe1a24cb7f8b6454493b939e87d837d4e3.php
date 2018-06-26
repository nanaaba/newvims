<?php $__env->startSection('content'); ?>


<ol class="breadcrumb">
    <li class="breadcrumb-item">Vehicle</li>
    <li class="breadcrumb-item active"> Vehicle Information</li>
    <!-- Breadcrumb Menu-->

</ol>
<?php
$informaion = json_decode($information, true);
$details = $informaion['data'];

$trips = json_decode($trips, true);
?>




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


        <form id="updateVehicleForm" novalidate>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong><?php echo e($details['chasisNo']); ?>'s Information</strong>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="vehicleno" value="<?php echo e($details['vehicleNo']); ?>"/>


                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Vehicle Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Registration Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Permit Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#ecowas" role="tab" aria-controls="messages">Ecowas Data</a>
                                        </li> 
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#trips" role="tab" aria-controls="messages">Trips</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Vehicle Type</label>

                                                        <select class="select2  vehicletypes" name="vehicleTypeId"  tabindex="-1" aria-hidden="true" required>

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


                                                        <select class="select2  countries" name="resCountryId"  tabindex="-1" aria-hidden="true" required>

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

                                                        <select class="select2  models" name="model"  tabindex="-1" aria-hidden="true" required>

                                                            <option value="<?php echo e($details['model']); ?>"><?php echo e($details['model']); ?></option>

                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Color</label>
                                                        <input type="text" name="color" value="<?php echo e($details['colour']); ?>" class="form-control">



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
                                        </div>
                                        <div class="tab-pane" id="profile" role="tabpanel">

                                            <div class="row">


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
                                        </div>
                                        <div class="tab-pane" id="messages" role="tabpanel">
                                            <div class="row">

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

                                        </div>

                                        <div class="tab-pane" id="ecowas" role="tabpanel">
                                            <div class="row">
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
                                        </div>

                                        <div class="tab-pane" id="trips" role="tabpanel">
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
                                <!--/.col-->

                            </div>

















                            <footer class="pull-right">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Update
                                </button>
                            </footer>
                        </div>
                    </div>

                </div>
            </div>

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

                                <select class="select2  drivers" name="driverRegNo"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select---</option>

                                </select>                                    
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class=" control-label">Trip Type </label>
                                <select class="select2  tviTypes" name="tripTypeId"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select---</option>

                                </select>    
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class=" control-label">Regime</label>

                                <select class="select2  regimes" name="regimeId"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select---</option>

                                </select>  

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class=" control-label">Customs Office</label>


                                <select class="select2  offices" name="customsOfficeCode"  tabindex="-1" aria-hidden="true" required>

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
                                <select class="select2  country" name="consCountryCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class=" control-label">Last Country</label>
                                <select class="select2  country" name="lastCountryCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class=" control-label">Next Country</label>
                                <select class="select2  country" name="nextCountryCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class=" control-label">Final Country</label>
                                <select class="select2  country" name="finalCountryCode"  tabindex="-1" aria-hidden="true" required>

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

<script type="text/javascript">
    $('#tripsTbl').DataTable();
    $('#tabs').tabs();
    getSettings();
    getTVISettings();
    getDrivers();
    function getSettings() {


        $.ajax({
            url: "<?php echo e(url('settings/all')); ?>",
            type: "GET",
            dataType: 'json',
            success: function (response) {
                //var data = response.data;
                var countries = response.countries;
                var idtypes = response.idtypes;
                var vehicleModels = response.models;
                var vehicleTypes = response.vehicletypes;
                var vehicleMakes = response.vehiclemakes;
                var statusCodes = response.status;
                var gender = response.gender;
                var tvi = response.tvi;
                var office = response.office;
                var regime = response.regime;

                $('.countries').append(countries);
                $('.vehicletypes').append(vehicleTypes);
                $('.models').append(vehicleModels);
                $('.vehiclemakes').append(vehicleMakes);
                $('.statuscodes').append(statusCodes);
                $('.gender').append(gender);
                $('.idtypes').append(idtypes);
                $('.regimes').append(tvi);
                $('.offices').append(office);
                $('.tviTypes').append(regime);

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
                document.getElementById("tripForm").reset();
                $('#tripForm select').val('').trigger('change');
                $('#newtrip').modal('hide');

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