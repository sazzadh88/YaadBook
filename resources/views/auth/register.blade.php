


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>
	Yaadbook || Sign Up
</title><meta name="dc.source" content="Yaadbook.com" /><meta name="dc.language" content="English" /><meta name="dc.relation" content="Yaadbook.com" /><meta name="dc.title" /><meta name="dc.keywords" content="memorials for loved ones, forever memorial websites, memorial gallery, preserving memories ideas, Saving Memories Forever, legacy online memorials, keep memory alive, Yaad forever, treasured memories, memories of lost loved ones, memories last forever, forever missed memorial websites" /><meta name="abstract" content="memorials for loved ones, forever memorial websites, memorial gallery, preserving memories ideas, Saving Memories Forever, legacy online memorials, keep memory alive, Yaad forever, treasured memories, memories of lost loved ones, memories last forever, forever missed memorial websites" /><meta name="dc.subject" /><meta name="dc.description" /><meta name="audience" content="all" /><meta name="rating" content="General" /><meta name="googlebot" content="index, follow, archive" /><meta name="msnbot" content="index, follow, archive" /><meta name="Slurp" content="index, follow, archive" /><meta name="contact" /><meta name="classification" content="Yaadbook International Limited" /><meta name="copyright" content="Yaadbook International Limited" /><meta name="language" content="English" /><meta name="web_author" content="editorial staff of Yaadbook International Limited" /><meta http-equiv="Cache-control" content="public" /><meta http-equiv="imagetoolbar" content="yes" /><meta name="MSThemeCompatible" content="yes" /><meta name="geo.placename" content="Trevissome House, Trevissome Park, Blackwater, Truro TR4 8UN, UK" /><meta name="geo.position" content="50.2866050;-5.1545900" /><meta name="geo.region" content="GB-England" /><meta name="ICBM" content="50.2866050, -5.1545900" />

    <!-- Fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" /><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
   <!-- CSS Files -->
   <link href="{{ asset('theme/css/materialize.min') }}.css" rel="stylesheet" />
   <link href="{{ asset('theme/css/themeNew.css') }}" rel="stylesheet" />
   <link href="{{ asset('theme/css/theme.css') }}" rel="stylesheet" />
   <link href="{{ asset('theme/css/responsive.css') }}" rel="stylesheet" />

    <script type="text/javascript">
        function validation() {
            if ($("#txtFName").val().trim() == "") {
                $("#txtFName").focus();
                $("#spnFnamem").html("Please enter First Name.");
                $("#spnFnamem").css("display", "block");
                return false;
            }
            var regex = /^[a-zA-Z ]{2,30}$/;
            var txtFNamecheck = $("#txtFName").val().trim();
            var checkFname = regex.test(txtFNamecheck);
            if (checkFname == false) {
                $("#txtFName").focus();
                $("#spnFnamem").html("Please give valid First Name between 2 to 30 characters.");
                $("#spnFnamem").css("display", "block");
                return false;
            }
            else { $("#spnFnamem").css("display", "none"); }
            if ($("#txtLName").val().trim() == "") {
                $("#txtLName").focus();
                $("#spnLnamem").html("Please enter Last Name.");
                $("#spnLnamem").css("display", "block");
                return false;
            }
            var regex = /^[a-zA-Z ]{2,30}$/;
            var txtLNamecheck = $("#txtLName").val().trim();
            var checkLname = regex.test(txtLNamecheck);
            //alert("checkLname" + checkLname);
            if (checkLname == false) {
                $("#txtLName").focus();
                $("#spnLnamem").html("Please give valid Last Name between 2 to 30 characters.");
                $("#spnLnamem").css("display", "block");
                return false;
            }
            else { $("#spnLnamem").css("display", "none"); }
            if ($("#txtEmail").val().trim() == "") {
                $("#txtEmail").focus();
                $("#spnUname").html("Please enter mail id.");
                $("#spnUnamem").css("display", "block");
                return false;
            }
            var emailPat = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            var emailid = $("#txtEmail").val().trim();
            var matchArray = emailid.match(emailPat);
            if (matchArray == null) {
                $("#txtEmail").focus();
                $("#spnUname").html("Please give valid mail id.");
                $("#spnUnamem").css("display", "block");
                return false;
            }
            else { $("#spnUnamem").css("display", "none"); }
            //Special char validation
            var myString = $("#txtPwd").val().trim()

            if ($("#txtPwd").val().trim() == "") {
                $("#txtPwd").focus();
                $("#spnPwdm").html("Please enter password");
                $("#spnPwdm").css("display", "block");
                return false;
            }
            var regex = /^([a-zA-Z0-9@*#]{4,15})$/;
            var txtPwdcheck = $("#txtPwd").val().trim();
            var checkPwd = regex.test(txtPwdcheck);
            if (checkPwd == false) {
                $("#txtPwd").focus();
                $("#spnPwdm").html("Please give valid Password between 4 to 15 characters.");
                $("#spnPwdm").css("display", "block");
                return false;
            }
            else { $("#spnPwdm").css("display", "none"); }
            if ($("#txtCPwd").val().trim() == "") {
                $("#txtCPwd").focus();
                $("#spnCPwdm").html("Please cofirm password");
                $("#spnCPwdm").css("display", "block");
                return false;
            }
            if ($("#txtPwd").val().trim() != $("#txtCPwd").val().trim()) {
                $("#txtCPwd").focus();
                $("#spnCPwdm").html("Password Mismatch");
                $("#spnCPwdm").css("display", "block");
                return false;
            }
            else { $("#spnCPwdm").css("display", "none"); }
            var captcha_response = grecaptcha.getResponse();
            if (captcha_response.length == 0 || captcha_response == '' || captcha_response === false) {
                // Captcha is not Passed
                alert('Please check recaptcha.');
                return false;
            }
            else {
                // Captcha is Passed
                return true;
            }
        }
    </script>
</head>
<body id="signup">
   
<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<style>

</style>


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
                            <div class="col m6 s12">
                                <div class="brand-logo">
                                    <a href="default.aspx">
                                        <img src="{{ asset('theme/images/logo.png') }}" alt="" />
                                        <img src="{{ asset('theme/images/candle.gif') }}" id="candle" />
                                    </a>
                                </div>
                            </div>
                            <div class="col m6 s12 right-align">
                                <a class="btn btn-round waves-effect waves-light orange darken-2" href="{{ route('register') }}">Sign Up</a>
                                <a class="btn btn-round waves-effect waves-light grey darken-3" href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="card horizontal">
                                <div class="card-image">
                                    <img src="{{ asset('theme/images/helping-hand-green.jpg') }}" />
                                </div>
                            <form action="{{ route('register') }}" method="POST" id="regForm">
                                <div class="card-stacked">
                                    <div class="card-content">

                                        
                                            @if ($errors->any())
                                            <div class="label red">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                    
                                        <div class="card-form">

                                            @if (session('user')) {{ session('user')->name }} @endif

                                            <div class="row">
                                                <div class="input-field col m6 s12">
                                                    <i class="material-icons prefix">perm_identity</i>
                                                    <input name="first_name" id="txtFName" type="text" class="validate csSpace" maxlength="50" value="@if (session('firstName')) {{ session('firstName') }} @endif" autocomplete="off" />
                                                    <label for="first-name">First Name</label>
                                                    <span id="spnFnamem" class="validate_span">
                                                        <span id="spnFname"></span>
                                                        <span class="arr"></span>
                                                    </span>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <input name="last_name" id="txtLName" type="text" class="validate csSpace" value="@if (session('lastName')) {{ session('lastName') }} @endif" maxlength="10" autocomplete="off" onkeypress="return RestrictSpace()" />
                                                    <label for="last-name">Last Name</label>
                                                    <span id="spnLnamem" class="validate_span">
                                                        <span id="spnLname"></span>
                                                        <span class="arr"></span>
                                                    </span>
                                                </div>
                                                <div class="input-field col m12 s12">
                                                    <i class="material-icons prefix">mail_outline</i>
                                                    <input name="email" id="txtEmail" value="@if (session('email')) {{ session('email') }} @endif" type="email" class="validate" maxlength="60" autocomplete="off" />
                                                    <label for="email">Email Id</label>
                                                    <span id="spnUnamem" class="validate_span">
                                                        <span id="spnUname"></span>
                                                        <span class="arr"></span>
                                                    </span>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <i class="material-icons prefix">lock_open</i>
                                                    <input name="password" id="txtPwd" type="password" class="validate" maxlength="16" autocomplete="off" />
                                                    <label for="password">Password</label>
                                                    <span id="spnPwdm" class="validate_span">
                                                        <span id="spnPwd"></span>
                                                        <span class="arr"></span>
                                                    </span>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <input name="password_confirmation" id="txtCPwd" type="password" class="validate" onkeydown="if(event.keyCode == 13)document.getElementById('btnRegister').click()" maxlength="16" autocomplete="off" />
                                                    <label for="confirm-password">Confirm Password</label>
                                                    <span id="spnCPwdm" class="validate_span">
                                                        <span id="spnCPwd"></span>
                                                        <span class="arr"></span>
                                                    </span>

                                                <input type="hidden" name="_token" value="{{ csrf_token() }} ">
                                                </div>
                                            </div>
                                            <div id="dvCaptcha"></div>
                                            <input name="txtCaptcha" type="text" id="txtCaptcha" style="display: none" />
                                            <span id="rfvCaptcha" style="color:Red;display:none;">Captcha validation is required.</span>
                                            <div class="g-recaptcha" data-sitekey='6LdHgioUAAAAANSuGdM-LIrG75v0KsOtm4YlRW29'></div>
                                        </div>
                                        <div id="msgshow" class="alert-box success" style="display:none;">
                                            <span id="lblmsg"></span>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col m6 s12">
                                                    
                                                    <input id="btnRegister" type="button" class="waves-effect waves-light btn btn-round teal darken-1 csSubmit" value="Register">
                                                    <a class="btn-flat" href="{{ route('login') }}">Already have an <span>account</span>?</a>
                                                </div>
                                                <div class="col m6 s12 right-align">
                                                    <ul class="list-inline">
                                                        <li>or login with</li>
                                                        
                                                        <li>
                                                            <span class="btn-floating btn-sm waves-effect waves-light blue darken-4">
                                                            <a  class="btnHide" href="{{ url('auth/redirect/facebook') }}"></a>
                                                                <i class="fa fa-facebook"></i>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="btn-floating btn-sm waves-effect waves-light blue">
                                                            <a  class="btnHide" href="{{ url('auth/redirect/twitter') }}"></a>
                                                                <i class="fa fa-twitter"></i>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="btn-floating btn-sm waves-effect waves-light red darken-3">
                                                            <a  class="btnHide" href="{{ url('auth/redirect/google') }}"></a>
                                                               <i class="fa fa-google-plus"></i>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
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
                            <li><a href="{{ route('about') }} ">About</a></li>
                                <li><a href="{{ route('payment-plan') }}">Payment Plan</a></li>
                                <li><a href="{{ route('faqs') }}"> FAQ</a></li>
                                <li><a href="blog.aspx">Blog</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ route('privacy') }}">Privacy</a></li>
                                <li><a href="{{ route('terms') }}">Terms</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
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
            $('.csSubmit').click(function () {
                //alert("Coming");
                var val = validation();
                if (val == false) {
                    return;
                }
                var fname = document.getElementById("txtFName").value;
                var lname = document.getElementById("txtLName").value;
                var uname = document.getElementById("txtEmail").value;
                var pwd = document.getElementById("txtPwd").value;
                var csrf_token = document.getElementsByName("csrf_token").value;
                var utype = 2;
                var dt = new Date()
                var utcdiff = dt.getTimezoneOffset();//get the difference from utc time
                var tt = utcdiff.toString().replace('-', '');


                    // console.log("Data", JSON.stringify({ unamep: uname, password: pwd, mainutype: utype, firstname: fname, lastname: lname, utctime: tt }));
                    $('#regForm').submit();
            });
            $(document).ready(function () {
                $('.slider').slider({
                    full_width: true,
                    transition: 2000
                });
            });
        </script>
        <!--recaptcha-->
        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
        
        <script type="text/javascript">
            var onloadCallback = function () {
                grecaptcha.render($('.g-recaptcha')[0], {
                    'sitekey': '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
                    'callback': function (response) {
                        $.ajax({
                            type: "POST",
                            url: "signup.aspx/VerifyCaptcha",
                            data: "{response: '" + response + "'}",
                            contentType: "application/json; charset=utf-8",
                            dataType: "json",
                            success: function (r) {
                                var captchaResponse = jQuery.parseJSON(r.d);
                                $("[id*=txtCaptcha]").val(captchaResponse.success);
                                $("[id*=rfvCaptcha]").hide();
                            }
                        });
                    }
                });
            };
        </script>
        
    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("rfvCaptcha"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var rfvCaptcha = document.all ? document.all["rfvCaptcha"] : document.getElementById("rfvCaptcha");
rfvCaptcha.controltovalidate = "txtCaptcha";
rfvCaptcha.errormessage = "Captcha validation is required.";
rfvCaptcha.display = "Dynamic";
rfvCaptcha.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
rfvCaptcha.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        //]]>


        function _rdrFb(){
            window.location = '{{ url('auth/redirect/facebook') }}';
        }

</script>

</body>
</html>

