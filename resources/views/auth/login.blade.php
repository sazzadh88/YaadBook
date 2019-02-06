

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>
	Yaadbook || Login
</title>

    <!-- Fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- CSS Files -->
    <link href="{{ asset('theme/css/materialize.min') }}.css" rel="stylesheet" />
    <link href="{{ asset('theme/css/themeNew.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/responsive.css') }}" rel="stylesheet" />
    <script type="text/javascript">
        function loginvalidate() {
            if ($("#txtUname").val().trim() == "") {
                $("#txtUname").focus();
                document.getElementById("spnUname").innerHTML = "This Field Is Required";
                document.getElementById("spnUnamem").style.display = "block";
                return false;
            }
            if ($("#txtPwd").val().trim() == "") {
                $("#txtPwd").focus();
                document.getElementById("spnPwd").innerHTML = "This Field Is Required";
                document.getElementById("spnPwdm").style.display = "block";
                return false;
            }
        }
    </script>
</head>
   
<body id="logged">
   


        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="slider fullscreen">
                        <ul class="slides">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="title">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="brand-logo">
                                <a href="{{ route('home') }}">
                                        <img src="{{ asset('theme/images/logo.png') }}" alt="" />
                                        <img src="{{ asset('theme/images/candle.gif') }}" id="candle" />
                                    </a>
                                </div>
                            </div>
                            <div class="col s12 m6 right-align">
                                <a class="btn btn-round waves-effect waves-light grey darken-3" href="{{ route('register') }}">Sign Up</a>
                                <a class="btn btn-round waves-effect waves-light orange darken-2" href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="card horizontal">
                                <div class="card-image">
                                    <img src="{{ asset('theme/images/helping-hand.jpg') }}">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col s12">
                                                    <span class="card-title">Login to your account</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-form">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">perm_identity</i>
                                                    <input id="txtUname" type="text" class="validate" maxlength="60" autocomplete="off" />
                                                    <label for="username">Username/Email id</label>
                                                    <span id="spnUnamem" class="validate_span">
                                                        <span id="spnUname"></span>
                                                        <span class="arr"></span>
                                                    </span>
                                                </div>
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">lock_open</i>
                                                    <input id="txtPwd" type="password" onkeydown="if(event.keyCode == 13)document.getElementById('btnLogin').click()" class="validate" maxlength="16" autocomplete="off" />
                                                    <label for="password">Password</label>
                                                    <span id="spnPwdm" class="validate_span">
                                                        <span id="spnPwd"></span>
                                                        <span class="arr"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="msgshow" class="alert-box error" style="display:none;">
                                            <span id="lblmsg"></span>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col s12 m12 l6">
                                                    <a id="btnLogin" class="waves-effect waves-light btn btn-round brown darken-1 csLogin">Login</a>
                                                    <a class="btn-flat" href="forget-password.aspx">Forgot <span>password</span>?</a>
                                                </div>
                                                <div class="col s12 m12 l6 right-align">
                                                    <ul class="list-inline">
                                                        <li>or login with</li>
                                                        <li>
                                                            <span class="btn-floating btn-sm waves-effect waves-light blue darken-4">
                                                                <input type="submit" name="btnFacebook" value="f" id="btnFacebook" class="btnHide" />
                                                                <i class="fa fa-facebook"></i>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="btn-floating btn-sm waves-effect waves-light blue">
                                                                <input type="submit" name="btnTwitter" value="" id="btnTwitter" class="btnHide" />
                                                                <i class="fa fa-twitter"></i>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="btn-floating btn-sm waves-effect waves-light red darken-3">
                                                                <input type="submit" name="btnGoogle" value="" id="btnGoogle" class="btnHide" />
                                                                <i class="fa fa-google-plus"></i>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="footer_bg">
            <div class="container">
                <div class="row">
                    <div class="useful">
                        <h2>Usefull Link</h2>
                        <div class="footer_line"></div>
                        <div class="footer_menu">
                        <ul>
                                <li><a href="about-us.aspx">About</a></li>
                                <li><a href="manage-plan.aspx">Payment Plan</a></li>
                                <li><a href="faq.aspx"> FAQ</a></li>
                                <li><a href="blog.aspx">Blog</a></li>
                            </ul>
                            <ul>
                                <li><a href="privacy.aspx">Privacy</a></li>
                                <li><a href="terms.aspx">Terms</a></li>
                                <li><a href="contact-us.aspx">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="acount">
                        <h2>MY Account</h2>
                        <div class="footer_line"></div>
                        <div class="footer_menu2">
                            <ul>
                                <li><a href="http://www.shifturankers.com/demos/yaadbook/login.aspx">Login</a></li>
                                <li><a href="http://www.shifturankers.com/demos/yaadbook/signup.aspx">Register</a></li>
                                <li><a href="http://www.shifturankers.com/demos/yaadbook/forget-password.aspx">Forgot Password?</a></li>
                                <li><a href="#">Service provider</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="address">
                       
                        <div class="footer_menu">
                            <h2>Address</h2>
                        <div class="footer_line"></div>
                        <p>Suite 15557.Chynoweth House.Trevissome<br /> Park.Truro.TR4 8UN (8,060.82 km)<br />
London, EC1N 8JY</p>
                        <p>Email: contact@yaadbook.com</p>
                        
                        <p>Phone: +44 7779 846691</p>
                        </div>
                    </div>
                    <div class="social">
                         <h2>Social link</h2>
                        <div class="footer_line"></div>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
     <div class="footer_copyright">
            <div class="container">
                <div class="row">
                    <div class="ftr-pnl">
                        <p>© Copyright Yaadbook. - 2019. All rights reserved.</p>
                        </div>
                    <div class="ftr-pnl">
                        <div class="prd">
                        <p>Provided by : <a href="#"> Shiftu Technology</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--   Core JS Files   -->
        <script src="{{ asset('theme/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('theme/js/materialize.min.js') }}"></script>
        <script src="{{ asset('theme/js/usr-application.js') }}"></script>
        <script type="text/javascript">
            $('.csLogin').click(function () {
                var validation = loginvalidate();
                if (validation == false) {
                    return;
                }
                var dt = new Date()
                var utcdiff = dt.getTimezoneOffset();//get the difference from utc time
                var tt = utcdiff.toString().replace('-', '');

                var uname = document.getElementById("txtUname").value;
                var pwd = document.getElementById("txtPwd").value;
                $.ajax({
                    type: "POST",
                    url: "login.aspx/GetLogin",
                    data: JSON.stringify({ unamep: uname, password: pwd, Regtyp: 1, utctime: tt }),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        if (response.d == 'Invalid') {
                            $("#msgshow").attr('style', 'display:block');
                            $("#lblmsg").text("Invalid username or password.");
                            //$("#lblmsg").css('color', 'red');                       
                        }
                        else {
                            window.location = 'UserTimeline/timeline.aspx';
                        }
                    },
                    failure: function (response) {
                        alert(response.d);
                    }
                });
            });
            $(document).ready(function () {
                $('.slider').slider({
                    full_width: true,
                    transition: 2000
                });
            });
        </script>
    </form>
</body>
</html>
