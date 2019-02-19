

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Yaadbook
</title><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- CSS Files -->
    <link href="{{ asset('theme/css/materialize.min') }}.css" rel="stylesheet" />
    <link href="{{ asset('theme/css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/responsive.css') }}" rel="stylesheet" />
</head>
<body id="stripe" class="chngpwd">
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="title" style="text-align: center;">
                        <img src="{{ asset('theme/images/logo.png') }}" alt="" />
                        <img src="{{ asset('theme/images/candle.gif') }}" id="candle" />
                </div>
                <div class="successText">
                    <div class="row">
                        <div class="col s12">
                            <i class="material-icons">&#xE86C;</i>
                            <h5>You Registered Successfully.</h5>
                            <h6>Thank you for Connected with yaadbook!</h6>
                        </div>
                        <div class="col s12">
                            <a href="{{ route('home2') }}" class="btn btn-round waves-effect waves-light orange darken-2">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('theme/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/materialize.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            // Mobile Navigation
            $(".button-collapse").sideNav();
            // Modal Popup
            $('.modal').modal();
            $('select').material_select();
        });
    </script>
</body>
</html>
