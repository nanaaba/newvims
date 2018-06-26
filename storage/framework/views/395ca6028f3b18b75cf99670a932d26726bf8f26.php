<?php $__env->startSection('content'); ?>


<div id="content">
    <div class="page-head">
        <h2 class="page-head-title"> Trips</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Trips</a></li>
            <li class="active">All Trips</li>
        </ol>
    </div>
    <?php

$trips = json_decode($details, true);
?>
    <div class="main-content container-fluid">
        <section id="widget-grid" class="">

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
            <!-- START ROW -->

            <div class="row">

                <!-- NEW COL START -->
                <article class="col-sm-12 col-md-12 col-lg-12 ">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-sortable"  data-widget-editbutton="false" data-widget-custombutton="false" role="widget">

                        <header role="heading" class="ui-sortable-handle">
                            

                            <span class="widget-icon"> 
                                <i class="fa fa-edit"></i> </span>
                            <h2>Trips </h2>				

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

                                <table id="vehicleTbl" class="table table-condensed table-hover table-bordered table-striped">
                                    <thead>
                                         <tr>

                                        <th>Trip Type</th>  
                                        <th>Final Country</th>  
                                        <th>Vehicle(Front Plate)</th>  
                                        <th>Driver</th> 
                                        <th>Check In</th> 

                                        <th>Action</th>
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
                                        . '<td><a   href="../trip/' . $value['tripNo'] . '"    type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" ><i class="glyphicon glyphicon-eye-open"></i> </a></td> ' 
                                         
                                        . '</tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>

                </article>



            </div>


            <!-- END ROW -->

        </section>
    </div>
</form>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>

<script type="text/javascript">





    var datatable = $('#vehicleTbl').DataTable({
        "pageLength": 20
    });





    function deleteType(code, title) {
        console.log(code + title);
        $('#code').val(code);
        $('#holdername').html(title);
        $('#confirmModal').modal('show');
    }

    $('#deleteForm').on('submit', function (e) {
        e.preventDefault();
        $('input:submit').attr("disabled", true);
        var code = $('#code').val();
        var token = $('#token').val();
        $('#confirmModal').modal('hide');
        $('#loaderModal').modal('show');

        $.ajax({
            url: code,
            type: "DELETE",
            data: {_token: token},
            dataType: "json",
            success: function (data) {
                // $("#loader").hide();
                $('input:submit').attr("disabled", false);

                document.getElementById("deleteForm").reset();
                console.log(data);
                var status = data.status;
                console.log('status is :' + status);
                $('#loaderModal').modal('hide');

                if (status == 0) {
                    getDrivers();

                    $('#successmsg').html(data.message);
                    $('#sucessdiv').show();
                } else {
                    $('#errormsg').html(data.message);
                    $('#errordiv').show();
                }
                $(window).scrollTop(0);

            },
            error: function (jXHR, textStatus, errorThrown) {
                $('#loaderModal').modal('hide');

                alert(errorThrown);
            }
        });

    });



</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>