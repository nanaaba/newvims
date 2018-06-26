<div id="content">
    <div class="page-head">
        <h2 class="page-head-title"> {{$details['chasisNo']}}'s Information</h2>
        <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Vehicles</a></li>
            <li class="active"> {{$details['chasisNo']}}'s Information</li>
        </ol>
    </div>
    <div class="main-content container-fluid">

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
        <form id="updateVehicleForm" novalidate>


            {{csrf_field()}}

            <div class="row">

                <div class="well well-sm well-light">
                    <h3> {{$details['chasisNo']}}'s Information
                        <br>
    <!--                    <<small>Simple Tabs</small>
                        -->
                    </h3>
                    <input type="hidden" name="vehicleno" value="{{$details['vehicleNo']}}"/>

                    <div id="tabs">
                        <ul>
                            <li>
                                <a href="#tabs-a">Vehicle Data</a>
                            </li>
                            <li>
                                <a href="#tabs-b">Registration Data</a>
                            </li>
                            <li>
                                <a href="#tabs-c">Permit Data</a>
                            </li>
                            <li>
                                <a href="#tabs-d">Ecowas Data</a>
                            </li>
                            <li>
                                <a href="#tabs-e">Trips</a>
                            </li>
                        </ul>

                        <div id="tabs-a" class="panel-body">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Vehicle Type</label>

                                    <select class="select2 select2-hidden-accessible vehicletypes" name="vehicleTypeId"  tabindex="-1" aria-hidden="true" required>

                                        <option value="{{$details['vehicleType']}}">{{$details['vehicleType']}}</option>

                                    </select>


                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Hs Code</label>

                                    <input type="text" name="hsCode" value="{{$details['hsCode']}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Status Code</label>

                                    <input type="text" name="statusCode" value="{{$details['statusCode']}}" class="form-control datepicker">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">CPC Code</label>

                                    <input type="text" name="cpcCode" value="{{$details['cpcCode']}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Country</label>


                                    <select class="select2 select2-hidden-accessible countries" name="resCountryId"  tabindex="-1" aria-hidden="true" required>

                                        <option value="">Select ---</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Origin Make</label>

                                    <input type="text" name="make" value="{{$details['make']}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Model</label>

                                    <select class="select2 select2-hidden-accessible models" name="model"  tabindex="-1" aria-hidden="true" required>

                                        <option value="{{$details['model']}}">{{$details['model']}}</option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Color</label>
                                    <input type="text" name="color" value="{{$details['colour']}}" class="form-control">



                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Chassis Number</label>

                                    <input type="text" name="chasisNo" value="{{$details['chasisNo']}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Engine Number</label>

                                    <input type="text" name="engineNo" value="{{$details['engineNo']}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Front Plate Number</label>

                                    <input type="text" name="frontPlateNo" value="{{$details['frontPlateNo']}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Back Plate Number</label>

                                    <input type="text" name="backPlateNo" value="{{$details['backPlateNo']}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class=" control-label">Description</label>
                                    <textarea name="description" rows="8" class="form-control">
                                                    {{trim($details['description'])}}
                                    </textarea>

                                </div>
                            </div>

                        </div>
                        <div id="tabs-b" class="panel-body">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class=" control-label">Issue Date</label>

                                    <input type="text" name="regIssueDate"  value="{{$details['regIssueDate']}}" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class=" control-label">Expiry Date</label>
                                    <input type="text" name="regExpiryDate" value="{{$details['regExpiryDate']}}" class="form-control datepicker">

                                </div>
                            </div>
                        </div>
                        <div id="tabs-c" class="panel-body">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Permit No </label>

                                    <input type="text" name="permitNo" value="{{$details['permitNo']}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Issue Date</label>

                                    <input type="text" name="permitIssueDate" value="{{$details['permitIssueDate']}}" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Expiry Date</label>
                                    <input type="text" name="permitExpiryDate" value="{{$details['permitExpiryDate']}}" class="form-control datepicker">

                                </div>
                            </div>
                        </div>

                        <div id="tabs-d" class="panel-body">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Ecowas No </label>

                                    <input type="text" name="ecowasNo" value="{{$details['ecowasNo']}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Issue Date</label>

                                    <input type="text" name="ecowasIssueDate" value="{{$details['ecowasIssueDate']}}" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class=" control-label">Expiry Date</label>
                                    <input type="text" name="ecowasExpiryDate" value="{{$details['ecowasExpiryDate']}}" class="form-control datepicker">

                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class=" control-label">Remarks</label>
                                    <textarea name="remarks" rows="8" class="form-control">
                                                    {{$details['remarks']}}

                                    </textarea>

                                </div>
                            </div>
                        </div>    


                        <div id="tabs-e" class="panel-body">
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


            </div>

            <footer class="pull-right">
                <button type="submit" class="btn btn-primary btn-block">
                    Update
                </button>
            </footer>
        </form>
    </div>

</div>
