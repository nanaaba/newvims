@extends('layouts.master')


@section('content')




<ol class="breadcrumb">
    <li class="breadcrumb-item">Trips</li>
    <li class="breadcrumb-item active"> Trip Information</li>
    <!-- Breadcrumb Menu-->

</ol>
<?php
$info = json_decode($details, true);
$data = $info['data'];
$vehicle = $data['vehicle'];
$driver = $data['driver'];
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


        <form id="updatetripForm" novalidate>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> information</strong>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Trip Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Vehicle Involved</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Driver Involved</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home" role="tabpanel">

                                            <div class="row">

                                                <input type="hidden" name="tripid" value="{{$data['tripNo']}}" class="form-control">

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Trip Type </label>

                                                        <input type="text" name="tripType" value="{{$data['tripType']}}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Regime</label>

                                                        <input type="text" name="regime" value="{{$data['regime']}}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Customs Office</label>

                                                        <input type="text" name="customsOffice" value="{{$data['customsOffice']}}" class="form-control">
                                                    </div>
                                                </div>



                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Trade Ref No </label>

                                                        <input type="text" name="tradeRefNo" value="{{$data['tradeRefNo']}}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Country of Consignment </label>

                                                        <input type="text" name="consCountry"  value="{{$data['consCountry']}}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Last Country</label>

                                                        <input type="text" name="lastCountry" value="{{$data['lastCountry']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Next Country</label>

                                                        <input type="text" name="nextCountry" value="{{$data['nextCountry']}}" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Final Country</label>

                                                        <input type="text" name="finalCountry" value="{{$data['finalCountry']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Entry Office</label>

                                                        <input type="text" name="entryOffice" value="{{$data['entryOffice']}}" class="form-control">
                                                    </div>
                                                </div><div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Exit Office</label>

                                                        <input type="text" name="exitOffice" value="{{$data['exitOffice']}}" class="form-control">
                                                    </div>
                                                </div><div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Car NetNo</label>

                                                        <input type="text" name="carnetNo" value="{{$data['carnetNo']}}" class="form-control">
                                                    </div>
                                                </div><div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Check In</label>

                                                        <input type="text" name="checkInDate" value="{{$data['checkInDate']}}" class="form-control datepicker">
                                                    </div>
                                                </div><div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Stay Duration</label>

                                                        <input type="text" name="stayDuration" value="{{$data['stayDuration']}}" class="form-control">
                                                    </div>
                                                </div><div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Import Duration</label>

                                                        <input type="text" name="importDuration" value="{{$data['importDuration']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Permit Expiry Date</label>

                                                        <input type="text" name="permExpiryDate" value="{{$data['permExpiryDate']}}" class="form-control datepicker">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Purpose</label>

                                                        <input type="text" name="purpose" value="{{$data['purpose']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Remarks</label>

                                                        <input type="text" name="remarks" value="{{$data['remarks']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">CheckIn By</label>

                                                        <input type="text" name="checkInBy" value="{{$data['checkInBy']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">CheckIn On</label>

                                                        <input type="text" name="checkInOn" value="{{$data['checkInOn']}}" class="form-control datepicker">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Vehicle Type</label>

                                                        <select class="select2  form-control  vehicletypes" name="vehicleTypeId"  tabindex="-1" aria-hidden="true" required style="width: 100%"> 

                                                            <option value="{{$vehicle['vehicleType']}}">{{$vehicle['vehicleType']}}</option>

                                                        </select>


                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Hs Code</label>

                                                        <input type="text" name="hsCode" value="{{$vehicle['hsCode']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Status Code</label>

                                                        <input type="text" name="statusCode" value="{{$vehicle['statusCode']}}" class="form-control datepicker">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">CPC Code</label>

                                                        <input type="text" name="cpcCode" value="{{$vehicle['cpcCode']}}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Country</label>


                                                        <select class="select2  form-control  countries" name="resCountryId"  tabindex="-1" aria-hidden="true" required style="width: 100%">

                                                            <option value="">Select ---</option>

                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Origin Make</label>

                                                        <input type="text" name="make" value="{{$vehicle['make']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Model</label>

                                                        <select class="select2  form-control  models" name="model"  tabindex="-1" aria-hidden="true" required style="width: 100%">

                                                            <option value="{{$vehicle['model']}}">{{$vehicle['model']}}</option>

                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Color</label>

                                                        <select class="select2  form-control " name="color"  tabindex="-1" aria-hidden="true" required style="width: 100%">

                                                            <option value="{{$vehicle['colour']}}">{{$vehicle['colour']}}</option>

                                                        </select>

                                                    </div>
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Chassis Number</label>

                                                        <input type="text" name="chasisNo" value="{{$vehicle['chasisNo']}}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Engine Number</label>

                                                        <input type="text" name="engineNo" value="{{$vehicle['engineNo']}}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Front Plate Number</label>

                                                        <input type="text" name="frontPlateNo" value="{{$vehicle['frontPlateNo']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Back Plate Number</label>

                                                        <input type="text" name="backPlateNo" value="{{$vehicle['backPlateNo']}}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class=" control-label">Description</label>
                                                        <textarea name="description" rows="8" class="form-control">
                                                    {{trim($vehicle['description'])}}
                                                        </textarea>

                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class=" control-label">Issue Date</label>

                                                        <input type="text" name="regIssueDate"  value="{{$vehicle['regIssueDate']}}" class="form-control datepicker">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class=" control-label">Expiry Date</label>
                                                        <input type="text" name="regExpiryDate" value="{{$vehicle['regExpiryDate']}}" class="form-control datepicker">

                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class=" control-label">Permit No </label>

                                                        <input type="text" name="permitNo" value="{{$vehicle['permitNo']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Issue Date</label>

                                                        <input type="text" name="permitIssueDate" value="{{$vehicle['permitIssueDate']}}" class="form-control datepicker">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Expiry Date</label>
                                                        <input type="text" name="permitExpiryDate" value="{{$vehicle['permitExpiryDate']}}" class="form-control datepicker">

                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Ecowas No </label>

                                                        <input type="text" name="ecowasNo" value="{{$vehicle['ecowasNo']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Issue Date</label>

                                                        <input type="text" name="ecowasIssueDate" value="{{$vehicle['ecowasIssueDate']}}" class="form-control datepicker">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Expiry Date</label>
                                                        <input type="text" name="ecowasExpiryDate" value="{{$vehicle['ecowasExpiryDate']}}" class="form-control datepicker">

                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label class=" control-label">Remarks</label>
                                                        <textarea name="remarks" rows="8" class="form-control">
                                                    {{$vehicle['remarks']}}

                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>   

                                        </div>
                                        <div class="tab-pane" id="messages" role="tabpanel">
                                            <div  class="row">


                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Surname</label>

                                                        <input type="text" name="surname" value="{{$driver['surname']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Other Names</label>

                                                        <input type="text" name="othernames" value="{{$driver['othernames']}}" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Sex</label>

                                                        <select class="select2  form-control  gender" name="gender"  tabindex="-1" aria-hidden="true" required style="width: 100%">

                                                            <option value="{{$driver['gender']}}">{{$driver['gender']}}</option>

                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Date Of Birth</label>

                                                        <input type="text" name="dob" value="{{$driver['dob']}}"  class="form-control datepicker" data-dateformat="yy-mm-dd">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Email Address</label>

                                                        <input type="email" name="email" value="{{$driver['email']}}"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Local Phone No</label>

                                                        <input type="text" name="localPhone" value="{{$driver['localPhone']}}"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Overseas Phone No</label>

                                                        <input type="text" name="foreignPhone"  value="{{$driver['foreignPhone']}}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Resident Country</label>


                                                        <select class="select2  form-control  countries" name="residentCountryId"  tabindex="-1" aria-hidden="true" required style="width: 100%">

                                                            <option value="{{$driver['residentCountry']}}">{{$driver['residentCountry']}}</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Country Of Origin</label>


                                                        <select class="select2  form-control  countries" name="countryCode"  tabindex="-1" aria-hidden="true" required style="width: 100%">

                                                            <option value="{{$driver['country']}}">{{$driver['country']}}</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class=" control-label">Local Address</label>
                                                        <textarea name="localAddress" rows="10" class="form-control">
                                        {{$driver['localAddress']}}
                                                        </textarea>

                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class=" control-label">Overseas Address</label>
                                                        <textarea name="foreignAddress" rows="10" class="form-control">
                                         {{$driver['foreignAddress']}}
                                                        </textarea>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">National ID Type</label>

                                                        <select class="select2  form-control  idtypes" name="nationalIdType"  required style="width: 100%">

                                                            <option value="{{$driver['nationalIdType']}}">{{$driver['nationalIdType']}}</option>

                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Nationality ID Number</label>

                                                        <input type="text" value="{{$driver['nationalId']}}"  name="nationalId" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">License Number</label>

                                                        <input type="text" name="licenceNo" value="{{$driver['licenceNo']}}"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Date of Issue </label>

                                                        <input type="text" name="issueDate" value="{{$driver['issueDate']}}" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Date of Expiry </label>

                                                        <input type="text" name="expiryDate" value="{{$driver['expiryDate']}}" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Passport Number</label>

                                                        <input type="text" name="passportNo" value="{{$driver['passportNo']}}"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Date of Issue </label>

                                                        <input type="text" data-dateformat="yy-mm-dd" value="{{$driver['passportIssueDate']}}" name="passportIssueDate" class="form-control datepicker">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class=" control-label">Date of Expiry </label>

                                                        <input type="text" data-dateformat="yy-mm-dd" value="{{$driver['passportExpiryDate']}}" name="passportExpiryDate" class="form-control datepicker">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class=" control-label">Reg. Date of Issue </label>

                                                        <input type="text"  name="regIssueDate"  value="{{$driver['regIssueDate']}}" class="form-control datepicker">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" control-label">Reg. Date of  Expiry </label>

                                                        <input type="text" data-dateformat="yyyy-mm-dd" value="{{$driver['regExpiryDate']}}" name="regExpiryDate" class="form-control datepicker">
                                                    </div>


                                                </div>
                                                <div class="col-sm-6">


                                                    <div class="form-group">
                                                        <label class=" control-label">Remarks</label>
                                                        <textarea name="remarks" rows="10" class="form-control">
                                                 
                                             {{$driver['remarks']}}


                                                        </textarea>


                                                    </div>
                                                </div>





                                            </div>


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



@endsection

@section('customjs')
<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
<script type="text/javascript">

// $('#tabs').tabs();

$(".disabledform :input").prop("disabled", true);

//    $('.datepicker').datepicker({
//        format: 'dd-mm-yyyy'
//    });
$('#updatetripForm').on('submit', function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    console.log('server data: ' + formData);
    $('#loaderModal').modal('show');

    $.ajax({
        url: "{{url('trips/new')}}",
        type: "POST",
        data: formData,
        dataType: "json",
        success: function (data) {
            $('#loaderModal').modal('hide');

            console.log(data);
            var status = data.status;
            console.log('status is :' + status);

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