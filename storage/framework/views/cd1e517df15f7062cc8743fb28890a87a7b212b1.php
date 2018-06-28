<?php $__env->startSection('content'); ?>




<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="#">Trips</a></li>
    <li class="breadcrumb-item active">All Trips</li>
    <!-- Breadcrumb Menu-->

</ol>





<div class="container-fluid">
    <div class="animated fadeIn">


        <!-- START ROW -->
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



  <?php

$trips = json_decode($details, true);
?>
        <div class="row">
            <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i> Trips

                </div>
                <div class="card-body table-responsive">
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
                                        . '<td><a   href="../trip/' . $value['tripNo'] . '"    type="button" class=" btn  btn-primary " ><i class="fa fa-search-plus"></i> </a></td> ' 
                                         
                                        . '</tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                  
                </div>
            </div>


            </div>

        </div>


        <!-- END ROW -->

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