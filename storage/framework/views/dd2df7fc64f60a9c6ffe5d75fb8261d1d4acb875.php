<?php $__env->startSection('content'); ?>



<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="#">Users</a></li>
    <li class="breadcrumb-item active">All Users</li>
    <!-- Breadcrumb Menu-->

</ol>




<div class="container-fluid">
    <div class="animated fadeIn">


        <!-- START ROW -->


        <div class="row"  >
            <div class="col-lg-12">
                <div class="pull-right">
                    <button data-toggle="modal" data-target="#newuser" type="button" class="btn btn-space btn-primary">New User</button>
                    <!--                    <a  class="btn btn-primary" href="bulk-beneficiary-upload" >New Category</a>-->

                </div>

            </div>

        </div>
        <br>


        <div id="errordiv"  style="display: none;">
            <div class="alert alert-danger " role="alert">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <strong>Error!</strong> <span class="feedback"> </span>
            </div>

        </div>

        <div id="successdiv" style="display: none;" >
            <div class="alert alert-success " role="alert">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <strong>Success!</strong> <span class="feedback"> </span>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit"></i> Users

                    </div>
                    <div class="card-body table-responsive">


                        <table id="usersTbl" class=" table table-condensed table-hover table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>Name</th>  
                                    <th>Email</th>  
                                    <th>Role</th>  
                                    <th>Active</th>
                                    <th>Action</th>

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









<!--Form Modals-->
<div id="newuser" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
    <div class="modal-dialog custom-width">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
                <h3 class="modal-title">New User</h3>
            </div>


            <form id="userForm">
                <div class="modal-body">
                    <?php echo e(csrf_field()); ?>



                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" name="surname" class="form-control " required>
                    </div>
                    <div class="form-group">
                        <label>Other Names</label>
                        <input type="text" name="othernames" class="form-control " required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control " required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="test@gra.gov.gh" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="contact" minlength="10" maxlength="10" class="form-control" required  onkeypress="return isNumber(event)" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirmpassword" id="confirm_password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control select2" name="role" style="width: 100%"  id="roles" required>

                            <option value="">Select ---</option>
                            <option value="Admin">Administrator</option>
                            <option value="Supervisor">Supervisor</option>

                        </select>
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


<div id="edituser" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
    <div class="modal-dialog custom-width">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
                <h3 class="modal-title">Update User</h3>
            </div>
            <form id="updateuserForm">
                <div class="modal-body">
                    <?php echo e(csrf_field()); ?>


                    <input type="hidden" id="userid" name="userid"/>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" name="surname" id="surname" class="form-control " required>
                    </div>
                    <div class="form-group">
                        <label>Other Names</label>
                        <input type="text" name="othernames" id="othernames" class="form-control " required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" id="username" class="form-control " required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>



                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control select2" name="role" style="width: 100%"  id="editrole" required>
                            <option value="">Select ---</option>
                            <option value="Admin">Administrator</option>
                            <option value="Supervisor">Supervisor</option>

                        </select>
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


    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

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

        var password = $('#password').val();
        var confirm_password = $('#confirm_password').val();
        if (password == confirm_password) {
            $.ajax({
                url: "<?php echo e(url('users/save')); ?>",
                type: "POST",
                data: formData,
                dataType: 'json',
                success: function (data) {
                    console.log('server data :' + data);


                    $('#loaderModal').modal('hide');
                    $('#newuser').modal('hide');

                    var status = data.status;

                    if (status == 0) {
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
        } else {
            $('.feedback').html('Password do not match');
            $('#errordiv').show();
            $('#successdiv').hide();
        }
        $('#loaderModal').modal('show');

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
                $('#edituser').modal('hide');


                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data);
                var status = data.status;
                if (status == 0) {

                    $('#edituser').modal('hide');


                    document.getElementById("updateuserForm").reset();

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
        var itemid = $('#code').val();
        var token = $('#token').val();
        $('#deleteModal').modal('hide');
        $('.loader').addClass('be-loading-active');
        $.ajax({
            url: "users/" + itemid,
            type: "DELETE",
            data: {_token: token},
            dataType: 'json',
            success: function (data) {

                $('#confirmModal').modal('hide');


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

    getUsers();

    function getUsers() {
        $.ajax({
            url: "<?php echo e(url('users/all')); ?>",
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


                        var j = -1;
                        var r = new Array();
                        // represent columns as array
                        r[++j] = '<td class="subject"> ' + value.othernames + ' ' + value.surname + '</td>';
                        r[++j] = '<td class="subject">' + value.email + '</td>';
                        r[++j] = '<td class="subject">' + value.role + '</td>';

                        r[++j] = '<td class="subject">' + value.isActive + '</td>';

                        r[++j] = '<td class="actions">' +
                                '<a   href="#"  onclick="editUser(\'' + value.userId + '\')"   type="button" class="btn btn-success" > <i class="fa fa-search-plus"></i> </a> ' +
                                '<a  href="#" onclick="deleteUser(\'' + value.id + '\')" type="button" class="btn btn-danger" > <i class="fa fa-trash-o "></i></a> ' +
                                '</td>';
                        rowNode = datatable.row.add(r);
                    });
                    rowNode.draw().node();
                }

                $('.loader').removeClass('be-loading-active');
            }

        });
    }

    function editUser(id) {

        $.ajax({
            url: "users/" + id,
            type: "GET",
            dataType: 'json',
            success: function (data) {
                $('#editregiondiv').hide();
                if (data == "401") {
                    $('#sessionModal').modal({backdrop: 'static'}, 'show');
                }

                if (data == "500") {
                    $('#errorModal').modal('show');
                }
                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data);
                var dataArray = data.data;

                $('#othernames').val(dataArray.othernames);
                $('#surname').val(dataArray.surname);
                $('#email').val(dataArray.email);
                $('#editrole').val(dataArray.role);
                $('#userid').val(dataArray.userId);
                $('#username').val(dataArray.username);

                $('#editrole').change();

                $('#edituser').modal('show');
            }

        });
    }


    function deleteUser(id) {

        $('#code').val(id);
        $('#confirmModal').modal('show');

    }

    function resetPassword(id) {
        alert('reset: ' + id);
    }
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>