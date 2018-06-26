<?php $__env->startSection('content'); ?>
<?php
$informaion = json_decode($information, true);
$details = $informaion['data'];
$trips = json_decode($trips, true);

?>
<div id="content">
    <div class="page-head">
        <h2 class="page-head-title"><?php echo e($details['othernames'] .' '.$details['surname']); ?> information</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Drivers</a></li>
            <li class="active"> Driver Information</li>
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
        <form id="updatedriverForm" novalidate>
            <?php echo e(csrf_field()); ?>


            <div class="row">

                <div class="well well-sm well-light">
                    <h3><?php echo e($details['othernames'] .' '.$details['surname']); ?> information
                        <br>
    <!--                    <<small>Simple Tabs</small>
                        -->
                    </h3>
                    <input type="hidden" name="driverno" value="<?php echo e($details['driverRegNo']); ?>"/>

                    <div id="tabs">
                        <ul>
                            <li>
                                <a href="#tabs-a">Personal Details</a>
                            </li>
                            <li>
                                <a href="#tabs-b">Passport Details</a>
                            </li>
                            <li>
                                <a href="#tabs-c">Other Data</a>
                            </li>
                            <li>
                                <a href="#tabs-d">Vehicles</a>
                            </li>
                            <li>
                                <a href="#tabs-e">Trips</a>
                            </li>

                        </ul>






                        <div id="tabs-a" class="panel-body">

                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">SurName</label>

                                        <input type="text" name="surname" value="<?php echo e($details['surname']); ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Other Names</label>

                                        <input type="text" name="othernames" value="<?php echo e($details['othernames']); ?>" class="form-control">
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Sex</label>

                                        <select class="select2 select2-hidden-accessible gender" name="gender"  tabindex="-1" aria-hidden="true" required>

                                            <option value="<?php echo e($details['gender']); ?>"><?php echo e($details['gender']); ?></option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Date Of Birth</label>

                                        <input type="text" name="dob" value="<?php echo e($details['dob']); ?>"  class="form-control datepicker" data-dateformat="yy-mm-dd">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Email Address</label>

                                        <input type="email" name="email" value="<?php echo e($details['email']); ?>"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Local Phone No</label>

                                        <input type="text" name="localPhone" value="<?php echo e($details['localPhone']); ?>"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Overseas Phone No</label>

                                        <input type="text" name="foreignPhone"  value="<?php echo e($details['foreignPhone']); ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Resident Country</label>


                                        <select class="select2 select2-hidden-accessible countries" name="residentCountryId"  tabindex="-1" aria-hidden="true" required>

                                            <option value="<?php echo e($details['residentCountry']); ?>"><?php echo e($details['residentCountry']); ?></option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Country Of Origin</label>


                                        <select class="select2 select2-hidden-accessible countries" name="countryCode"  tabindex="-1" aria-hidden="true" required>

                                            <option value="<?php echo e($details['country']); ?>"><?php echo e($details['country']); ?></option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Local Address</label>
                                        <textarea name="localAddress" rows="10" class="form-control">
                                        <?php echo e($details['localAddress']); ?>

                                        </textarea>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Overseas Address</label>
                                        <textarea name="foreignAddress" rows="10" class="form-control">
                                         <?php echo e($details['foreignAddress']); ?>

                                        </textarea>

                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Nationality ID No</label>

                                        <input type="text" value="<?php echo e($details['nationalId']); ?>"  name="nationalId" class="form-control">
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">License No</label>

                                        <input type="text" name="licenceNo" value="<?php echo e($details['licenceNo']); ?>"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Issue Date</label>

                                        <input type="text" name="issueDate" value="<?php echo e($details['issueDate']); ?>" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Expiry Date</label>

                                        <input type="text" name="expiryDate" value="<?php echo e($details['expiryDate']); ?>" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div id="tabs-b" class="panel-body">

                            <!-- widget content -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Passport No</label>

                                        <input type="text" name="passportNo" value="<?php echo e($details['passportNo']); ?>"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Issue Date</label>

                                        <input type="text" data-dateformat="yy-mm-dd" value="<?php echo e($details['passportIssueDate']); ?>" name="passportIssueDate" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Expiry Date</label>

                                        <input type="text" data-dateformat="yy-mm-dd" value="<?php echo e($details['passportExpiryDate']); ?>" name="passportExpiryDate" class="form-control datepicker">
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div id="tabs-c" class="panel-body">
                            <!-- widget content -->
                            <div class="widget-body">

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class=" control-label">Reg. Issue Date</label>

                                            <input type="text" data-dateformat="yy-mm-dd" value="<?php echo e($details['regIssueDate']); ?>" name="regIssueDate" class="form-control datepicker">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class=" control-label">Reg. Expiry Date</label>

                                            <input type="text" data-dateformat="yy-mm-dd" value="<?php echo e($details['regExpiryDate']); ?>" name="regExpiryDate" class="form-control datepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class=" control-label">Remarks</label>
                                            <textarea name="remarks" rows="10" class="form-control">
                                      <?php echo e($details['remarks']); ?>


                                            </textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end widget content -->


                        </div>

                        <div id="tabs-d" class="panel-body">

                            <table id="vehicleTbl" class="table table-condensed table-hover table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>Registration No</th>  
                                        <th>Assigned At</th>  

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($details['vehicles'] as $value) {
                                        echo '<tr>'
                                        . '<td>'
                                        . $value['vehicleRegNo']
                                        . '</td>'
                                        . '<td>'
                                        . $value['assignedAt']
                                        . '</td>'
                                        . '<td><a  href="../../vehicles/information/' . $value['vehicleRegNo'] . '"   type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" ><i class="glyphicon glyphicon-eye-open"></i> </a> ' .
                                        '<a  href="#"   type="button" class=" btn btn-labeled btn-danger btn-sm  col-sm-6" ><i class="glyphicon glyphicon-trash"></i></a> '
                                        . '</td>'
                                        . '</tr>';
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                        
                        
                                 <div id="tabs-e" class="panel-body">

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
                                        . $value['driver']['othernames'].' '.$value['driver']['surname']
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


<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
<script type="text/javascript">
    
        $('#tripsTbl').DataTable();

    var datatable = $('#vehicleTbl').DataTable();

    $('#tabs').tabs();


    $('#updatedriverForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        console.log('server data: ' + formData);
        $('#loaderModal').modal('show');

        $.ajax({
            url: "<?php echo e(url('driver/update')); ?>",
            type: "PUT",
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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>