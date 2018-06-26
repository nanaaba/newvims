<?php $__env->startSection('content'); ?>


<div id="content">
    <div class="page-head">
        <h2 class="page-head-title"> Drivers</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Drivers</a></li>
            <li class="active">All Drivers</li>
        </ol>
    </div>
    <div class="main-content container-fluid">
        <section id="widget-grid" class="">


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

                <!-- NEW COL START -->
                <article class="col-sm-12 col-md-12 col-lg-12 ">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-sortable"  data-widget-editbutton="false" data-widget-custombutton="false" role="widget">

                        <header role="heading" class="ui-sortable-handle">
                           

                            <span class="widget-icon"> 
                                <i class="fa fa-edit"></i> </span>
                            <h2>Drivers </h2>				

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

                                <table id="driverTbl" class="table table-condensed table-hover table-bordered table-striped">
                                    <thead>
                                        <tr>

                                            <th>Name</th>  
                                            <th>Email</th>  
                                            <th>Country</th>  
                                            <th>License No</th>  
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>


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





    var datatable = $('#driverTbl').DataTable({
          "pageLength": 20

    });




    getDrivers();

    function getDrivers() {
        $('#loaderModal').modal('show');

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
                                '<a  href="information/' + value.driverRegNo + '"   type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" ><i class="glyphicon glyphicon-eye-open"></i> </a> ' +
                                '<a  href="#" onclick="deleteType(\'' + value.driverRegNo + '\',\'' + name + '\')"    type="button" class=" btn btn-labeled btn-danger btn-sm  col-sm-6" ><i class="glyphicon glyphicon-trash"></i></a> ' +
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