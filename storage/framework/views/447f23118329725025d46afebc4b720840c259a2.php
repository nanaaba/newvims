<?php $__env->startSection('content'); ?>





<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active"> Audit Logs</li>
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
                        <i class="fa fa-edit"></i> Audit Logs

                    </div>

                    <?php
                    if (sizeof($data) > 0) {
                        ?>
                        <div class="card-body table-responsive">
                            <table id="usersTbl" class="table table-condensed table-hover table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>User</th>  
                                        <th>Activity</th>  
                                        <th>Remarks</th>  

                                        <th>Date Created</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $value) {
                                        echo '<tr>'
                                        . '<td>'
                                        . $value['userName']
                                        . '</td>'
                                        . '<td>'
                                        . $value['activity']
                                        . '</td>'
                                        . '<td>'
                                        . $value['remarks']
                                        . '</td>'
                                        . '<td>'
                                        . $value['timeInserted']
                                        . '</td>'
                                         . '</tr>';
                                    }
                                    ?>

                                </tbody>
                            </table>

                        </div>
                        <?php
                    } else {
                        echo 'No audits';
                    }
                    ?>

                </div>


            </div>

        </div>


        <!-- END ROW -->

    </div>
</form>

</div>



<!--Form Modals-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>

<script type="text/javascript">


    $('#roles').change(function () {

        var value = $(this).val();
        if (value == "Supervisor") {
            $('#regiondiv').show();
        } else {
            $('#regiondiv').hide();
        }
        console.log('value :' + value);

    });



    var datatable = $('#usersTbl').DataTable();



    function resetPassword(id) {
        $('#itemid').val(id);
        $('#resetModal').modal('show');
    }


    $('#userForm').on('submit', function (e) {

        e.preventDefault();
        var formData = $(this).serialize();
        console.log(formData);

        $('.loader').addClass('be-loading-active');
        $.ajax({
            url: "<?php echo e(url('users/save')); ?>",
            type: "POST",
            data: formData,
            dataType: 'json',
            success: function (data) {

                if (data == "401") {
                    $('#sessionModal').modal({backdrop: 'static'}, 'show');
                }

                if (data == "500") {
                    $('#errorModal').modal('show');
                }
                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data);
                var status = data.status;
                if (status == 0) {
                    $('#newuser').modal('hide');
                    document.getElementById("userForm").reset();

                    $('.feedback').html(data.message);
                    $('#successdiv').show();
                    $('#errordiv').hide();
                    getUsers();

                }
                if (status == 1) {
                    $('.feedback').html(data.message);
                    $('#errordiv').show();
                    $('#successdiv').hide();
                }

            }

        });
    });



    $('#updateuserForm').on('submit', function (e) {

        e.preventDefault();
        var formData = $(this).serialize();
        console.log(formData);

        $('.loader').addClass('be-loading-active');
        $.ajax({
            url: "<?php echo e(url('users/update')); ?>",
            type: "PUT",
            data: formData,
            dataType: 'json',
            success: function (data) {

                if (data == "401") {
                    $('#sessionModal').modal({backdrop: 'static'}, 'show');
                }

                if (data == "500") {
                    $('#errorModal').modal('show');
                }
                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data);
                var status = data.status;
                if (status == 0) {

                    $('#edituser').modal('hide');


                    document.getElementById("userForm").reset();

                    $('.feedback').html(data.message);
                    $('#successdiv').show();
                    $('#errordiv').hide();
                    getUsers();

                }
                if (status == 1) {
                    $('.feedback').html(data.message);
                    $('#errordiv').show();
                    $('#successdiv').hide();
                }

            }

        });
    });

    $('#deleteForm').on('submit', function (e) {

        e.preventDefault();
        var itemid = $('#itemid').val();
        var token = $('#token').val();
        $('#deleteModal').modal('hide');
        $('.loader').addClass('be-loading-active');
        $.ajax({
            url: "users/" + itemid,
            type: "DELETE",
            data: {_token: token},
            dataType: 'json',
            success: function (data) {

                if (data == "401") {
                    $('#sessionModal').modal({backdrop: 'static'}, 'show');
                }

                if (data == "500") {
                    $('#errorModal').modal('show');
                }

                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data);
                var status = data.status;
                if (status == 0) {
                    getUsers();
                    document.getElementById("deleteForm").reset();
                    $('.feedback').html(data.message);
                    $('#successdiv').show();
                    $('#errordiv').hide();
                }
                if (status == 1) {
                    $('.feedback').html(data.message);
                    $('#errordiv').show();
                    $('#successdiv').hide();
                }

            }

        });
    });


    $('#resetForm').on('submit', function (e) {

        e.preventDefault();
        var itemid = $('#itemid').val();
        //var token = $('#token').val();
        $('#resetModal').modal('hide');
        $('.loader').addClass('be-loading-active');
        $.ajax({
            url: "users/reset/" + itemid,
            type: "GET",
            dataType: 'json',
            success: function (data) {

                if (data == "401") {
                    $('#sessionModal').modal({backdrop: 'static'}, 'show');
                }

                if (data == "500") {
                    $('#errorModal').modal('show');
                }

                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data);
                var status = data.status;
                if (status == 0) {
                    getUsers();
                    document.getElementById("deleteForm").reset();
                    $('.feedback').html(data.message);
                    $('#successdiv').show();
                    $('#errordiv').hide();
                }
                if (status == 1) {
                    $('.feedback').html(data.message);
                    $('#errordiv').show();
                    $('#successdiv').hide();
                }

            }

        });
    });




</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>