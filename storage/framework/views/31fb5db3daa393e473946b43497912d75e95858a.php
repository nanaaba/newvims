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
    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
        </div>
    </li>
</ol>

<div class="container-fluid">

    <div class="animated fadeIn">

        <div class="card-group mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-screen-desktop"></i>
                    </div>
                    <div class="h4 mb-0">87</div>
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
                    <div class="h4 mb-0">385</div>
                    <small class="text-muted text-uppercase font-weight-bold">Cars Expiring</small>
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
                    <div class="h4 mb-0">200</div>
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
                    <div class="h4 mb-0">50</div>
                    <small class="text-muted text-uppercase font-weight-bold">New Vehicles</small>
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

            <div class="col-md-6">
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
            </div>
        
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


<?php $__env->stopSection(); ?>
<?php $__env->startSection('customjs'); ?>
<script src="<?php echo e(asset('vendors/js/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/gauge.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/daterangepicker.min.js')); ?>"></script>




<!--   Plugins and scripts required by this views 
  <script src="<?php echo e(asset('vendors/js/toastr.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/js/gauge.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/js/moment.min.js')); ?>"></script>

   Custom scripts required by this view 
  <script src="<?php echo e(asset('js/views/main.js')); ?>"></script>
  
-->

<!-- Custom scripts required by this view -->
<script src="<?php echo e(asset('js/views/charts.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>