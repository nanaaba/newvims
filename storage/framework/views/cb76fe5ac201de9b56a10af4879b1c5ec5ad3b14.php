<?php $__env->startSection('content'); ?>









<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Drivers</li>
    <li class="breadcrumb-item active">Vehicles Assignment</li>
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



        <div class="card">
            <div class="card-header">
                <strong>Vehicles Assignment</strong>
            </div>
            <div class="card-body">
                <form id="assignForm">

                    <div class="row">
                        <div class="col-sm-12">


                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Drivers</label>

                                        <select class="select2 form-control  drivers" name="driver"  tabindex="-1" aria-hidden="true" required style="width: 100%">

                                            <option value="">Select ---</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Vehicles</label>

                                        <select class="select2 form-control  vehicles"  multiple name="vehicles[]"  tabindex="-1" aria-hidden="true" required style="width: 100%">

                                            <option value="">Select ---</option>

                                        </select>

                                    </div>
                                </div>

                            </div>

                            <br>


                        </div>
                    </div>
                    <footer class="pull-right">
                        <button type="submit" class="btn btn-primary btn-block">
                            Assign
                        </button>
                    </footer>
                </form>
            </div>
        </div>
    </div>


</div>

</div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>

<script type="text/javascript">

    $('.select2').select2();


    var datatable = $('#vehicleTbl').DataTable();




    //getDrivers();



    getDrivers();
    getVehicles();
    function getDrivers() {


        $.ajax({
            url: "<?php echo e(url('drivers/getall')); ?>",
            type: "GET",
            dataType: 'json',
            success: function (response) {



                $.each(response.data, function (i, item) {

                    $('.drivers').append($('<option>', {
                        value: item.driverRegNo,
                        text:  item.surname
                    }));
                });

            }

        });
    }


    function getVehicles() {


        $.ajax({
            url: "<?php echo e(url('vehicles/getall')); ?>",
            type: "GET",
            dataType: 'json',
            success: function (response) {



                $.each(response.data, function (i, item) {

                    $('.vehicles').append($('<option>', {
                        value: item.vehicleNo,
                        text: item.chasisNo
                    }));
                });

            }

        });
    }

    //assignForm
    $('#assignForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        console.log('server data: ' + formData);
        $('#loaderModal').modal('show');

        $.ajax({
            url: "<?php echo e(url('driver/assign')); ?>",
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