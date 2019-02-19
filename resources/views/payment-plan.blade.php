

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="images/favicon.png" type="image/png" /><title>
	Yaadbook Plan
</title>

    <!-- Fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" /><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->

    <link href="{{ asset('theme/css/materialize.min') }}.css" rel="stylesheet" />
    <link href="{{ asset('theme/css/themeNew.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/responsive.css') }}" rel="stylesheet" />

<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-105825628-1', 'auto');
      ga('send', 'pageview');
    </script>
  

</head>
<body id="pricing">

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
                        <div class="col s12 center-align">
                            <div class="brand-logo">
                                <img src="{{ asset('theme/images/logo.png') }}" alt="" />
                                <img src="{{ asset('theme/images/candle.gif') }}" id="candle" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricing-table">
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="price-box" >
                                <div class="card-panel">
                                    <span class="price-text">£1.99</span>
                                    <span class="price-time">Per Month Only</span>
                                    <ul class="price-detail">
                                        <li>15 Days free trial</li>
                                        <li>1000MB space for memories, photos and videos</li>
                                        <li>Posting limited to 1000MB</li>
                                    </ul>
                                </div>
                                <div class="price-name amber darken-1">SILVER</div>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="price-box" >
                                <div class="card-panel">
                                    <span class="price-text">£4.99</span>
                                    <span class="price-time">Per Month Only</span>
                                    <ul class="price-detail">
                                        <li>1500MB space for memories, photos and videos</li>
                                        <li>Unlimited post writing (without media upload)</li>
                                    </ul>
                                </div>
                                <div class="price-name red accent-2">GOLD</div>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="price-box" >
                                <div class="card-panel">
                                    <span class="price-text">£9.99</span>
                                    <span class="price-time">Per Month Only</span>
                                    <ul class="price-detail">
                                        <li>Unlimited space for memories, photos and videos</li>
                                        <li>Unlimited post writing and media upload</li>
                                    </ul>
                                </div>
                                <div class="price-name teal accent-4">PLATINUM</div>
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
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Mobile Navigation
            $(".button-collapse").sideNav();
            // Modal Popup
            $('.modal').modal();
            $('select').material_select();
        });
        $(document).ready(function () {
            $('.slider').slider({
                full_width: true,
                transition: 2000
            });
        });
    </script>
        <script>
        var session = "";
        session = '';
        if(session=="")
        {           
            $(".logInShow").attr('style', 'display:none;');
        }
        else {
            $(".logOutShow").attr('style', 'display:none;');
        }
    </script>
</form>
</body>
</html>
