
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>
	Yaadbook International Limited | Free Online Memorial Sites & Tributes
</title><meta name="dc.source" content="Yaadbook.com" /><meta name="dc.language" content="English" /><meta name="dc.relation" content="Yaadbook.com" /><meta name="dc.title" content="Yaadbook International Limited | Free Online Memorial Sites &amp; Tributes" /><meta name="dc.keywords" content="memorials for loved ones, forever memorial websites, memorial gallery, preserving memories ideas, Saving Memories Forever, legacy online memorials, keep memory alive, Yaad forever, treasured memories, memories of lost loved ones, memories last forever, forever missed memorial websites" /><meta name="abstract" content="memorials for loved ones, forever memorial websites, memorial gallery, preserving memories ideas, Saving Memories Forever, legacy online memorials, keep memory alive, Yaad forever, treasured memories, memories of lost loved ones, memories last forever, forever missed memorial websites" /><meta name="dc.subject" content="Yaadbook International Limited - Log in Or Sign up" /><meta name="dc.description" content="Create an account or log in to Yaadbook International. Capture and treasure the memories for the future generations through this online memorial site." /><meta name="description" content="Create an account or log in to Yaadbook International. Capture and treasure the memories for the future generations through this online memorial site." /><meta name="audience" content="all" /><meta name="rating" content="General" /><meta name="googlebot" content="index, follow, archive" /><meta name="msnbot" content="index, follow, archive" /><meta name="Slurp" content="index, follow, archive" /><meta name="identifier-url" content="https://Yaadbook.com/" /><meta name="author" content="https://Yaadbook.com/" /><link rel="author" href="https://Yaadbook.com/" /><meta name="contact" /><meta name="classification" content="Yaadbook International Limited" /><meta name="copyright" content="Yaadbook International Limited" /><meta name="language" content="English" /><meta name="web_author" content="editorial staff of Yaadbook International Limited" /><meta http-equiv="Cache-control" content="public" /><meta http-equiv="imagetoolbar" content="yes" /><meta name="MSThemeCompatible" content="yes" /><meta name="geo.placename" content="Trevissome House, Trevissome Park, Blackwater, Truro TR4 8UN, UK" /><meta name="geo.position" content="50.2866050;-5.1545900" /><meta name="geo.region" content="GB-England" /><meta name="ICBM" content="50.2866050, -5.1545900" />

    <!-- Fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

    
    <!-- CSS Files -->
    <link href="{{ asset('theme/css/bootstrap.min') }}.css" rel="stylesheet" />
    <link href="{{ asset('theme/css/themeNew.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/materialize.min') }}.css" rel="stylesheet" />
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
                $("#spnPwd").html("Please enter password");
                $("#spnPwdm").css("display", "block");
                return false;
            }
            var regex = /^([a-zA-Z0-9@*#]{4,15})$/;
            var txtPwdcheck = $("#txtPwd").val().trim();
            var checkPwd = regex.test(txtPwdcheck);
            if (checkPwd == false) {
                $("#txtPwd").focus();
                $("#spnPwd").html("Please give valid Password between 4 to 15 characters.");
                $("#spnPwdm").css("display", "block");
                return false;
            }
            else { $("#spnPwdm").css("display", "none"); }
            if ($("#gridCheck").checked == false) {
                alert("Please check term and conditions.");
                return false;
            }
            else
            {
                // Captcha is Passed
                return true;
            }
        }
    </script>
</head>
<body id="landingPage">
<form method="post" action="{{ route('userRegister') }}" id="form1">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-transparent">
            <div class="container">
            <a class="navbar-brand brand-logo" href="{{ route('home') }}">
                    <img src="{{ asset('theme/images/logo.png') }}" />
                    <img src="{{ asset('theme/images/candle.gif') }}" id="candle" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Service Provider</a>
                        </li>
                        <li class="nav-item">
                       <a class="nav-link" href="{{ route('login') }}">Login</a> 
                        </li>

                        <li class="nav-item btn free">
                       <a class="nav-link" href="{{ route('register') }}">Free Account</a> 
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container introSec">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="introTxt">
                        <h1>Beautiful, Free Online Memorials &amp; Tributes</h1>
                        <ul>
                            <li><i class="io io-1"></i> When someone you love becomes a memory, that memory becomes a treasure.</li>
                            <li><i class="io io-2"></i> Preserve that treasure. Don't let the bright flame of your loved ones die out with time.</li>
                            <li><i class="io io-3"></i> Capture the memories for future generations.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="signupForm">
                        <h3 class="mb-4">Create an account</h3>
                        <div class="form-row">

                                @if ($errors->any())
                                <div class="label red">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                
                            <div class="form-group col-md-6 account">
                                    

                                <label for="firstName">First Name</label>
                                <input name="first_name" type="text" id="txtFName" class="form-control" placeholder="First Name" />
                                  <span id="spnFnamem" class="validate_span">
                                      <span id="spnFname"></span>
                                      <span class="arr"></span>
                                  </span>
                            </div>
                            <div class="form-group col-md-6 account">
                                <label for="lastName">Last Name</label>
                               <input name="last_name" type="text" id="txtLName" class="form-control" placeholder="Last Name" />
                                 <span id="spnLnamem" class="validate_span">
                                    <span id="spnLname"></span>
                                    <span class="arr"></span>
                                </span>
                            </div>
                            @csrf
                        </div>
                        <div class="form-group account">
                            <label for="inputEmail4">Email</label>
                            <input name="email" type="text" id="txtEmail" class="form-control" placeholder="Email" />
                            <span id="spnUnamem" class="validate_span">
                                <span id="spnUname"></span>
                                <span class="arr"></span>
                            </span>
                        </div>
                        <div class="form-group account">
                            <label for="inputPassword4">Password</label>
                              <input name="password" type="password" id="txtPwd" class="form-control" placeholder="Password" />
                             <span id="spnPwdm" class="validate_span">
                                 <span id="spnPwd"></span>
                                 <span class="arr"></span>
                            </span>
                        </div>
                        <div class="form-group">
                          
                        </div>
                     <a id="btnSubmit" class="btn btn-primary mt-4">Create an account</a>
                          <div id="msgshow" class="alert-box success" style="visibility:hidden">
                            <span id="lblmsg"></span>
                           </div>
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">
                                <a href="{{ route('login') }}"><small>Already have an Account?</small></a>
                            </div>
                            <div class="col s12 m12 l6 right-align">
                                                    <ul class="list-inline">
                                                        <li>or login with</li>
                                                        <li>
                                                                <a href="{{ url('auth/redirect/facebook') }}">
                                                            <span class="btn-floating btn-sm waves-effect waves-light blue darken-4">
                                                            
                                                                <i class="fa fa-facebook"></i>
                                                            </span>
                                                        </a>
                                                        </li>
                                                        <li><a href="{{ url('auth/redirect/twitter') }}">

                                                            <span class="btn-floating btn-sm waves-effect waves-light blue">
                                                                <input type="submit" name="btnTwitter" value="" id="btnTwitter" class="btnHide" />
                                                                <i class="fa fa-twitter"></i>
                                                            </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                        <a href="{{ url('auth/redirect/google') }}">
                                                            <span class="btn-floating btn-sm waves-effect waves-light red darken-3">
                                                                <input type="submit" name="btnGoogle" value="" id="btnGoogle" class="btnHide" />
                                                                <i class="fa fa-google-plus"></i>
                                                            </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                             <small>Join as a <a href="#">Service Provider</a></small>
                                
                                                        </li>
                                                    </ul>
                                                      
                               
                          
                                                </div>
                            
                         
                          

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main role="main">
        <section id="stepSec">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="stepBox">
                            <div class="step-col">
                                <figure>
                                    <img src="{{ asset('theme/images/step1.png') }}" />
                                </figure>
                                <h3>Create</h3>
                                <h5>free memorial</h5>
                            </div>                            
                            <div class="step-col">
                                <figure>
                                    <img src="{{ asset('theme/images/step2.png') }}" />
                                </figure>
                                <h3>Upload</h3>
                                <h5>Photos & Videos</h5>
                            </div><div class="step-col">
                                <figure>
                                    <img src="{{ asset('theme/images/step3.png') }}" />
                                </figure>
                                <h3>Share</h3>
                                <h5>Memories & Stories</h5>
                            </div><div class="step-col">
                                <figure>
                                    <img src="{{ asset('theme/images/step4.png') }}" />
                                </figure>
                                <h3>Collaborate</h3>
                                <h5>& Pay tribute</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="welcomeBox">
                            <h3>Create a free online memorial for a friend or family member.</h3>
                           
                           
                            <p>
                                Yaadbook the fully featured free forever online memorial services on the internet. This is a site where you can create an everlasting presence of your lost loved one. This virtual memorial provides with platform where you can share memories, stories, messages, photos, videos, send condolences, and write tributes. These features we offer reflect your loved one's life and personality with cherished memories alive while keeping control on sensitive aspects such as privacy and security.
                            </p> 
                            <p class="memorial">OUR MEMORIAL FEATURES:</p>
                            <table>
                                <tr>
                                    <td>
                                        <div class="our_memorial">
                                             <ul>
                                                <li>Upload Photos</li>
                                                 <li>Add Videos to memorials</li>
                                                 <li>Send Messages</li>
                                                 <li>Send Condolences</li>
                                                 <li>Post Tributes</li>
                                                 <li>Share Memories & Stories</li>
                                                 <li>Guest Book</li>
                                              </ul>
                                          </div>
                                    </td>
                                    <td>
                                           <div class="our_memorial">
                                               <ul style="vertical-align:top;">
                                                  <li>Privacy Settings</li>
                                                 <li>Invite friends and family</li>
                                                 <li>Tell story of loved one's life</li>
                                                 <li>Create Photo Albums</li>
                                                 <li>Share on social networking</li>
                                                 <li> Send Email or Facebook invites</li>  
                                            
                                                </ul>  
                                            </div>                                      
                                    </td>
                                </tr>
                            </table>
                           
                                 
                                           
                            <a href="http://yaadbook.com/UserMemorial/memorial.aspx" class="btn btn-lg btn-custom">Create a Memorial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="orangeSec">
            <div class="container">
                <h1>Preserving Memories Online has Never been Simpler</h1>
            </div>
        </section>
        <section id="aboutSec">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h5>An Interactive Memorial</h5>
                        <h1>We are more than an Online Obituary</h1>
                    </div>
                    <div class="col-12 col-md-8">
                        
                        <p>
                            Yaadbook is an online memorial site not about death, it's all about life. Here you can create an everlasting tribute to someone special you have loved and lost. It is all about relishing the beautiful gift of life and remembering those who are no longer with us and for those who they were.
Here you are encouraged to remember and pay tribute to those special persons whose presence have influenced your life, family, and friends. This allows you to create a virtual interactive gallery for the families to come together and preserve the sweet, precious and beautiful memorial for future generations to come. This brings a positive perspective to your memories by assuaging your grief with an appreciation of everyone around you.

                        </p>
                          <a href="{{ route('register') }}" class="btn btn-lg btn-custom">Create Your free account</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="paymentSec">
            <div class="container">
                <div class="paymentBox">
                    <div class="payment-col">
                        <figure>
                            <img src="{{ asset('theme/images/stripe-logo.png') }}" />
                        </figure>
                    </div>
                    <div class="payment-col">
                        <h2>Your privacy is guaranteed</h2>
                        <h5>Keep your memories safe, secure & private</h5>
                        <a href="http://yaadbook.com/UserManagePlan/manage.aspx" class="btn btn-lg btn-custom" style="color:white;">Create Your online memorial</a>
                    </div>
                    
                </div>
            </div>
        </section>
        <section id="blogSec">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="blogBox">
                            <figure class="blogImg">
                                <img src="{{ asset('theme/images/post-1.png') }}" />
                            </figure>
                            <div class="blogInfo">
                                <div class="blogMeta">
                                    <div class="meta"><i class="fa fa-heart-o"></i> 10 Likes</div>
                                    <div class="meta"><i class="fa fa-comment-o"></i> 04 Comments</div>
                                    <div class="meta"><i class="fa fa-calendar-times-o"></i> 24 Nov, 2017</div>
                                </div>
                                <h3 class="blogTitle"><a href="https://yaadbook.com/blog/online-memorials/" style="color:black">Online memorials</a> </h3>
                                <div class="position_meta">
                                 </div>
                                 <p class="entry-summary">An online memorial covers any tribute or story to someone that has passed away, usually a loved one. An online memorial can be either a simple one page tribute mentioning the name of the deceased with a few words to a more elaborate and fully interactive memorial site that commemorates and remembers a loved one’s life in their entirety with photos, videos and numerous memories and stories from friends and family. The main objective behind an online memorial is to make it last beyond the immediate grief of a loved one passing away.</p>
                                 <div class="more-link">
                                        <a href="https://yaadbook.com/blog/online-memorials/" rel="bookmark">Read more</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="blogBox">
                            <figure class="blogImg">
                                <img src="{{ asset('theme/images/post-3.png') }}" alt="Post Format Gallery 006" />
                            </figure>
                            <div class="blogInfo">
                                <div class="blogMeta">
                                    <div class="meta"><i class="fa fa-heart-o"></i> 10 Likes</div>
                                    <div class="meta"><i class="fa fa-comment-o"></i> 04 Comments</div>
                                    <div class="meta"><i class="fa fa-calendar-times-o"></i> 24 Nov, 2017</div>
                                </div>
                                <h3 class="blogTitle"><a href="https://yaadbook.com/blog/preserving-memories-lost-loved-ones/" style="color:black">Preserving Memories of Lost Loved Ones</a> </h3>
                                <div class="position_meta">
                                       
                                    </div>

                                    <p class="entry-summary">  </p>
                                    <div class="more-link">Losing a loved one can be a devastating experience. Deciding the method in which we honor our loved ones who played such pivotal parts in our lives can seem like an overwhelming task for many. But there are multitudes of unique and remarkable ways in which you can celebrate your loved one’s life. Below, you will find seven ways to preserve the memories of lost loved ones and commemorate them:
                                        Dedicate a memorial bench

A memorial bench can be placed in a picturesque spot, a place your loved one enjoyed or even in your own garden where you can sit and bring to mind all the amazing times you had together. <a href="https://yaadbook.com/blog/preserving-memories-lost-loved-ones/" rel="bookmark">Read more</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="funeralSec">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h3>Are you a Funeral Service Provider?</h3>
                    </div>
                    <div class="col-12 col-md-4 text-right">
                        <a href="#" class="btn btn-lg btn-custom">Join as a service provider</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonialSec">
            <div class="container">
                <h2 class="secTitle">What they say about us</h2>

              
                <svg aria-hidden="true" role="img" viewBox="0 0 512 512"><path fill="currentColor" d="M0 432V304C0 166.982 63.772 67.676 193.827 32.828 209.052 28.748 224 40.265 224 56.027v33.895c0 10.057-6.228 19.133-15.687 22.55C142.316 136.312 104 181.946 104 256h72c26.51 0 48 21.49 48 48v128c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48zm336 48h128c26.51 0 48-21.49 48-48V304c0-26.51-21.49-48-48-48h-72c0-74.054 38.316-119.688 104.313-143.528C505.772 109.055 512 99.979 512 89.922V56.027c0-15.762-14.948-27.279-30.173-23.199C351.772 67.676 288 166.982 288 304v128c0 26.51 21.49 48 48 48z" class=""></path></svg>
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3" class=""></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4" class=""></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-caption d-md-block">
                                <div class="test-image">
                                    <img src="{{ asset('theme/images/tbn_5a9e7c4a30cca-Screen Shot 2018-03-06 at 12.50.48.png') }}" />
                                </div>
                                <h5>---Shexiamae Chiaxin---</h5>
                                 <p>There are many memorial services to choose from but Yaadbook is as Gentle as a feather and Strong in service. This site is backed by some many features to include. Whether it is for creating a memorial gallery, uploading videos, sending messages or condolences, post tributes or sharing on social network everything is covered under one roof. The professionalism of this website is evident and appreciated. This site went above & beyond to give the best service possible and would recommend their services to everyone. Thank you from the bottom of our hearts.
 </p>
                                
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption d-md-block">
                                <div class="test-image">
                                    <img src="{{ asset('theme/images/tbn_5a9f6472efff6-Ian Cropped.jpg') }}" />
                                </div>
                                 <h5>---Sunny Hira---</h5>
                                <p>
                          We would like to say thank you to everyone at Yaadbook that were involved in providing such a wonderful service. When we experienced a sudden family death, we felt a variety of emotions.  It was a very difficult and sad time in our lives, a completely unusual experience for us, but your friendly and helping memorial service helped us to keep going. So glad as it was recommended by my friend and had created a memorial page. We received a lot of messages, condolences, and tributes which helped us to pick up mental strength and realize that all this was natural. You have been first class with love and kind regards.

                      </p>
                               
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption d-md-block">
                                <div class="test-image">
                                    <img src="{{ asset('theme/images/tbn_5aa1a6b801ba3-1loveBenPaNiiTaylor.jpg') }}" />
                                </div>
                                <h5>---Udal Bharti---</h5>
                                <p>
                          I would highly recommend Yaadbook for such a helpful service. From the moment I can across this website, I felt I was in good hands. I looked at all the arrangements on this site were very systematic from creating a memorial gallery to sending messages, tributes and sharing over social media with friends and relatives. I just recently lost my parents and found this website from an old friend of mine. I miss them very much but once I finish my work, I will be able to see them whenever I want and so will all the people. Thank you so much for this wonderful service.


                      </p>
                                
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption d-md-block">
                                <div class="test-image">
                                    <img src="{{ asset('theme/images/tbn_5aa48d9f2180c-041 (002).jpg') }}" />
                                </div>
                                 <h5>---Elizabeth Aquino---</h5>
                                 <p>
                          I just want to thank you for creating such an important website and I am so grateful to be able to share with our family members and friends pictures of my beloved father. This is one place I feel I am connected with him. Without your memorial program, I don't know how I could have dealt with the loss of my father. Your website allows all our loved one's memory to live on. This is a gift from God and your work is priceless.

                      </p>
                               
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption d-md-block">
                                <div class="test-image">
                                    <img src="{{ asset('theme/images/tbn_5aa551f7dda60-IMG-0752.jpg') }}" />
                                </div>
                                <h5>Michael U. Harrill</h5>
                                <p>
                          Can't tell you how much important your website is. I'm actually writing this to say "Thank you". Thank you for providing such a wonderful online memorial site in which I can pay tribute to our beloved ones. I was having a hard time with the loss of my husband so early in our marriage. This site lets me get my feelings and share the love we had!!! I can leave messages and share the same with my family members too. God's blessings to you all!!!!
---Laura Jackson
                      </p>
                                
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
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
    <script src="{{ asset('theme/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/bootstrap.min.js') }}" type="text/javascript"></script>
   
       <script type="text/javascript">
           $('#btnSubmit').click(function () {
                //alert("Coming");
                var val = validation();
                if (val == false) {
                    return;
                }
                var fname = document.getElementById("txtFName").value;
                var lname = document.getElementById("txtLName").value;
                var uname = document.getElementById("txtEmail").value;
                var pwd = document.getElementById("txtPwd").value;
                var utype = 2;
                var dt = new Date()
                var utcdiff = dt.getTimezoneOffset();//get the difference from utc time
                var tt = utcdiff.toString().replace('-', '');

                $('#form1').submit();
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
