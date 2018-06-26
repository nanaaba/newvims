<?php $__env->startSection('content'); ?>


<div id="content">
    <div class="page-head">
        <h2 class="page-head-title"> Assign Vehicles</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="<?php echo e(url('drivers/all')); ?>">Drivers</a></li>
            <li class="active">Vehicles Assignment</li>
        </ol>
    </div>
    
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
    <div class="main-content container-fluid">
        <section id="widget-grid" class="">

            <article class="col-sm-12 col-md-12 col-lg-12 ">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">

                    <header role="heading" class="ui-sortable-handle">
                        <div class="jarviswidget-ctrls" role="menu">   
                            <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a>
                            <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen">
                                <i class="fa fa-expand "></i></a>
                        </div>

                        <span class="widget-icon"> 
                            <i class="fa fa-edit"></i> </span>
                        <h2>Assign Vehicles </h2>				

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
                            
                            <form id="assignForm">

                                <?php echo e(csrf_field()); ?>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Drivers</label>

                                        <select class="select2 select2-hidden-accessible drivers" name="driver"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select ---</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Vehicles</label>

                                        <select class="select2 select2-hidden-accessible vehicles" multiple name="vehicles[]"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select ---</option>

                                        </select>

                                    </div>
                                </div>

                                <footer class="pull-right">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Assign
                                    </button>
                                </footer>
                                <br>
                            </form>
                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>

            </article>

            <!-- START ROW -->

<!--            <div class="row">

                 NEW COL START 
                <article class="col-sm-12 col-md-12 col-lg-12 ">

                     Widget ID (each widget will need unique ID)
                    <div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">

                        <header role="heading" class="ui-sortable-handle">
                            <div class="jarviswidget-ctrls" role="menu">   
                                <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a>
                                <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen">
                                    <i class="fa fa-expand "></i></a>
                            </div>

                            <span class="widget-icon"> 
                                <i class="fa fa-edit"></i> </span>
                            <h2>Drivers Vehicles </h2>				

                            <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                         widget div
                        <div role="content">

                             widget edit box 
                            <div class="jarviswidget-editbox">
                                 This area used as dropdown edit box 

                            </div>
                             end widget edit box 

                             widget content 
                            <div class="widget-body">

                                <table id="vehicleTbl" class="table table-condensed table-hover table-bordered table-striped">
                                    <thead>
                                        <tr>

                                            <th>Driver Reg.No</th>  
                                            <th>Vehicle Reg.No</th>  

                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>
                             end widget content 

                        </div>
                         end widget div 

                    </div>

                </article>



            </div>-->


            <!-- END ROW -->

        </section>
    </div>
</form>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>

<script type="text/javascript">





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
                        text: item.othernames + ' ' + item.surname
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