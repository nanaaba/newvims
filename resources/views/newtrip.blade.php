@extends('layouts.master')

@section('content')



<ol class="breadcrumb">
    <li class="breadcrumb-item">Trips</li>
    <li class="breadcrumb-item active">New Trip</li>
    <!-- Breadcrumb Menu-->

</ol>



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
        <form id="tripForm" novalidate>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Trip Details</strong>
                        </div>
                        <div class="card-body">


                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Vehicle Involve </label>

                                        <select class="select2 vehicles" name="vehicleRegNo"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select---</option>

                                        </select>                                            </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Driver Involve </label>

                                        <select class="select2 drivers" name="driverRegNo"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select---</option>

                                        </select>                                            </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Trip Type </label>
                                        <select class="select2 tviTypes" name="tripTypeId"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select---</option>

                                        </select>    
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Regime</label>

                                        <select class="select2 regimes" name="regime"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select---</option>

                                        </select>  

                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Customs Office</label>


                                        <select class="select2 offices" name="customsOfficeCode"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select---</option>

                                        </select>  

                                    </div>
                                </div>



                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Trade Ref Number </label>

                                        <input type="text" name="tradeRefNo" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Country of Consignment </label>
                                        <select class="select2 country" name="consCountryCode"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select ---</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Last Country</label>
                                        <select class="select2 country" name="lastCountryCode"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select ---</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Next Country</label>
                                        <select class="select2 country" name="nextCountryCode"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select ---</option>

                                        </select>
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Final Country</label>
                                        <select class="select2 country" name="finalCountryCode"  tabindex="-1" aria-hidden="true" required>

                                            <option value="">Select ---</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Entry Office</label>

                                        <input type="text" name="entryOfficeCode" class="form-control">
                                    </div>
                                </div><div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Exit Office</label>

                                        <input type="text" name="exitOfficeCode" class="form-control">
                                    </div>
                                </div><div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Car Net Number</label>

                                        <input type="text" name="carnetNo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Import Duration</label>

                                        <input type="text" name="importDuration" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class=" control-label">Stay Duration</label>

                                        <input type="text" name="stayDuration" class="form-control">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Purpose</label>

                                        <textarea name="purpose" rows="5" class="form-control"></textarea>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Remarks</label>

                                        <textarea name="remarks" rows="5" class="form-control"></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">

                                    <div class="card-header">
                                        <strong>Check In Details</strong>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">Check In</label>

                                                <input type="text" name="checkInDate" data-dateformat="dd-mm-yy" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-3" style="display: none;">
                                            <div class="form-group">
                                                <label class=" control-label">Permit Expiry Date</label>

                                                <input type="text" name="permExpiryDate" data-dateformat="dd-mm-yy" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">CheckIn By</label>

                                                <input type="text" name="checkInBy" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class=" control-label">CheckIn On</label>

                                                <input type="text" name="checkInOn" data-dateformat="dd-mm-yy" class="form-control datepicker">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <!--/.row-->

            <footer class="pull-right">
                <button type="submit" class="btn btn-primary btn-block">
                    Submit
                </button>
            </footer>
        </form>

    </div>

</div>





@endsection

@section('customjs')
<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
<script type="text/javascript">

runConfig();
function runConfig() {
   // $('#loaderModal').modal('show');

    getVehicles();
    getDrivers();


}

$('#tripForm').on('submit', function (e) {
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

            $('#loaderModal').modal('hide');
        }

    });
}

function getDrivers() {


    $.ajax({
        url: "{{url('drivers/getall')}}",
        type: "GET",
        dataType: 'json',
        success: function (response) {
            var data = response.data;

            $.each(data, function (i, item) {

                $('.drivers').append($('<option>', {
                    value: item.driverRegNo,
                    text: item.othernames + ' ' + item.surname
                }));
            });

            $('#loaderModal').modal('hide');
        }

    });
}
</script>
@endsection