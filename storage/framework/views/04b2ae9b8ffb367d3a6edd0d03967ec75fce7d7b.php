<?php $__env->startSection('content'); ?>




<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="#">Report</a></li>
    <li class="breadcrumb-item active"> Cases</li>
    <!-- Breadcrumb Menu-->

</ol>


<div class="container-fluid">
    <div class="animated fadeIn">




        <div class="card">
            <div class="card-header">
                <i class="fa fa-edit"></i>Reported Cases

            </div>
            <div class="card-body table-responsive">
                <table id="agentsCasesTbl" class=" table table-condensed table-hover table-bordered table-striped">
                    <thead>

                        <tr>
                            <th>Front Plate</th>
                            <th>Back Plate</th>
                            <th>Country</th>
                            <th>Driver RegNo</th>
                            <th>Vehicle RegNo</th>
                            <th>Vehicle Model</th>
                            <th>Owner</th>
                            <th>Days OverStayed</th>
                            <th>Status</th>
                            <th>Reported By</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($data as $value) {

                            if ($value['status'] == "Open") {
                                $status_color = "success";
                            } else {
                                $status_color = "danger";
                            }

                            echo '<tr>'
                            . '<td>'
                            . $value['frontPlate']
                            . '</td>'
                            . '<td>'
                            . $value['backPlate']
                            . '</td>'
                            . '<td>'
                            . $value['country']
                            . '</td>'
                            . '<td>'
                            . $value['driverRegNo']
                            . '</td>'
                            . '<td>'
                            . $value['vehicleRegNo']
                            . '</td>'
                            . '<td>'
                            . $value['vehicleModel']
                            . '</td>'
                            . '<td>'
                            . $value['owner']
                            . '</td>'
                            . '<td>'
                            . $value['daysOverStayed']
                            . '</td>'
                            . '<td> <span class="badge badge-'.$status_color.'">' . $value['status'] . '</span>'
                            . '</td>'
                            . '<td>'
                            . $value['reportedBy']
                            . '</td>'
                            . '</tr>';
                        }
                        ?>
                    </tbody>


                </table>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
<script type="text/javascript">

    $('input[name="daterange"]').daterangepicker({
        opens: 'left',
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    });

//$('input[name="daterange"]').daterangepicker();
//        var datatable = $('#transactionTbl').DataTable({
//            buttons: [
//                'copy', 'excel', 'pdf'
//            ]
//        });
//        datatable.buttons().container()
//                .appendTo($('.col-sm-6:eq(0)', datatable.table().container()));

    var datatable = $('#agentsCasesTbl').DataTable({
        lengthChange: false,
        buttons: [
            {extend: 'copyHtml5', footer: true},
            {extend: 'excelHtml5', footer: true},
            {extend: 'csvHtml5', footer: true},
            {extend: 'pdfHtml5', footer: true},
            {extend: 'print', footer: true}
        ]
    });


    datatable.buttons().container()
            .appendTo('#agentsCasesTbl_wrapper .col-sm-6:eq(0)');
    $('#agentCasesForm').on('submit', function (e) {
        $('.loader').addClass('be-loading-active');
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: "<?php echo e(url('reports/agentcases')); ?>",
            type: "POST",
            data: formData,
            dataType: 'json',
            success: function (data) {


                $('.loader').removeClass('be-loading-active');
                var dataSet = data.data;
                console.log(dataSet);
                datatable.clear().draw();
                console.log('size' + dataSet.length);
                if (dataSet.length == 0) {
                    $('#infoModal').modal('show');

                    return;
                } else {
                    $.each(dataSet, function (key, value) {




                        var j = -1;
                        var r = new Array();
                        // represent columns as array
                        r[++j] = '<td>' + value.ownerName + '</td>';
                        r[++j] = '<td>' + value.gender + '</td>';
                        r[++j] = '<td>' + value.chassisNumber + '</td>';
                        r[++j] = '<td class="subject">' + value.vehicleType + '</td>';
                        r[++j] = '<td class="subject"> ' + value.entryDate + '</td>';
                        r[++j] = '<td class="subject">' + value.country + '</td>';
                        r[++j] = '<td class="actions">' +
                                '<a  href="#"  onclick="viewCarDetail(' + value.id + ')"  type="button" class="icon btn btn-outline-info btn-sm  col-sm-6 btn-edit editBtn" ><i title="View" class="mdi mdi-eye""></i><span class="hidden-md hidden-sm hidden-xs"> </span></a>' +
                                '</td>';
                        rowNode = datatable.row.add(r);
                    });
                    rowNode.draw().node();
                }
                var total = datatable.column(2).data().sum();
                $('#totalcost').html('GHS ' + total.toFixed(2));
                console.log('AMount' + total);
                $('.loader').removeClass('be-loading-active');
            }



        });
    });

    function viewCarDetail(id) {


        $('#cainfoModal').modal('show');
    }

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>