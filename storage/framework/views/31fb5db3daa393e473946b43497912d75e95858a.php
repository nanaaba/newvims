<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('vendors/css/gauge.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('vendors/css/toastr.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>




<!-- END RIBBON -->

<!-- MAIN CONTENT -->
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
    <!-- Breadcrumb Menu-->

</ol>


<div class="container-fluid">

    <div class="animated fadeIn">

        <div class="card-group mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-bus"></i>
                    </div>
                    <div class="h4 mb-0"><?php echo e($data['newTvi']); ?></div>
                    <small class="text-muted text-uppercase font-weight-bold">New TVI Entry</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-bus"></i>
                    </div>
                    <div class="h4 mb-0"><?php echo e($data['exitedTvi']); ?></div>
                    <small class="text-muted text-uppercase font-weight-bold">Exited TVI</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-bus"></i>
                    </div>
                    <div class="h4 mb-0"><?php echo e($data['overStayedTvi']); ?></div>
                    <small class="text-muted text-uppercase font-weight-bold"> Overstayed TVI</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-people"></i>
                    </div>
                    <div class="h4 mb-0"><?php echo e($data['blackListed']); ?></div>
                    <small class="text-muted text-uppercase font-weight-bold">BlackListed Drivers</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-black" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-bus"></i>
                    </div>
                    <div class="h4 mb-0"><?php echo e($data['reportedCases']); ?></div>
                    <small class="text-muted text-uppercase font-weight-bold">Reported Cases</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <h4 class="card-title">Traffic</h4>
                                <div class="small text-muted" style="margin-top:-10px;"><?php echo date('F Y') ?></div>
                            </div>
                            <div class="col-7">
                                <button type="button" class="btn btn-primary float-right"><i class="icon-cloud-download"></i></button>
                                <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                                    <!-- class="btn btn-outline-secondary active"-->
                                    <label class="btn btn-outline-secondary active">
                                        <input type="radio" name="trends" value="monthly" id="monthlytrends" checked > Month
                                    </label>
                                    <label class="btn btn-outline-secondary" >
                                        <input type="radio" name="trends" value="yearly" id="yearlytrends" > Year
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--                        <div class="chart-wrapper" style="height:298px;margin-top:40px;">
                                                    <canvas id="results" height="298"></canvas>
                                                </div>
                        -->
                        <canvas id="results"></canvas>



                    </div>
                    <!--                    <div class="card-footer">
                                            <ul>
                                                <li>
                                                    <div class="text-muted">NEW TVI ENTRY</div>
                                                    <strong>29.703 (40%)</strong>
                                                    <div class="progress progress-xs mt-2">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                                                <li class="hidden-sm-down">
                                                    <div class="text-muted">Exit TVI Entry</div>
                                                    <strong>24.093  (20%)</strong>
                                                    <div class="progress progress-xs mt-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                    
                                            </ul>
                                        </div>-->
                </div>
                <!--/.card-->
            </div>

        </div>

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i> Cases

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
                            foreach ($cases as $value) {

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
                                . '<td> <span class="badge badge-' . $status_color . '">' . $value['status'] . '</span>'
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

</div>
<!-- /.conainer-fluid -->
<!-- END MAIN CONTENT -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('customjs'); ?>
<script src="<?php echo e(asset('vendors/js/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/gauge.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/daterangepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/views/main.js')); ?>"></script>
<script type="text/javascript">

var datatable = $('#agentsCasesTbl').DataTable();


$("input[type=radio][name=trends]").change(function () {
    if (this.value == "monthly") {

        function getMonthlyTrends() {

            alert('monthly');

            return    $.ajax({
                url: "trends/monthly",
                type: "GET",
                dataType: 'json'
            });
        }

        $.when(getMonthlyTrends()).done(function (response) {

        var dataSet = response.data;
            console.log();
            var newtvis = dataSet.new;
            var exittvis = dataSet.exited;
            var periods = dataSet.period;

            var ctx = document.getElementById("results");
            ;
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: periods,
                    datasets: [
                        {
                            label: 'New TVis',
                            "borderColor": 'rgba(54, 162, 235, 1)',
                            pointHoverBackgroundColor: '#fff',
                            borderWidth: 2,
                            data: newtvis
                        },
                        {
                            label: 'Exit Tvis',
                            "borderColor": 'rgb(0, 128, 0)',
                            pointHoverBackgroundColor: '#fff',
                            borderWidth: 2,
                            data: exittvis
                        }
                    ]
                }
            });


        });

    } else {


  function getYearlyTrend() {
        alert('yearly');
        return    $.ajax({
            url: "trends/yearly",
            type: "GET",
            dataType: 'json'
        });
    }


    $.when(getYearlyTrend()).done(function (response) {

// the code here will be executed when all four ajax requests resolve.
// a1, a2, a3 and a4 are lists of length 3 containing the response text,
// status, and jqXHR object for each of the four ajax calls respectively.
        var dataSet = response.data;
        console.log();
        var newtvis = dataSet.new;
        var exittvis = dataSet.exited;
        var periods = dataSet.period;

        console.log('period datanknkn her: ' + periods);




        // newtvis = newtvis.map(Number);
//    exittvis = exittvis.map(Number);
//    console.log('figures: ' + exittvis);
//    console.log('data:' + periods);

        console.log('charts.............');

        var ctx = document.getElementById("results");
        ;
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: periods,
                datasets: [
                    {
                        label: 'New TVis',
                        "borderColor": 'rgba(54, 162, 235, 1)',
                        pointHoverBackgroundColor: '#fff',
                        borderWidth: 2,
                        data: newtvis
                    },
                    {
                        label: 'Exit Tvis',
                        "borderColor": 'rgb(0, 128, 0)',
                        pointHoverBackgroundColor: '#fff',
                        borderWidth: 2,
                        data: exittvis
                    }
                ]
            }
        });


    });

    }
});



  function getMonthlyTrends() {

            alert('monthly');

            return    $.ajax({
                url: "trends/monthly",
                type: "GET",
                dataType: 'json'
            });
        }

        $.when(getMonthlyTrends()).done(function (response) {

        var dataSet = response.data;
            console.log();
            var newtvis = dataSet.new;
            var exittvis = dataSet.exited;
            var periods = dataSet.period;

            var ctx = document.getElementById("results");
            ;
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: periods,
                    datasets: [
                        {
                            label: 'New TVis',
                            "borderColor": 'rgba(54, 162, 235, 1)',
                            pointHoverBackgroundColor: '#fff',
                            borderWidth: 2,
                            data: newtvis
                        },
                        {
                            label: 'Exit Tvis',
                            "borderColor": 'rgb(0, 128, 0)',
                            pointHoverBackgroundColor: '#fff',
                            borderWidth: 2,
                            data: exittvis
                        }
                    ]
                }
            });


        });





</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>