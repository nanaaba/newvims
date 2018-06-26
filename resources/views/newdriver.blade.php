@extends('layouts.master')

@section('content')

<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Driver</li>
    <li class="breadcrumb-item active">New Driver</li>
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
        <form id="driverForm" novalidate>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Driver Personal Details</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Surname</label>

                                        <input type="text" name="surname" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Other Names</label>

                                        <input type="text" name="othernames" class="form-control">
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Sex</label>

                                        <select class="select2 gender" name="gender"
                                                tabindex="-1" aria-hidden="true" required style="width: 100%">


                                            <option value="">Select ---</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Date Of Birth</label>

                                        <input type="text" name="dob" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Email Address</label>

                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Local Phone Number</label>

                                        <input type="text" name="localPhone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Overseas Phone Number</label>

                                        <input type="text" name="foreignPhone" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Resident Country</label>


                                        <select class="select2 countries" 
                                                name="residentCountryId"  tabindex="-1" aria-hidden="true" 
                                                required style="width: 100%">

                                            <option value="">Select ---</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Country Of Origin</label>


                                        <select class="select2 countries" 
                                                name="countryCode"  tabindex="-1" aria-hidden="true" 
                                                required style="width: 100%">

                                            <option value="">Select ---</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Local Address</label>
                                        <textarea name="localAddress" rows="10" class="form-control"></textarea>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Overseas Address</label>
                                        <textarea name="foreignAddress"  rows="10" class="form-control"></textarea>

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">National ID Type</label>


                                        <select class="select2 idtypes" name="nationalIdType" 
                                                tabindex="-1" aria-hidden="true" required
                                                style="width: 100%">

                                            <option value="">Select ---</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Nationality ID Number</label>

                                        <input type="text" name="nationalId" class="form-control">
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label">Driver License Number</label>

                                        <input type="text" name="licenceNo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label"> Date of Issue</label>

                                        <input type="text" name="issueDate" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class=" control-label"> Date of Expiry</label>

                                        <input type="text" name="expiryDate" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Passport Details</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Passport No</label>

                                        <input type="text" name="passportNo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Date of Issue</label>

                                        <input type="text" data-dateformat="yy-mm-dd" name="passportIssueDate" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class=" control-label">Date of Expiry </label>

                                        <input type="text" data-dateformat="yy-mm-dd" name="passportExpiryDate" class="form-control datepicker">
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Other Data</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="row col-lg-12">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class=" control-label">Reg. Date of Issue </label>

                                            <input type="text" name="regIssueDate" class="form-control datepicker">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label class=" control-label">Reg. Date of  Expiry </label>

                                            <input type="text" data-dateformat="yy-mm-dd" name="regExpiryDate" class="form-control datepicker">
                                        </div>


                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class=" control-label">Remarks</label>
                                            <textarea name="remarks" rows="3" class="form-control"></textarea>
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