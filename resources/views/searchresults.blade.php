@extends('layouts.master')

@section('content')


<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Search</li>
    <!-- Breadcrumb Menu-->

</ol>
<div class="container-fluid">
    <div class="animated fadeIn">


        <?php
        $search_array = json_decode($results, true);

        if (isset($search_array['data'])) {
            $resultdata = $search_array['data'];
            ?>
            <div class="row">

                <div class="col-sm-12">

                    <h1> Search Results -  <span class="semi-bold">{{$searchparam}}</span></h1>
                    <br>

                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Search Results -  <span class="semi-bold">{{$searchparam}}</span>


                        </div>
                        <div class="card-body ">

                            <div class="table-responsive">

                                <table id="resultTable" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>Chasis No</th>  
                                            <th>Front Plate</th>  
                                            <th>Back Plate</th>  
                                            <th>Make</th>  
                                            <th>Model</th>  
                                            <th>Color</th> 
                                            <th>Permit No</th>  
                                            <th>Country</th>  
                                            <th>Status</th>  
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        foreach ($resultdata as $value) {

                                            if ($value['statusCode'] == "Open") {
                                                $status_color = "success";
                                            } else {
                                                $status_color = "danger";
                                            }

                                            echo '<tr>'
                                            . '<td>'
                                            . $value['chasisNo']
                                            . '</td>'
                                            . '<td>'
                                            . $value['frontPlateNo']
                                            . '</td>'
                                            . '<td>'
                                            . $value['backPlateNo']
                                            . '</td>'
                                            . '<td>'
                                            . $value['make']
                                            . '</td>'
                                            . '<td>'
                                            . $value['model']
                                            . '</td>'
                                            . '<td>'
                                            . $value['colour']
                                            . '</td>'
                                            . '<td>'
                                            . $value['permitNo']
                                            . '</td>' . '<td>'
                                            . $value['country']
                                            . '</td>'
                                            . '<td><span class="badge badge-' . $status_color . '">' . $value['statusCode'] . '</span>'
                                            . '</td>'
                                            . '<td><a  href="vehicles/information/' . $value['vehicleNo'] . '"   type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" ><i class="fa fa-search-plus "></i> </a> '
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

            <?php
        } else {
            ?>
            <div>
                <div class="alert alert-info " role="alert">
                    <button class="close" data-dismiss="alert">
                        ×
                    </button>
                    <strong>Info!</strong> Search for {{$searchparam}} not found
                </div>

            </div>
            <?php
        }
        ?>


    </div>
</div>




@endsection

@section('customjs')
<!--<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>-->


<script type="text/javascript">


    var datatable = $('#resultTable').DataTable();

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('#driverForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        console.log('server data: ' + formData);
        $('#loaderModal').modal('show');

        $.ajax({
            url: "{{url('driver/new')}}",
            type: "POST",
            data: formData,
            dataType: "json",
            success: function (data) {
                var status = data.status;
                console.log('status is :' + status);
                $('#loaderModal').modal('hide');

                if (status == 0) {
                    $('#successmsg').html(data.message);
                    $('#sucessdiv').show();
                } else {
                    $('#errormsg').html(data.message);
                    $('#errordiv').show();
                }
                $(window).scrollTop(0);

            },
            error: function (jXHR, textStatus, errorThrown) {
                $('input:submit').removeAttr("disabled");
                $('#errordiv').html('Contact System Administrator');
                $('#errormsg').show();
            }
        });


    });
</script>
@endsection