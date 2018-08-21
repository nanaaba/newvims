@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">Driver</li>
    <li class="breadcrumb-item active"> Driver Information</li>
    <!-- Breadcrumb Menu-->

</ol>
<?php
$informaion = json_decode($information, true);
$details = $informaion['data'];
$trips = json_decode($trips, true);
?>

<div class="container-fluid">
    <div class="animated fadeIn">

        <div id="sucessdiv" style="display: none">

            <div class="alert alert-success fade in">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <i class="fa-fw fa fa-check"></i>
                <strong>Success</strong> <span id="successmsg"> </span>
            </div>
        </div>
        <div id="errordiv" style="display: none">
            <div class="alert alert-danger fade in">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <i class="fa-fw fa fa-times"></i>
                <strong>Error!</strong> <span id="errormsg"> </span>
            </div>
        </div>


        <form id="updatedriverForm" novalidate>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{$details['othernames'] .' '.$details['surname']}}'s information</strong>
                        </div>
                        <div class="card-body">


                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Personal Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Passport Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Other Data</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home" role="tabpanel">

                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Surname</label>

                                                        <input type="text" name="surname" value="{{$details['surname']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Other Names</label>

                                                        <input type="text" name="othernames" value="{{$details['othernames']}}" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Sex</label>

                                                        <select class="select2  form-control gender" name="gender"  tabindex="-1" aria-hidden="true" required>

                                                            <option value="{{$details['gender']}}">{{$details['gender']}}</option>

                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Date Of Birth</label>

                                                        <input type="text" name="dob" value="{{$details['dob']}}"  class="form-control datepicker" data-dateformat="yy-mm-dd">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Email Address</label>

                                                        <input type="email" name="email" value="{{$details['email']}}"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Local Phone No</label>

                                                        <input type="text" name="localPhone" value="{{$details['localPhone']}}"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Overseas Phone No</label>

                                                        <input type="text" name="foreignPhone"  value="{{$details['foreignPhone']}}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Resident Country</label>


                                                        <select class="select2  form-control countries" name="residentCountryId"  tabindex="-1" aria-hidden="true" required>

                                                            <option value="{{$details['residentCountry']}}">{{$details['residentCountry']}}</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Country Of Origin</label>


                                                        <select class="select2  form-control countries" name="countryCode"  tabindex="-1" aria-hidden="true" required>

                                                            <option value="{{$details['country']}}">{{$details['country']}}</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class=" control-label">Local Address</label>
                                                        <textarea name="localAddress" rows="10" class="form-control">
                                        {{$details['localAddress']}}
                                                        </textarea>

                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class=" control-label">Overseas Address</label>
                                                        <textarea name="foreignAddress" rows="10" class="form-control">
                                         {{$details['foreignAddress']}}
                                                        </textarea>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">National ID Type</label>

                                                        <select class="select2  form-control idtypes" name="nationalIdType"  required>

                                                            <option value="{{$details['nationalIdType']}}">{{$details['nationalIdType']}}</option>

                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Nationality ID Number</label>

                                                        <input type="text" value="{{$details['nationalId']}}"  name="nationalId" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">License Number</label>

                                                        <input type="text" name="licenceNo" value="{{$details['licenceNo']}}"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Date of Issue </label>

                                                        <input type="text" name="issueDate" value="{{$details['issueDate']}}" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Date of Expiry </label>

                                                        <input type="text" name="expiryDate" value="{{$details['expiryDate']}}" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane" id="profile" role="tabpanel">

                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Passport Number</label>

                                                        <input type="text" name="passportNo" value="{{$details['passportNo']}}"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Date of Issue </label>

                                                        <input type="text" data-dateformat="yy-mm-dd" value="{{$details['passportIssueDate']}}" name="passportIssueDate" class="form-control datepicker">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Date of Expiry </label>

                                                        <input type="text" data-dateformat="yy-mm-dd" value="{{$details['passportExpiryDate']}}" name="passportExpiryDate" class="form-control datepicker">
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                        <div class="tab-pane" id="messages" role="tabpanel">
                                            <div class="row col-lg-12">

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class=" control-label">Reg. Date of Issue </label>

                                                        <input type="text"  name="regIssueDate"  value="{{$details['regIssueDate']}}" class="form-control datepicker">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" control-label">Reg. Date of  Expiry </label>

                                                        <input type="text" data-dateformat="yyyy-mm-dd" value="{{$details['regExpiryDate']}}" name="regExpiryDate" class="form-control datepicker">
                                                    </div>


                                                </div>
                                                <div class="col-sm-6">


                                                    <div class="form-group">
                                                        <label class=" control-label">Remarks</label>
                                                        <textarea name="remarks" rows="10" class="form-control">
                                                 
                                             {{$details['remarks']}}


                                                        </textarea>


                                                    </div>
                                                </div>


                                            </div>


                                        </div>


                                        <div class="tab-pane " id="tabs-d" role="tabpanel">

                                            <table id="vehicleTbl" class="table table-condensed table-hover table-bordered table-striped">
                                                <thead>
                                                    <tr>

                                                        <th>Registration No</th>  
                                                        <th>Assigned At</th>  

                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($details['vehicles'] as $value) {
                                                        echo '<tr>'
                                                        . '<td>'
                                                        . $value['vehicleRegNo']
                                                        . '</td>'
                                                        . '<td>'
                                                        . $value['assignedAt']
                                                        . '</td>'
                                                        . '<td><a  href="../../vehicles/information/' . $value['vehicleRegNo'] . '"   type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" ><i class="glyphicon glyphicon-eye-open"></i> </a> ' .
                                                        '<a  href="#"   type="button" class=" btn btn-labeled btn-danger btn-sm  col-sm-6" ><i class="glyphicon glyphicon-trash"></i></a> '
                                                        . '</td>'
                                                        . '</tr>';
                                                    }
                                                    ?>


                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="tab-pane " id="tabs-e" role="tabpanel">
                                            <div class="row"  >
                                                <div class="col-lg-12">
                                                    <div class="pull-left">
                                                        <button data-toggle="modal" data-target="#newtrip" type="button" class="btn btn-space btn-primary">New Trip</button>
                                                        <!--                    <a  class="btn btn-primary" href="bulk-beneficiary-upload" >New Category</a>-->

                                                    </div>

                                                </div>

                                            </div>
                                            <br>
                                            <table id="tripsTbl" class="table table-condensed table-hover table-bordered table-striped">
                                                <thead>
                                                    <tr>

                                                        <th>Trip Type</th>  
                                                        <th>Final Country</th>  
                                                        <th>Vehicle(Front Plate)</th>  
                                                        <th>Driver</th> 
                                                        <th>Check In</th> 

                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($trips['data'] as $value) {
                                                        echo '<tr>'
                                                        . '<td>'
                                                        . $value['tripType']
                                                        . '</td>'
                                                        . '<td>'
                                                        . $value['finalCountry']
                                                        . '</td>'
                                                        . '<td>'
                                                        . $value['vehicle']['frontPlateNo']
                                                        . '</td>'
                                                        . '<td>'
                                                        . $value['driver']['othernames'] . ' ' . $value['driver']['surname']
                                                        . '</td>'
                                                        . '<td>'
                                                        . $value['checkInOn']
                                                        . '</td>'
                                                        . '<td><a   href="../../trip/' . $value['tripNo'] . '"    type="button" class=" btn btn-labeled btn-primary btn-sm  col-sm-6" ><i class="glyphicon glyphicon-eye-open"></i> </a></td> '
                                                        . '</tr>';
                                                    }
                                                    ?>


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <!--/.col-->

                            </div>

















                            <footer class="pull-right">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Update
                                </button>
                            </footer>
                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>
</div>




<div id="newtrip" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
    <div class="modal-dialog custom-width">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
                <h3 class="modal-title">New Trip</h3>
            </div>

            <div id="tripsucessdiv" style="display: none">

                <div class="alert alert-success fade in">
                    <button class="close" data-dismiss="alert">
                        ×
                    </button>
                    <i class="fa-fw fa fa-check"></i>
                    <strong>Success</strong> <span id="successmsg"> </span>
                </div>
            </div>
            <div id="triperrordiv" style="display: none">
                <div class="alert alert-danger fade in">
                    <button class="close" data-dismiss="alert">
                        ×
                    </button>
                    <i class="fa-fw fa fa-times"></i>
                    <strong>Error!</strong> <span id="errormsg"> </span>
                </div>
            </div>
            <form id="tripForm"  novalidate>
                <!-- START ROW -->

                {{csrf_field()}}
                <div class="modal-body">


                    <div class="row">


                        <input type="hidden" name="driverRegNo" value="{{$details['driverRegNo']}}"/>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Vehicle Involve </label>

                                <select class="select2  form-control vehicles" name="vehicleRegNo"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select---</option>

                                </select>                                    
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Trip Type </label>
                                <select class="select2  form-control tviTypes" name="tripTypeId"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select---</option>

                                </select>    
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Regime</label>

                                <select class="select2  form-control regimes" name="regimeId"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select---</option>

                                </select>  

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Customs Office</label>


                                <select class="select2  form-control offices" name="customsOfficeCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select---</option>

                                </select>  

                            </div>
                        </div>



                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Trade Ref No </label>

                                <input type="text" name="tradeRefNo" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Country of Consignment </label>
                                <select class="select2  form-control countries" name="consCountryCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Last Country</label>
                                <select class="select2  form-control countries" name="lastCountryCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Next Country</label>
                                <select class="select2  form-control countries" name="nextCountryCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Final Country</label>
                                <select class="select2  form-control countries" name="finalCountryCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Entry Office</label>

                                <input type="text" name="entryOfficeCode" class="form-control">
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Exit Office</label>

                                <input type="text" name="exitOfficeCode" class="form-control">
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Car NetNo</label>

                                <input type="text" name="carnetNo" class="form-control">
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Check In</label>

                                <input type="text" name="checkInDate" data-dateformat="dd-mm-yy" class="form-control datepicker">
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Stay Duration</label>

                                <input type="text" name="stayDuration" class="form-control">
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Import Duration</label>

                                <input type="text" name="importDuration" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Permit Expiry Date</label>

                                <input type="text" name="permExpiryDate" data-dateformat="dd-mm-yy" class="form-control datepicker">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Purpose</label>

                                <input type="text" name="purpose" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Remarks</label>

                                <input type="text" name="remarks" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">CheckIn By</label>

                                <input type="text" name="checkInBy" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">CheckIn On</label>

                                <input type="text" name="checkInOn" data-dateformat="dd-mm-yy" class="form-control datepicker">
                            </div>
                        </div>



                    </div>





                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                    <button type="submit" class="btn btn-info ">Proceed</button>
                </div>

            </form>


        </div>
    </div>
</div>





@endsection

@section('customjs')
<script type="text/javascript">

    $('#tripForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: "{{url('trips/new')}}",
            type: "POST",
            data: formData,
            dataType: "json",
            success: function (data) {
                $('#loaderModal').modal('hide');
                document.getElementById("tripForm").reset();
//                $('#newtripForm select').val('').trigger('change');
//                $('#newtrip').modal('hide');

                console.log(data);
                var status = data.status;
                console.log('status is :' + status);

                if (status == 0) {
                    $('#tripsuccessmsg').html(data.message);
                    $('#tripsucessdiv').show();
                } else {
                    $('#triperrormsg').html(data.message);
                    $('#triperrordiv').show();
                }
                $(window).scrollTop(0);

            },
            error: function (jXHR, textStatus, errorThrown) {
                $('#loaderModal').modal('hide');

                $('input:submit').removeAttr("disabled");
                $('#triperrormsg').html('Contact System Administrator');
                $('#triperrordiv').show();
            }
        });
    });
//    $('.datepicker').datepicker({
//        format: 'dd-mm-yyyy'
//    });

    $('#tripsTbl').DataTable();

    var datatable = $('#vehicleTbl').DataTable();



    $('#updatedriverForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        console.log('server data: ' + formData);
        $('#loaderModal').modal('show');

        $.ajax({
            url: "{{url('driver/update')}}",
            type: "PUT",
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

    getSettings();
    function getSettings() {


        $.ajax({

            url: "{{url('settings/all')}}",
            type: "GET",
            dataType: 'json',
            success: function (response) {
                //var data = response.data;
                var countries = response.countries;
                var idtypes = response.idtypes;
                var vehicleModels = response.models;
                var vehicleTypes = response.vehicletypes;
                var vehicleMakes = response.vehiclemakes;
                var statusCodes = response.status;
                var gender = response.gender;
                var tvi = response.tvi;
                var office = response.office;
                var regime = response.regime;

                $('.countries').append(countries);
                $('.vehicletypes').append(vehicleTypes);
                $('.models').append(vehicleModels);
                $('.vehiclemakes').append(vehicleMakes);
                $('.statuscodes').append(statusCodes);
                $('.gender').append(gender);
                $('.idtypes').append(idtypes);
                $('.regimes').append(tvi);
                $('.offices').append(office);
                $('.tviTypes').append(regime);

            }

        });
    }

    getVehicles();
    function getVehicles() {


        $.ajax({
            url: "{{url('vehicles/getall')}}",
            type: "GET",
            dataType: 'json',
            success: function (response) {
                var data = response.data;

                $.each(data, function (i, item) {

                    $('.vehicles').append($('<option>', {
                        value: item.vehicleNo,
                        text: item.frontPlateNo
                    }));
                });


            }

        });
    }


//    $('#newtripForm').on('submit', function (e) {
//        e.preventDefault();
//        var formData = $(this).serialize();
//        console.log('server data: ' + formData);
//        $('#loaderModal').modal('show');
//
//        $.ajax({
//            url: "{{url('trips/new')}}",
//            type: "POST",
//            data: formData,
//            dataType: "json",
//            success: function (data) {
//                $('#loaderModal').modal('hide');
//                document.getElementById("newtripForm").reset();
//                $('#newtripForm select').val('').trigger('change');
//                $('#newtrip').modal('hide');
//
//                console.log(data);
//                var status = data.status;
//                console.log('status is :' + status);
//
//                if (status == 0) {
//                    $('#successmsg').html(data.message);
//                    $('#sucessdiv').show();
//                } else {
//                    $('#errormsg').html(data.message);
//                    $('#errordiv').show();
//                }
//                $(window).scrollTop(0);
//
//            },
//            error: function (jXHR, textStatus, errorThrown) {
//                $('input:submit').removeAttr("disabled");
//                $('#errordiv').html('Contact System Administrator');
//                $('#errormsg').show();
//            }
//        });
//
//
//    });
</script>
@endsection