@extends('layouts.master')

@section('styles')
<link href="{{asset('vendors/css/gauge.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/css/toastr.min.css')}}" rel="stylesheet">
@stop
@section('content')




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
                        <i class="icon-screen-desktop"></i>
                    </div>
                    <div class="h4 mb-0">{{$data['carsEntered']['year']}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Cars Entering</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-calculator"></i>
                    </div>
                    <div class="h4 mb-0">{{$data['carsExpiring']['year']}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">BlackListed Drivers</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-basket-loaded"></i>
                    </div>
                    <div class="h4 mb-0">{{$data['carsOverStayed']['year']}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Cars Overstayed</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-pie-chart"></i>
                    </div>
                    <div class="h4 mb-0">2101</div>
                    <small class="text-muted text-uppercase font-weight-bold">Reported Cases</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-speedometer"></i>
                    </div>
                    <div class="h4 mb-0">{{$data['carsExited']['year']}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Cars Exited</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        Number of Cars entering against number of cars expiring
                        <div class="card-actions">
                            <a href="http://www.chartjs.org">
                                <small class="text-muted">docs</small>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <canvas id="canvas-1"></canvas>
                        </div>
                    </div>
                </div>



                <!--/.card-->
            </div>
            <!--/.col-->

        </div>
        <div class="row">

<!--            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        OverStayed Cars           
                        <div class="card-actions">
                            <a href="http://www.chartjs.org">
                                <small class="text-muted">docs</small>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <canvas id="canvas-3"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Expiring Cars           
                        <div class="card-actions">
                            <a href="http://www.chartjs.org">
                                <small class="text-muted">docs</small>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <canvas id="canvas-290"></canvas>
                        </div>
                    </div>
                </div>
            </div>-->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Number of OverStayed Cars entering against number of new Cars 
                        <div class="card-actions">
                            <a href="http://www.chartjs.org">
                                <small class="text-muted">docs</small>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <canvas id="canvas-2"></canvas>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--/.row-->


    </div>

</div>
<!-- /.conainer-fluid -->
<!-- END MAIN CONTENT -->


@endsection
@section('customjs')
<script src="{{ asset('vendors/js/toastr.min.js')}}"></script>
<script src="{{ asset('vendors/js/gauge.min.js')}}"></script>
<script src="{{ asset('vendors/js/moment.min.js')}}"></script>
<script src="{{ asset('vendors/js/daterangepicker.min.js')}}"></script>




<!-- Custom scripts required by this view -->
<!--<script src="{{asset('js/views/charts.js')}}"></script>-->


<script type="text/javascript">

function getApi() {
    return    $.ajax({
        url: "{{url('graphapi')}}",
        type: "GET",
        dataType: 'json'
    });
}
$.when(getApi()).done(function (response) {
    console.log(response);

    console.log(response.period);

    var lineChartData = {
        labels: response.period,
        datasets: [
            {
                label: 'Cars Entering',
                backgroundColor: 'rgba(220,220,220,0.2)',
                borderColor: 'rgba(220,220,220,1)',
                pointBackgroundColor: 'rgba(220,220,220,1)',
                pointBorderColor: '#fff',
                data: response.carsEntering
            },
            {
                label: 'Cars Exiting',
                backgroundColor: 'rgba(151,187,205,0.2)',
                borderColor: 'rgba(151,187,205,1)',
                pointBackgroundColor: 'rgba(151,187,205,1)',
                pointBorderColor: '#fff',
                data: response.carsExiting

            }
        ]
    }

    var ctx = document.getElementById('canvas-1');
    var chart = new Chart(ctx, {
        type: 'line',
        data: lineChartData,
        options: {
            responsive: true
        }
    });



    //bar graph


    var barChartData = {
        labels: response.period,
        datasets: [
            {
                label: 'Cars OverStayed',
                backgroundColor: 'rgba(220,220,220,0.5)',
                borderColor: 'rgba(220,220,220,0.8)',
                highlightFill: 'rgba(220,220,220,0.75)',
                highlightStroke: 'rgba(220,220,220,1)',
                data: response.carsOverStaying

            },
            {
                label: 'Cars Expiring',
                backgroundColor: 'rgba(151,187,205,0.5)',
                borderColor: 'rgba(151,187,205,0.8)',
                highlightFill: 'rgba(151,187,205,0.75)',
                highlightStroke: 'rgba(151,187,205,1)',
                data: response.carsExpiring
            }
        ]
    }
    var ctx = document.getElementById('canvas-2');
    var chart2 = new Chart(ctx, {
        
        type: 'bar',
        data: barChartData,
        options: {
            responsive: true
        }
    });


    // the code here will be executed when all four ajax requests resolve.
    // a1, a2, a3 and a4 are lists of length 3 containing the response text,
    // status, and jqXHR object for each of the four ajax calls respectively.
    /* var dataSet = response.data;
     var cashiers = [];
     var figures = [];
     console.log('data her: ' + response);
     $.each(dataSet, function (i, item) {
     cashiers.push(item.cashier_name);
     figures.push(item.volume);
     });
     figures = figures.map(Number);
     console.log('figures: ' + figures);
     console.log('regions:' + cashiers);
     var ctx = document.getElementById("cashiersPerformance");
     new Chart(ctx, {
     type: 'horizontalBar',
     data: {
     labels: cashiers,
     datasets: [{
     backgroundColor: [
     'rgba(255, 99, 132, 0.2)',
     'rgba(54, 162, 235, 0.2)',
     'rgba(255, 206, 86, 0.2)',
     'rgba(75, 192, 192, 0.2)',
     'rgba(153, 102, 255, 0.2)',
     'rgba(255, 159, 64, 0.2)'
     ],
     borderColor: [
     'rgba(255,99,132,1)',
     'rgba(54, 162, 235, 1)',
     'rgba(255, 206, 86, 1)',
     'rgba(75, 192, 192, 1)',
     'rgba(153, 102, 255, 1)',
     'rgba(255, 159, 64, 1)'
     ],
     "borderWidth": 1,
     "pointRadius": 1,
     "label": "Performig Cashiers",
     "data": figures
     }]
     },
     options: {
     scales: {
     yAxes: [{
     ticks: {
     beginAtZero: true
     }
     }]
     }
     }
     });*/
});


</script>

@endsection