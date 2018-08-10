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
                        <i class="fa fa-bus"></i>
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
                        <i class="fa fa-bus"></i>
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
                        <i class="fa fa-bus"></i>
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
                        <i class="icon-people"></i>
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
                        <i class="fa fa-bus"></i>
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
            <div class="col-md-12">
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
                                <div class="text-muted">NEW TVI ENTRY</div>
                                <strong>29.703 (40%)</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Unique or Distinct TVI Entry</div>
                                <strong>24.093  (20%)</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="text-muted">Unique or Distinct TVI Exit</div>
                                <strong>78.706 Views (60%)</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">TVI Exit</div>
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

        </div>


  <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
              
                  <table class="table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th>Officers</th>
                        <th>Vehicle Identified(Number Plates & Chassis Number)</th>
                        <th>Activity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      
                        <td>
                          <div>Yiorgos Avraamu</div>
                          <div class="small text-muted">
                            <span>New</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                      
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>50%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                     
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>10 sec ago</strong>
                        </td>
                       
                        
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--/.col-->
          </div>

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
  <script src="{{ asset('js/views/main.js')}}"></script>

@endsection

