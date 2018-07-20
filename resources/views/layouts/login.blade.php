<!DOCTYPE html>
<html lang="en-us" id="extr-page">
    <head>
        <meta charset="utf-8">
        <title> VIMS</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- #CSS Links -->

        <link href="{{ asset('vendors/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('vendors/css/simple-line-icons.min.css')}}" rel="stylesheet">
        <!-- Main styles for this application -->
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}">
        <link href="{{ asset('css/custom.css')}}" rel="stylesheet">

        <style type="text/css">
            .loginlayout {
                background-image: url(public/img/LogInScreen%20.png);
                background-repeat: repeat;

            }

        </style>
    </head>




    <body class="app flex-row align-items-center loginlayout">
        <div class="container">
            @yield('content')
        </div>

        <!-- Bootstrap and necessary plugins -->
        <script src="{{asset('vendors/js/jquery.min.js')}}"></script>
        <script src="{{asset('vendors/js/popper.min.js')}}"></script>
        <script src="{{asset('vendors/js/bootstrap.min.js')}}"></script>

    </body>




    <div class="modal fade " id="loaderModal" data-keyboard="false" data-backdrop="static" role="dialog" >
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

    <script type="text/javascript">

$('#loginForm').submit(function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    console.log(formData);
    $('#loaderModal').modal('show');

    $('input:submit').attr("disabled", true);
    $.ajax({
        url: "{{url('authenticateuser')}}",
        type: "POST",
        data: formData,
        dataType: "json",
        success: function (data) {
            $('#loaderModal').modal('hide');

            console.log('data : ' + data.status);
            if (data.status == 0) {
                window.location = "dashboard";
            } else {
                $('#errordiv').show();
                $('#errormsg').html(data.message);
            }

        },
        error: function (jXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
});



$('#forgotPasswordForm').submit(function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    console.log(formData);
    // $('#loaderModal').modal('show');

    $('input:submit').attr("disabled", true);
    $.ajax({
        url: "{{url('forgotpassword')}}",
        type: "POST",
        data: formData,
        dataType: "json",
        success: function (data) {


            console.log('data : ' + data);
            if (data.status == 0) {
                $('#successdiv').show();
                $('#successmsg').html(data.message+" .Please wait whiles its redirect you to login page.");
                window.setTimeout(function () {
                    window.location = "login";
                }, 2000)
            } else {
                $('#errordiv').show();
                $('#errormsg').html(data.message);
            }

            //  $('#loaderModal').modal('hide');


        },
        error: function (jXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
});


    </script>

</body>
</html>