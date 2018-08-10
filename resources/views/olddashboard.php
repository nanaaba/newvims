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
                    <small class="text-muted text-uppercase font-weight-bold">New TVI Entry</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-calculator"></i>
                    </div>
                    <div class="h4 mb-0">{{$data['carsExpiring']['year']}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Exited TVI</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-basket-loaded"></i>
                    </div>
                    <div class="h4 mb-0">{{$data['carsOverStayed']['year']}}</div>
                    <small class="text-muted text-uppercase font-weight-bold"> Overstayed TVI</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-pie-chart"></i>
                    </div>
                    <div class="h4 mb-0">2101</div>
                    <small class="text-muted text-uppercase font-weight-bold">BlackListed Drivers</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-black" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-speedometer"></i>
                    </div>
                    <div class="h4 mb-0">{{$data['carsExited']['year']}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Reported Cases</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        
        
             <div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-5">
                      <h4 class="card-title">Traffic</h4>
                      <div class="small text-muted" style="margin-top:-10px;">November 2017</div>
                    </div>
                    <div class="col-7">
                      <button type="button" class="btn btn-primary float-right"><i class="icon-cloud-download"></i></button>
                      <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                        <label class="btn btn-outline-secondary">
                          <input type="radio" name="options" id="option1" autocomplete="off"> Day
                        </label>
                        <label class="btn btn-outline-secondary active">
                          <input type="radio" name="options" id="option2" autocomplete="off" checked=""> Month
                        </label>
                        <label class="btn btn-outline-secondary">
                          <input type="radio" name="options" id="option3" autocomplete="off"> Year
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="chart-wrapper" style="height:298px;margin-top:40px;">
                    <canvas id="main-chart" height="298"></canvas>
                  </div>
                </div>
                <div class="card-footer">
                  <ul>
                    <li>
                      <div class="text-muted">Visits</div>
                      <strong>29.703 Users (40%)</strong>
                      <div class="progress progress-xs mt-2">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="hidden-sm-down">
                      <div class="text-muted">Unique</div>
                      <strong>24.093 Users (20%)</strong>
                      <div class="progress progress-xs mt-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li>
                      <div class="text-muted">Pageviews</div>
                      <strong>78.706 Views (60%)</strong>
                      <div class="progress progress-xs mt-2">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="hidden-sm-down">
                      <div class="text-muted">New Users</div>
                      <strong>22.123 Users (80%)</strong>
                      <div class="progress progress-xs mt-2">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="hidden-sm-down">
                      <div class="text-muted">Bounce Rate</div>
                      <strong>40.15%</strong>
                      <div class="progress progress-xs mt-2">
                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!--/.card-->
            </div>
            <!--/.col-->
            <div class="col-md-3">
              <div class="card text-white bg-primary">
                <div class="card-body pb-0">
                  <div class="btn-group float-right">
                    <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <h4 class="mb-0">9.823</h4>
                  <p>Members online</p>
                </div>
                <div class="chart-wrapper px-3" style="height:70px;">
                  <canvas id="card-chart1" class="chart" height="70"></canvas>
                </div>
              </div>
              <div class="card text-white bg-warning">
                <div class="card-body pb-0">
                  <div class="btn-group float-right">
                    <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <h4 class="mb-0">9.823</h4>
                  <p>Members online</p>
                </div>
                <div class="chart-wrapper" style="height:70px;">
                  <canvas id="card-chart3" class="chart" height="70"></canvas>
                </div>
              </div>
              <div class="card text-white bg-danger">
                <div class="card-body pb-0">
                  <div class="btn-group float-right">
                    <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <h4 class="mb-0">9.823</h4>
                  <p>Members online</p>
                </div>
                <div class="chart-wrapper px-3" style="height:70px;">
                  <canvas id="card-chart4" class="chart" height="70"></canvas>
                </div>
              </div>
            </div>
            <!--/.col-->
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