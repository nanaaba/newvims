<?php $__env->startSection('content'); ?>


<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">Cashiers</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Configuration</a></li>
            <li class="active">Cashiers</li>
        </ol>
    </div>
    <div class="main-content container-fluid">



        <div id="errormsg">
            <div role="alert" id="successdiv" class="alert alert-success alert-icon alert-dismissible"  style="display: none">
                <div class="icon"><span class="mdi mdi-check"></span></div>
                <div class="message">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button>
                    <span class="feedback"></span>
                </div>
            </div> 
            <div id="errordiv" role="alert" class="alert alert-danger alert-icon alert-dismissible"  style="display: none">
                <div class="icon"><span class="mdi mdi-close"></span></div>
                <div class="message">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button>
                    <span class="feedback"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default table-responsive">

                    <div class="panel-body">
                        <table id="transactionTbl" class="table table-condensed table-hover table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Toll</th>
                                    <th>Region Name</th>
                                    <th>Date Created</th>
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


        <div id="editmodal" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
            <div class="modal-dialog custom-width">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
                        <h3 class="modal-title">Update Cashier</h3>
                    </div>
                    <form id="updateForm">
                        <div class="modal-body">
                            <?php echo e(csrf_field()); ?>


                            <input type="hidden" id="cashierid" name="cashierid"/>
                            <div class="form-group">
                                <label>Cashier Name</label>
                                <input type="text" name="name" id="cashiername" placeholder="Cashier Name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" name="contact" id="contact" placeholder="Contact" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Toll</label>

                                <select class="select2 select2-hidden-accessible" id="tollpoints" name="toll" tabindex="-1" aria-hidden="true">

                                    <option value="">Select ---</option>

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



    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>

<script type="text/javascript">
//    $(document).ready(function () {
//        //initialize the javascript
//        App.init();
//        App.dataTables();
//
//    });


    var datatable = $('#transactionTbl').DataTable({
        "order": [[4, "desc"]]

    });
    $('.loader').addClass('be-loading-active');
    getCashiers();
    function getCashiers() {
        $.ajax({
            url: "<?php echo e(url('configuration/getcashiers')); ?>",
            type: "GET",
            dataType: 'json',
            success: function (data) {

                if (data == "401") {
                    $('#sessionModal').modal({backdrop: 'static'}, 'show');
                }

                if (data == "500") {
                    $('#errorModal').modal({backdrop: 'static'}, 'show');
                }


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
                        r[++j] = '<td>' + value.name + '</td>';
                        r[++j] = '<td class="subject"> ' + value.contact + '</td>';
                        r[++j] = '<td class="subject">' + value.area + '</td>';
                        r[++j] = '<td class="subject">' + value.region_name + '</td>';
                        r[++j] = '<td class="subject">' + value.dateadded + '</td>';
                        r[++j] = '<td class="actions">' +
                                '<a  href="#"  onclick="editCashier(' + value.id + ')"  type="button" class="icon btn btn-outline-info btn-sm  col-sm-6 btn-edit editBtn" ><i title="View" class="mdi mdi-eye""></i><span class="hidden-md hidden-sm hidden-xs"> </span></a>' +
                                '<a  href="#" onclick="deleteCashier(' + value.id + ')" type="button" class="icon btn btn-outline-info btn-sm  col-sm-6 btn-edit editBtn" ><i title ="Delete" class="mdi mdi-delete""></i><span class="hidden-md hidden-sm hidden-xs"> </span></a>' +
                                '</td>';
                        rowNode = datatable.row.add(r);
                    });

                    rowNode.draw().node();
                }

                $('.loader').removeClass('be-loading-active');

            }

        });
    }
    function editCashier(id) {

        $.ajax({
            url: "cashier/" + id,
            type: "GET",
            dataType: 'json',
            success: function (data) {
                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data);
                if (data == "401") {
                    $('#sessionModal').modal({backdrop: 'static'}, 'show');
                }

                if (data == "500") {
                    $('#errorModal').modal({backdrop: 'static'}, 'show');
                }
                var dataArray = data.data;

                $('#cashiername').val(dataArray[0].name);
                $('#contact').val(dataArray[0].contact);
                $('#email').val(dataArray[0].email);

                $('#cashierid').val(dataArray[0].id);
                $('#tollpoints').val(dataArray[0].toll);
                $('#tollpoints').change();
                $('#editmodal').modal('show');
            }

        });
    }


    function deleteCashier(id) {
        $('#itemid').val(id);
        $('#deleteModal').modal('show');
    }


    $('#updateForm').on('submit', function (e) {

        e.preventDefault();
        var formData = $(this).serialize();
        console.log(formData);

        $('.loader').addClass('be-loading-active');
        $.ajax({
            url: "<?php echo e(url('configuration/updatecashier')); ?>",
            type: "PUT",
            data: formData,
            dataType: 'json',
            success: function (data) {
                if (data == "401") {
                    $('#sessionModal').modal({backdrop: 'static'}, 'show');
                }

                if (data == "500") {
                    $('#errorModal').modal({backdrop: 'static'}, 'show');
                }
                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data);
                var status = data.status;
                if (status == 0) {

                    $('#editmodal').modal('hide');


                    document.getElementById("updateForm").reset();

                    $('.feedback').html(data.message);
                    $('#successdiv').show();
                    $('#errordiv').hide();
                    getCashiers();

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
            url: "deletecashier/" + itemid,
            type: "DELETE",
            data: {_token: token},
            dataType: 'json',
            success: function (data) {
                if (data == "401") {
                    $('#sessionModal').modal({backdrop: 'static'}, 'show');
                }

                if (data == "500") {
                    $('#errorModal').modal({backdrop: 'static'}, 'show');
                }

                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data);
                var status = data.status;
                if (status == 0) {
                    getCashiers()
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

    $.ajax({
        url: "<?php echo e(url('configuration/gettollpoints')); ?>",
        type: "GET",
        dataType: 'json',
        success: function (data) {
            if (data == "401") {
                $('#sessionModal').modal({backdrop: 'static'}, 'show');
            }

            if (data == "500") {
                $('#errorModal').modal({backdrop: 'static'}, 'show');
            }
            var dataSet = data.data;

            $.each(dataSet, function (i, item) {

                $('#tollpoints').append($('<option>', {
                    value: item.id,
                    text: item.area
                }));
            });

        }
    });


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.forms', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>