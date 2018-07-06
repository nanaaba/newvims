<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

        <title> VIMS </title>
        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Basic Styles -->

        <link href="{{asset('vendors/css/flag-icon.min.css')}}" rel="stylesheet'">
        <link href="{{asset('vendors/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/css/simple-line-icons.min.css')}}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <!-- Main styles for this application -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

        <!-- FAVICONS -->
                <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}">

        <!--        <link href="{{asset('vendors/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">-->
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>-->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
       
        
        <!-- Styles required by this views -->
        <link href="{{asset('vendors/css/daterangepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/css/gauge.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/css/toastr.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/custom.css')}}" rel="stylesheet">


        @yield('styles')
    </head>


    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

        @include('layouts.header')
        <div class="app-body">
            @include('layouts.nav')
            <!-- Left panel : Navigation area -->
            <!-- Note: This width of the aside area can be adjusted through LESS variables -->

            <!-- END NAVIGATION -->

            <!-- MAIN PANEL -->
            <main class="main">

                @yield('content')



                <div class="modal fade"  id="loaderModal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">


                        <div  id="loader" style="position: absolute;
                              margin: auto;
                              top: 0;
                              right: 0;
                              bottom: 0;
                              left: 0; width: 100px;
                              height: 100px;
                              margin-top: 150px;">
                            <i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i>
                            <span class="loader-text">Wait...</span>
                        </div>


                    </div>

                </div>

                <div class="modal " id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="post" id="deleteForm">
                                <div class="modal-body">
                                    <div>
                                        <p>
                                            Are you sure you want to delete?.<span class="holder" id="holdername"></span> 
                                        </p>
                                    </div>
                                    <input type="hidden" class="form-control form-control-lg input-lg" id="token" name="_token" value="<?php echo csrf_token() ?>" />

                                    <input type="hidden" id="code" name="code"/>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    <button type="submit"  class="btn btn-primary">YES</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </main>
        </div>
        @include('layouts.footer')

        @yield('customjs')

    </body>

</html>