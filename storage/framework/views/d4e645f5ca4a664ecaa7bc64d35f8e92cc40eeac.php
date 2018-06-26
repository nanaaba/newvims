<?php $__env->startSection('content'); ?>

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">Yearly Report</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Report</a></li>
            <li class="active">Yearly Report</li>
        </ol>
    </div>
    <div class="main-content container-fluid">
        <!--Basic forms-->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default panel-border-color panel-border-color-primary">
                    <div class="panel-heading panel-heading-divider">
                        <div class="panel-body">
                            <form id="reportForm" >

                                <?php echo e(csrf_field()); ?>


                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class=" control-label">Year</label>

                                            <select class="select2 select2-hidden-accessible" name="year"  tabindex="-1" aria-hidden="true">

                                                <option value="">Select ---</option>
                                                <?php
                                                $i = '2017';
                                                $year = date("Y") + 3;
                                                while ($i < $year) {
                                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                                    $i++;
                                                }
                                                ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class=" control-label">Toll</label>

                                            <select class="select2 select2-hidden-accessible" id="tollpoints" name="toll" tabindex="-1" aria-hidden="true" required>

                                                <option value="">Select ---</option>

                                            </select>

                                        </div>
                                    </div>
                                </div>




                                <div class="row xs-pt-15">
                                    <div class="col-xs-6">

                                    </div>
                                    <div class="col-xs-6">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Spool Result</button>

                                        </p>
                                    </div>
                                </div>
                            </form>





                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default panel-border-color panel-border-color-primary">



                    <div class="panel-body">
                        <table id="transactionTbl" class=" table-responsive table table-striped table-hover table-fw-widget">
                            <thead>
                                <tr>
                                    <th>Transaction Year</th>
                                    <th>Toll</th>
                                    <th>Category</th>
                                    <th>No Of Transactions</th>
                                    <th>Total Transactions(GHS)</th>



                                </tr>
                            </thead>
<!--                            <tfoot>
                                <tr>
                                    <th colspan="4" style="text-align:right">Total:</th>
                                    <th></th>
                                </tr>
                            </tfoot>-->
                            <tbody id="transactionbody">

                            </tbody>
                            <tfoot style="font-size: 20px;">
                                <tr>
                                    <th colspan="2"></th>


                                    <th colspan="2">
                                        Total Transactions Cost :
                                    </th>
                                    <th  id="totalcost"></th>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('customjs'); ?>
    <script type="text/javascript">


//        var datatable = $('#transactionTbl').DataTable({
//            buttons: [
//                'copy', 'excel', 'pdf'
//            ]
//        });
//        datatable.buttons().container()
//                .appendTo($('.col-sm-6:eq(0)', datatable.table().container()));

        var datatable = $('#transactionTbl').DataTable({
            lengthChange: false,
            buttons: [
                {extend: 'copyHtml5', footer: true},
                {extend: 'excelHtml5', footer: true},
                {extend: 'csvHtml5', footer: true},
                {extend: 'pdfHtml5', footer: true},
                {extend: 'print', footer: true}
            ],
            "columnDefs": [
                {"width": "15%", "targets": 0},
                {"width": "30%", "targets": 1},
                {"width": "25%", "targets": 2},
                {"width": "15%", "targets": 3},
                {"width": "15%", "targets": 4}
            ]

        });

        datatable.buttons().container()
                .appendTo('#transactionTbl_wrapper .col-sm-6:eq(0)');

        $('#reportForm').on('submit', function (e) {
            $('.loader').addClass('be-loading-active');
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: "<?php echo e(url('reports/yearlyreport')); ?>",
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
                    console.log('server data :' + data.data);
                    var dataSet = data.data;
                    console.log(dataSet);
                    datatable.clear().draw();
                    console.log('size' + dataSet.length);
                    if (dataSet.length == 0) {
                        console.log("NO DATA!");
                        $('#infoModal').modal('show');

                        return;
                    } else {
                        $.each(dataSet, function (key, value) {




                            var j = -1;
                            var r = new Array();
                            // represent columns as array
                            r[++j] = '<td>' + value.transaction_year + '</td>';
                            r[++j] = '<td class="subject"> ' + value.toll_name + '</td>';
                            r[++j] = '<td class="subject">' + value.category_name + '</td>';

                            r[++j] = '<td class="subject">' + value.nooftransactions + '</td>';
                            r[++j] = '<td class="subject"> GHS ' + value.totaltransactions + '</td>';
                            rowNode = datatable.row.add(r);
                        });
                        rowNode.draw().node();
                    }
                    var total = datatable.column(4).data().sum();
                    $('#totalcost').html('GHS ' + total.toFixed(2));

                    $('.loader').removeClass('be-loading-active');
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
                    $('#errorModal').modal('show');
                }
                var dataSet = data.data;
                $.each(dataSet, function (i, item) {

                    $('#tollpoints').append($('<option>', {
                        value: item.id,
                        text: item.area
                    }));
                });
                $('#loaderModal').modal('hide');
            }
        });
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.forms', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>