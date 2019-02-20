

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>
	    Yaadbook
    </title>

    <!-- Fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" /><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /><link rel="icon" href="images/favicon.png" type="image/png" />
    <!-- CSS Files -->
    <link href="{{ asset('theme/css/materialize.min') }}.css" rel="stylesheet" />
    <link href="{{ asset('theme/css/themeNew.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/toastr.min.css') }}" rel="stylesheet" />
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-105825628-1', 'auto');
      ga('send', 'pageview');
    </script>
  

</head>
<body data-stellar-ratio="2" data-stellar-background-ratio="0.5">

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


<nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="../UsualPages/default.aspx" class="brand-logo">
                    <img src="{{ asset('theme/images/logo.png') }}" />
                    <img src="{{ asset('theme/images/candle.gif') }}" id="candle">
                </a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">&#xE5D2;</i></a>
               @auth
               <ul class="right hide-on-med-and-down">
                    <li><a href="../UsualPages/default.aspx"><i class="material-icons">&#xE853;</i> <span id="incheader_lblUname">Sazzad</span></a></li>
                </ul>
             
               
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="timeline.aspx"><i class="material-icons">&#xE315;</i> Home</a></li>
                    <li><a href="default.aspx"><i class="material-icons">&#xE315;</i> My Profile</a></li>
                    <li><a href="memorial.aspx"><i class="material-icons">&#xE315;</i> My Memorials</a></li>
                    <li><a href="album.aspx"><i class="material-icons">&#xE315;</i> My Albums</a></li>
                    <li><a href="manage.aspx"><i class="material-icons">&#xE315;</i> Manage My Plan</a></li>
                    <li><a href="profile.aspx"><i class="material-icons">&#xE315;</i> Edit Profile</a></li>
                    <li><a href="change-password.aspx"><i class="material-icons">&#xE315;</i> Change Password</a></li>
                    <li><a href="logout.aspx"><i class="material-icons">&#xE315;</i> Sign Out</a></li>
                </ul>
                @endauth
            </div>
        </div>        
    </nav>
    <nav class="nav-full">
        <div class="container">
            
            @guest
            <ul class="logOutShow left hide-on-med-and-down">
                <li><a href="{{ route('about') }} ">About Us</a></li>
                <li><a href="{{ route('faqs') }}">FAQs</a></li>
                <li><a href="https://yaadbook.com/blog">Blog</a></li>
                <li><a href="{{ route('privacy') }}">Privacy</a></li>
                <li><a href="{{ route('cookies') }}">Cookies</a></li>
                <li><a href="{{ route('terms') }}">Terms</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('payment-plan') }}">Payment Plan</a></li>
            </ul>
            <ul class="logOutShow right hide-on-med-and-down">
                <li><a href="{{ route('login') }}"><i class="material-icons">&#xE899;</i> Sign In</a></li>
            </ul>
            @endguest

            @auth
            
            <ul class="left hide-on-med-and-down csMainHdr">
            <li><a href="{{ route('home2') }}">Home</a></li>
                <li><a href="../UsualPages/default.aspx">My Profile</a></li>
                <li><a href="../UserMemorial/memorial.aspx">My Memorials</a></li>
                <li><a href="../UserAlbum/album.aspx">My Albums</a></li>
                <li><a href="{{ route('payment-plan') }}">Manage My Plan</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="other_links"><i class="material-icons">&#xE5D3;</i></a></li>
            </ul>

            
            <ul class="logInShow right hide-on-med-and-down">
                <li><a class="dropdown-button" href="#!" data-activates="setting"><i class="material-icons">&#xE8B8;</i>Setting</a></li>
                <li><a href="../UsualPages/logout.aspx"><i class="material-icons">&#xE898;</i> Sign Out</a></li>
            </ul>
                      
            <ul id="other_links" class="dropdown-content">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('faqs') }}">FAQs</a></li>
                <li><a href="https://yaadbook.com/blog">Blog</a></li>
                <li><a href="{{ route('privacy') }}">Privacy</a></li>
                <li><a href="{{ route('cookies') }}">Cookies</a></li>
                <li><a href="{{ route('terms') }}">Terms</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('payment-plan') }}">Payment Plan</a></li>
            </ul>
            <ul id="setting" class="dropdown-content">
                <li><a href="../UsualPages/profile.aspx"><i class="material-icons">&#xE7FD;</i> Edit Profile</a></li>
                <li><a href="../UsualPages/change-password.aspx"><i class="material-icons">&#xE0DA;</i> Change Password</a></li>
            </ul>
            @endauth
        </div>
    </nav>  


    
    @yield('content')




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
                        <p>Suite 15557.Chynoweth House.Trevissome<br> Park.Truro.TR4 8UN (8,060.82 km)<br>
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
                        <p>© Copyright Yaadbook. - <?=date('Y')?>. All rights reserved.</p>
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
    <!--   Core JS Files   -->
    <script src="{{ asset('theme/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/materialize.min.js') }}"></script>
    <script src="{{ asset('theme/js/usr-application.js') }}"></script>
    @yield('footer')
    <script type="text/javascript">
        $(document).ready(function() {
            // Mobile Navigation
            $(".button-collapse").sideNav();
            // Modal Popup
            $('.modal').modal();
            $('select').material_select();
        });
    </script>
    <script src="{{ asset('theme/js/jquery.stellar.js') }}"></script>
    <script src="{{ asset('theme/js/toastr.min.js') }}"></script>
    <script src="{{ asset('theme/js/toastr_glimpse.js') }}"></script>
    <script src="{{ asset('theme/js/glimpse.toastr.js') }}"></script>
    <script>
        $(function () {
            $.stellar({
                horizontalScrolling: false,
                verticalOffset: 40
            });
        });
    </script>
    

</body>
</html>
