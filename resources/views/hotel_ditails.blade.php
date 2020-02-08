<!DOCTYPE html>
<html lang="en" class="">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="EE5rATYx5t2ANAMJBt1T04D2IRTIl2xEFIqwBLE6">
    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png" />

    <meta name="google-site-verification" content="cXQuYnA8XdF73KGgCE2FnWcYKDIMB-Cgny1cP6M-QCw" />

    <title>Sofitel Taksim </title>


    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/season.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/daterange/daterangepicker.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css'
        href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600&display=swap' type='text/css'
        media='all' />
   
    <!-- Styles -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154435778-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-154435778-1');
    </script>

    <link href="{{ asset('frontend/module/tour/css/tour.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/fotorama/fotorama.css') }}" />

    <style id="custom-css">
        body {
            /* font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ; */
        }
    </style>
    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

</head>

<body class="">
    <div class="bravo_wrap">

        @include('Frontend.nav')

        <div class="bravo_detail_tour">
            <div class="bravo_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="g-header">
                                <div class="left">
                                    <h2> {{ $hotel_ditails['name'] }} </h2>
                                </div>





                            </div>
                            <div class="g-tour-feature">


                                <div class="row">
                                    <div class="col-xs-6 col-lg-3 col-md-6">
                                        <div class="item">
                                            <div class="icon">
                                                <i class="icofont-island-alt"></i>
                                            </div>
                                            <div class="info">
                                                <h4 class="name">Location</h4>
                                                <p class="value">
                                                    Istanbul
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="g-gallery">
                                <div class="fotorama" data-width="100%" data-thumbwidth="135" data-thumbheight="135"
                                    data-thumbmargin="15" data-nav="thumbs" data-allowfullscreen="true">
@foreach($hotel_ditails['images'] as $im)
<a href="#"><img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($im['0'])->file_path) }}"></a>                   
@endforeach

                                </div>
                            </div>



                            <div class="g-overview">
                                <h3>Overview</h3>
                                <div class="description">
                                    <!DOCTYPE html>
                                    <html>

                                    <head>
                                    </head>

                                    <body>
                                        <p class="MsoNormal"
                                            style="text-align: left; direction: ltr; unicode-bidi: embed;">
                                            {!!  $hotel_ditails['overview']   !!}
                                        </p>
                                    </body>

                                    </html>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
            <div class="bravo-more-book-mobile">
                <div class="container">
                    <div class="left">
                        <div class="g-price">
                            <div class="prefix">
                                <span class="fr_text">from</span>
                            </div>
                            <div class="price">
                                <span class="onsale"></span>
                                <span class="text-price"></span>
                            </div>
                        </div>

                    </div>
                    <div class="right">
                        <a class="btn btn-primary bravo-button-book-mobile">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bravo_footer">

            <div class="mailchimp">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                            <div class="row">
                                <div class="col-xs-12  col-md-12 col-lg-6">
                                    <div class="media ">
                                        <div class="media-left hidden-xs col-lg-3" style="
                /* width: 98px; */
            ">
                                            <img src="images/watercolor-football-clipart-2.png" style="
                width: 100%;
            ">
                                        </div>
                                        <div class="media-body">
                                            <div class="col-md-12">
                                                <h4 class="media-heading">Get Updates &amp; More</h4>
                                                <p>Thoughtful thoughts to your inbox</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-5 col-lg-6">
                                    <form action="newsletter/subscribe"
                                        class="subcribe-form bravo-subscribe-form bravo-form">
                                        <input type="hidden" name="_token"
                                            value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control email-input"
                                                placeholder="Your Email">
                                            <button type="submit" class="btn-submit">Subscribe
                                                <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                            </button>
                                        </div>
                                        <div class="form-mess"></div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    NEED HELP?
                                </div>
                                <div class="context">
                                    <div class="contact">
                                        <div class="c-title">
                                            Call Us
                                        </div>
                                        <div class="sub">
                                            +90 536 434 7663

                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Email for Us
                                        </div>
                                        <div class="sub">
                                            info@to-istanbultours.com

                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Follow Us
                                        </div>
                                        <div class="sub">
                                            <a href="#">
                                                <img src="images/facebook.png" style="width: 10%;">
                                            </a>
                                            <a href="#">
                                                <img src="images/whatsapp.png" style="width: 10%;">
                                            </a>
                                            <a href="#">
                                                <img src="images/skype.png" style="width:10%">
                                            </a>
                                            <a href="#">
                                                <img src="images/twitter.png" style="width:10%">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    Services
                                </div>
                                <div class="context">
                                    <div class="contact">
                                        <div class="c-title">
                                            Call Us
                                        </div>
                                        <div class="sub">
                                            +90 212 231 0069 (5ext)

                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Skype
                                        </div>
                                        <div class="sub">

                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Whats App
                                        </div>
                                        <div class="sub">
                                            +90 536 434 7663
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    SUPPORT
                                </div>
                                <div class="context">
                                    <ul>

                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="destinations.html">Destinations</a></li>
                                        <li><a href="tour.html">Turkey Packages</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
        </div>


        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content relative">
                    <div class="modal-header">
                        <h4 class="modal-title">Log In</h4>
                        <span class="c-pointer" data-dismiss="modal" aria-label="Close">
                            <i class="input-icon field-icon fa">
                                <img src="images/ico_close.svg" alt="close">
                            </i>
                        </span>
                    </div>
                    <div class="modal-body relative">
                        <form class="bravo-form-login" method="POST" action="login">
                            <input type="hidden" name="_token" value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" autocomplete="off"
                                    placeholder="Email address">
                                <i class="input-icon fa fa-envelope-o"></i>
                                <span class="invalid-feedback error error-email"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" autocomplete="off"
                                    placeholder="Password">
                                <i class="input-icon fa fa-lock"></i>
                                <span class="invalid-feedback error error-password"></span>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <label for="remember-me" class="mb0">
                                        <input type="checkbox" name="remember" id="remember-me" value="1"> Remember me
                                        <span class="checkmark fcheckbox"></span>
                                    </label>
                                    <a href="password/reset">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="error message-error invalid-feedback"></div>
                            <div class="form-group">
                                <button class="btn btn-primary form-submit" type="submit">
                                    Login
                                    <span class="spinner-grow spinner-grow-sm icon-loading" role="status"
                                        aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="c-grey font-medium f14 text-center"> Do not have an account? <a href=""
                                    data-target="#register" data-toggle="modal">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        

        <script type="text/x-template" id="file-item-template">
                    <div class="file-item" :class="fileClass(file)">
                        <div class="inner" :class="{active:selected.indexOf(file.id) !== -1 }" @click="selectFile(file)" :title="file.file_name">
                            <div class="file-thumb" v-if="viewType=='grid'" v-html="getFileThumb(file)">
                            </div>
                            <div class="file-name">file.file_name</div>
                            <span class="file-checked-status" v-show="selected.indexOf(file.id) !== -1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M186.301 339.893L96 249.461l-32 30.507L186.301 402 448 140.506 416 110z"/></svg>
                            </span>
                        </div>
                    </div>
                </script>




        <script src="{{ asset('frontend/libs/lazy-load/intersection-observer.js') }}"></script>
        <script async src="{{ asset('frontend/libs/lazy-load/lazyload.min.js') }}"></script>
        <script>
            // Set the options to make LazyLoad self-initialize
            window.lazyLoadOptions = {
                elements_selector: ".lazy",
                // ... more custom settings?
            };

            // Listen to the initialization event and get the instance of LazyLoad
            window.addEventListener('LazyLoad::Initialized', function (event) {
                window.lazyLoadInstance = event.detail.instance;
            }, false);


        </script>
        <script src="{{ asset('frontend/libs/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('frontend/libs/vue/vue.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/module/media/js/browser.js') }}"></script>
        <script src="{{ asset('frontend/libs/carousel-2/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/daterangepicker.min.js') }}"></script>
        <script src="{{ asset('frontend/js/functions.js') }}"></script>
        <script src="{{ asset('frontend/js/home.js') }}"></script>
        <script src="{{ asset('frontend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src='https://maps.googleapis.com/maps/api/js?key='></script>
        <script src="{{ asset('frontend/libs/infobox.js') }}"></script>
        <script src='module/core/js/map-engine.js'></script>
        <script>
            jQuery(function ($) {
            })
        </script>

        <script type="text/javascript" src="{{ asset('frontend/libs/ion_rangeslider/js/ion.rangeSlider.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/fotorama/fotorama.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/sticky/jquery.sticky.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/module/tour/js/single-tour.js') }}"></script>
    </div>
</body>

</html>