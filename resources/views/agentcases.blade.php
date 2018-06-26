@extends('layouts.master')

@section('content')




<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="#">Report</a></li>
    <li class="breadcrumb-item active">Agent Cases</li>
    <!-- Breadcrumb Menu-->

</ol>


<div class="container-fluid">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Agent Cases</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Agents</label>

                                    <select class="select2 " name="agents" id="agents" tabindex="-1" aria-hidden="true" required>

                                        <option value="">Select ---</option>
                                        <option value="Ama">Ama</option>

                                    </select>

                                </div>
                            </div>


                            <div class="col-sm-6">
                                <label class=" control-label">Date Range</label>


                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </span>
                                    <input name="daterange" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!--/.col-->


        </div>


        <div class="card">
            <div class="card-header">
                <i class="fa fa-edit"></i> Cases

            </div>
            <div class="card-body table-responsive">
                <table id="agentsCasesTbl" class="  table table-striped table-hover table-fw-widget">
                    <thead>

                        <tr>
                            <th>Owner</th>
                            <th>Gender</th>
                            <th>Chassis Number</th>
                            <th>Vehicle Type</th>
                            <th>Entry Date</th>
                            <th>Country</th>
                            <th> Action</th>

                        </tr>
                    </thead>
                    <tbody >

                    </tbody>


                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@section('customjs')
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
            url: "{{url('reports/agentcases')}}",
            type: "POST",
            data: formData,
            dataType: 'json',
            success: function (data) {


                $('.loader').removeClass('be-loading-active');
                console.log('server data :' + data.data);
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
@endsection