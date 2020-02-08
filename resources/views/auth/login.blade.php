<!DOCTYPE html>
<html lang="en" class="">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">

    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png" />

    <meta name="google-site-verification" content="cXQuYnA8XdF73KGgCE2FnWcYKDIMB-Cgny1cP6M-QCw" />

    <title>Login</title>
    <meta name="description" content="" />
    <link href="{{  asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{  asset('frontend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{  asset('frontend/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{  asset('frontend/libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{  asset('frontend/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{  asset('frontend/libs/daterange/daterangepicker.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css' href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600&display=swap' type='text/css' media='all' />
    <link href="{{  asset('frontend/css/loginn.css') }}" rel="stylesheet">

    <!-- Styles -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154435778-1"></script>
 

    <link href="{{  asset('frontend/css/contact.css') }}" rel="stylesheet">

    <style id="custom-css">
        body {
            /* font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ; */
        }
        
        .bravo_topbar .topbar-left .slogin {
            display: inline-block;
            font-weight: bolder;
            color: #d1d4da;
            font-size: 13px;
        }
    </style>
    <link href="{{  asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

  
</head>

<body class="">
    <div class="bravo_wrap">

    @include('Frontend.nav')
    <div class="form-wrap">
<div class="login-login">
    <h1 style="font-size: 2.5rem;text-align:center;"> Login </h1>
    </div>


			<div id="login-tab-content">
				<form class="login-form" method="POST" action="">
                @csrf
                    <div class="row">


                        <div class="col-md-12">
                            <input id="email"  type="email" name="email" class="input form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required  autocomplete="off" placeholder="Email">
                     
                         
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="col-md-12">
                            <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror"  name="password" required  autocomplete="off" placeholder="Password">
                           
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      
                      
                        </div>



                    </div>
					
					<input type="checkbox" class="checkbox" id="remember_me">
				
                    <div class="col-md-6">
                        <input type="submit" class="button login" value="Login">
                                              <a href="{{url('register')}}" class="text-center">Join Us Now</a>

                    </div>
				</form><!--.login-form-->
				<div class="help-text">
				
				</div><!--.help-text-->
			</div><!--.login-tab-content-->
		</div><!--.tabs-content-->
	</div><!--.form-wrap-->
      








        <!--<div class="bravo_footer">-->
        <!--    <div class="mailchimp">-->
        <!--        <div class="container">-->
        <!--            <div class="row">-->
        <!--                <div class="col-xs-12 col-lg-10 col-lg-offset-1">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-xs-12  col-md-12 col-lg-6">-->
        <!--                            <div class="media ">-->
        <!--                                <div class="media-left hidden-xs col-lg-3" style="-->
        <!--        /* width: 98px; */-->
        <!--    ">-->
        <!--                                    <img src="images/watercolor-football-clipart-2.png" style="-->
        <!--        width: 100%;-->
        <!--    ">-->
        <!--                                </div>-->
        <!--                                <div class="media-body">-->
        <!--                                    <div class="col-md-12">-->
        <!--                                        <h4 class="media-heading">Get Updates &amp; More</h4>-->
        <!--                                        <p>Thoughtful thoughts to your inbox</p>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-xs-12 col-md-5 col-lg-6">-->
        <!--                            <form action="http://cvc.vacations/newsletter/subscribe" class="subcribe-form bravo-subscribe-form bravo-form">-->
        <!--                                <input type="hidden" name="_token" value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">-->
        <!--                                <div class="form-group">-->
        <!--                                    <input type="text" name="email" class="form-control email-input" placeholder="Your Email">-->
        <!--                                    <button type="submit" class="btn-submit">Subscribe-->
        <!--                                        <i class="fa fa-spinner fa-pulse fa-fw"></i>-->
        <!--                                    </button>-->
        <!--                                </div>-->
        <!--                                <div class="form-mess"></div>-->
        <!--                            </form>-->

        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="main-footer">-->
        <!--        <div class="container">-->
        <!--            <div class="row">-->
        <!--                <div class="col-lg-4 col-md-6">-->
        <!--                    <div class="nav-footer">-->
        <!--                        <div class="title">-->
        <!--                            NEED HELP?-->
        <!--                        </div>-->
        <!--                        <div class="context">-->
        <!--                            <div class="contact">-->
        <!--                                <div class="c-title">-->
        <!--                                    Call Us-->
        <!--                                </div>-->
        <!--                                <div class="sub">-->
        <!--                                    +90 536 434 7663-->

        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="contact">-->
        <!--                                <div class="c-title">-->
        <!--                                    Email for Us-->
        <!--                                </div>-->
        <!--                                <div class="sub">-->
        <!--                                    info@to-istanbultours.com-->

        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="contact">-->
        <!--                                <div class="c-title">-->
        <!--                                    Follow Us-->
        <!--                                </div>-->
        <!--                                <div class="sub">-->
        <!--                                    <a href="#">-->
        <!--                                        <img src="images/facebook.png" style="width: 10%;">-->
        <!--                                    </a>-->
        <!--                                    <a href="#">-->
        <!--                                        <img src="images/whatsapp.png" style="width: 10%;">-->
        <!--                                    </a>-->
        <!--                                    <a href="#">-->
        <!--                                        <img src="images/skype.png" style="width:10%">-->
        <!--                                    </a>-->
        <!--                                    <a href="#">-->
        <!--                                        <img src="images/twitter.png" style="width:10%">-->
        <!--                                    </a>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-lg-4 col-md-6">-->
        <!--                    <div class="nav-footer">-->
        <!--                        <div class="title">-->
        <!--                            Services-->
        <!--                        </div>-->
        <!--                        <div class="context">-->
        <!--                            <div class="contact">-->
        <!--                                <div class="c-title">-->
        <!--                                    Call Us-->
        <!--                                </div>-->
        <!--                                <div class="sub">-->
        <!--                                    +90 212 231 0069 (5ext)-->

        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="contact">-->
        <!--                                <div class="c-title">-->
        <!--                                    Skype-->
        <!--                                </div>-->
        <!--                                <div class="sub">-->

        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="contact">-->
        <!--                                <div class="c-title">-->
        <!--                                    Whats App-->
        <!--                                </div>-->
        <!--                                <div class="sub">-->
        <!--                                    +90 536 434 7663-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-lg-4 col-md-6">-->
        <!--                    <div class="nav-footer">-->
        <!--                        <div class="title">-->
        <!--                            SUPPORT-->
        <!--                        </div>-->
        <!--                        <div class="context">-->
        <!--                            <ul>-->

        <!--                                <li><a href="index.html">Home</a></li>-->
        <!--                                <li><a href="destinations.html">Destinations</a></li>-->
        <!--                                <li><a href="tour.html">Turkey Packages</a></li>-->
        <!--                                <li><a href="about.html">About Us</a></li>-->
        <!--                                <li><a href="contact-us.html">Contact Us</a></li>-->
        <!--                                <li><a href="#">Blog</a></li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="copy-right">-->
        <!--        <div class="container context">-->
        <!--            <div class="row">-->
        <!--                <div class="col-md-12">-->
        <!--                    <!DOCTYPE html>-->
        <!--                    <html>-->

        <!--                    <head>-->
        <!--                    </head>-->

        <!--                    <body>-->
        <!--                        <p>Copyright &copy; 2020 cvctravel.tech</p>-->
        <!--                    </body>-->

        <!--                    </html>-->
        <!--                    <div class="f-visa">-->
        <!--                        <!DOCTYPE html>-->
        <!--                        <html>-->

        <!--                        <head>-->
        <!--                        </head>-->

        <!--                        <body>-->
        <!--                            <p>TAREEK AL OFUK</p>-->
        <!--                        </body>-->

        <!--                        </html>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

      


        <script src="{{  asset('frontend/libs/lazy-load/intersection-observer.js') }}"></script>
        <script async src="{{  asset('frontend/libs/lazy-load/lazyload.min.js') }}"></script>
        <script>
            // Set the options to make LazyLoad self-initialize
            window.lazyLoadOptions = {
                elements_selector: ".lazy",
                // ... more custom settings?
            };

            // Listen to the initialization event and get the instance of LazyLoad
            window.addEventListener('LazyLoad::Initialized', function(event) {
                window.lazyLoadInstance = event.detail.instance;
            }, false);
        </script>
        <script src="{{  asset('frontend/libs/jquery-3.3.1.min.js') }}"></script>
        <script src="{{  asset('frontend/libs/vue/vue.js') }}"></script>
        <script src="{{  asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{  asset('frontend/module/media/js/browser.js') }}"></script>
        <script src="{{  asset('frontend/libs/carousel-2/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{  asset('frontend/libs/daterange/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{  asset('frontend/libs/daterange/daterangepicker.min.js') }}"></script>
        <script src="{{  asset('frontend/js/functions.js') }}"></script>
        <script src="{{  asset('frontend/js/home.js') }}"></script>
        <script src="{{  asset('frontend/js/bootstrap.bundle.min.js') }}"></script>




    </div>
    <script>
        jQuery(document).ready(function($) {
	tab = $('.tabs h3 a');

	tab.on('click', function(event) {
		event.preventDefault();
		tab.removeClass('active');
		$(this).addClass('active');

		tab_content = $(this).attr('href');
		$('div[id$="tab-content"]').removeClass('active');
		$(tab_content).addClass('active');
	});
});
    </script>
</body>

</html>