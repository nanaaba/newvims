<?php $__env->startSection('content'); ?>

<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="#">Drivers</a></li>
    <li class="breadcrumb-item active">All Drivers</li>
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




        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit"></i> Drivers

                    </div>
                    <div class="card-body table-responsive">
                        <table id="driverTbl" class="table table-condensed table-hover table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>Name</th>  
                                    <th>Email</th>  
                                    <th>Country</th>  
                                    <th>License No</th>  
                                    <th class="centerdiv">Action</th>

                                </tr>
                            </thead>
                            <tbody>


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





    var datatable = $('#driverTbl').DataTable({
        "columnDefs": [
            {"width": "40%", "targets": 0},
            {"width": "15%", "targets": 1},
            {"width": "15%", "targets": 2},
            {"width": "15%", "targets": 3}
        ]
    });




    getDrivers();

    function getDrivers() {
        // $('#loaderModal').modal('show');

        $.ajax({
            url: "<?php echo e(url('drivers/getall')); ?>",
            type: "GET",
            dataType: 'json',
            success: function (data) {


                console.log('server data :' + data.data);
                var dataSet = data.data;
                console.log(dataSet);
                datatable.clear().draw();
                console.log('size' + dataSet.length);
                if (dataSet.length == 0) {
                    console.log("NO DATA!");
                } else {
                    $.each(dataSet, function (key, value) {
                        var name = value.othernames + ' ' + value.surname;

                        var j = -1;
                        var r = new Array();
                        // represent columns as array
                        r[++j] = '<td class="subject"> ' + name + '</td>';
                        r[++j] = '<td class="subject">' + value.email + '</td>';
                        r[++j] = '<td class="subject">' + value.country + '</td>';
                        r[++j] = '<td class="subject">' + value.licenceNo + '</td>';

                        r[++j] = '<td class="actions">' +
                                '<a  href="information/' + value.driverRegNo + '"   type="button" class="btn btn-success" >  <i class="fa fa-search-plus "></i> </a> ' +
                                '<a  href="#" onclick="deleteType(\'' + value.driverRegNo + '\',\'' + name + '\')"    type="button" class="btn btn-danger" > <i class="fa fa-trash-o "></i></a> ' +
                                '</td>';
                        rowNode = datatable.row.add(r);
                    });
                    rowNode.draw().node();
                }

                $('#loaderModal').modal('hide');
            }

        });
    }



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