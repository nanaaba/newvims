@extends('layouts.master')

@section('content')



<div id="content">
    <div class="page-head">
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li class="active">Search</li>
        </ol>
    </div>


    <?php
    $data = json_decode($results, true);
    $resultdata = $data['data'];
    ?>
    <div class="main-content container-fluid">

        <div class="row">

            <div class="col-sm-12">

                <h1> Search Results -  <span class="semi-bold">{{$searchparam}}</span></h1>
                <br>
                <form  action="{{url('search')}}" method="get" >

                    <div class="input-group input-group-lg">
                        <input class="form-control input-lg" type="text" name="searchparam" placeholder="Search again..." id="search-user">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-fw fa-search fa-lg"></i>
                            </button>
                        </div>
                        <!--                    </form>-->


                    </div>

                </form>
                <br>
                <div class="table-responsive">

                    <table id="resultTable" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>

                                <th>Chasis No</th>  
                                <th>Make</th>  
                                <th>Model</th>  
                                <th>Color</th>  
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($resultdata as $value) {
                                echo '<tr>'
                                . '<td>'
                                . $value['chasisNo']
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
                                . '<td><a  href="vehicles/information/' . $value['vehicleNo'] . '"   type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" ><i class="glyphicon glyphicon-eye-open"></i> </a> ' 
                                 
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




@endsection

@section('customjs')
<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>


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
            console.log(data);
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