<!DOCTYPE html>
<html lang="en" class="">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="EE5rATYx5t2ANAMJBt1T04D2IRTIl2xEFIqwBLE6">
    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png" style="width: 166px;"/>
    <meta name="google-site-verification" content="cXQuYnA8XdF73KGgCE2FnWcYKDIMB-Cgny1cP6M-QCw"/>

    <title>Tareek Al-Oufk</title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/daterange/daterangepicker.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css'
          href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600&display=swap' type='text/css'
          media='all'/>

    <!-- Styles -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154435778-1"></script>
    <script>
        var bookingCore = {
            
            booking_decimals: 0,
            thousand_separator: '.',
            decimal_separator: ',',
            currency_position: 'left',
            currency_symbol: '$',
            date_format: 'MM/DD/YYYY',
            map_provider: 'gmap',
            map_gmap_key: '',
        };
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-154435778-1');
       
    </script>

    <link href="{{ asset('frontend/module/tour/css/tour.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('frontend/libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/fotorama/fotorama.css') }}"/>

    <style id="custom-css">
        body {
            font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ;
        }

        a,
        .bravo-news .btn-readmore,
        .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li:hover > a,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .field-icon,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .render,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .field-detination #dropdown-destination .form-control,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .btn-apply-price-range,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .btn-more-item,
        .input-number-group i,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-icon,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-detination #dropdown-destination .form-control,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .render {
            color: #5191fa
        }

        .bravo-pagination ul li.active a,
        .bravo-pagination ul li.active span {
            color: #5191fa !important;
        }

        .bravo-news .widget_category ul li span,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .g-button-submit button,
        .bravo_wrap .bravo_search_tour .bravo_filter .filter-title:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-bar,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-handle > i:first-child,
        .bravo-news .header .cate ul li,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit button,
        .bravo_wrap .page-template-content .bravo-list-locations .list-item .destination-item .image .content .desc {
            background: #5191fa;
        }

        .bravo-pagination ul li.active a,
        .bravo-pagination ul li.active span {
            border-color: #5191fa !important;
        }

        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single:before,
        .bravo-reviews .review-form .form-wrapper,
        .bravo_wrap .bravo_detail_tour .bravo_content .bravo_tour_book {
            border-top-color: #5191fa;
        }

        .bravo_wrap .bravo_footer .main-footer .nav-footer .context .contact {
            border-left-color: #5191fa;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-detination {
            padding: 0 0 10px 0;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .form-date-search {
            padding: 0 0 10px 0;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit {
            min-height: 62px;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour {
            padding: 230px 0 !important;
        }

        .bravo_wrap .bravo_header .content .header-left {
            width: 100% !important;
        }

        .bravo_wrap .bravo_header .content .header-right {
            width: 0% !important;
        }

        a.bravo-logo img {
            width: 80px !important;
        }

        .bravo_wrap .bravo_topbar {
            height: auto !important;
        }

        .btn.btn-primary {
            background: #f18411;
        }

        .bravo_wrap .bravo_detail_tour .bravo_content .bravo_tour_book {
            border-top: 5px solid #f18411;
        }

        nav.tour_detailes > div a.nav-item.nav-link.active:after {
            border-top-color: #f18411;
        }

        .tab-content-tour {
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top: 5px solid #1a2b48;
            border-bottom: 5px solid #1a2b48;
            padding: 30px 25px !important;
        }

        nav.tour_detailes > div a.nav-item.nav-link:hover,
        nav.tour_detailes > div a.nav-item.nav-link:focus {
            border: none;
            background: #f7f7f7;
            color: #00010c;
            border-radius: 0;
        }

        a.bravo-logo img {
            width: 124px !important;
        }
    </style>
    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

</head>

<body class="">
<div class="bravo_wrap">

    <style>
        .bravo_wrap .bravo_header {
            background: #1a2b48;
            height: 34px;
        }

        .bravo_wrap .bravo_topbar {
            padding: 15px 0;
            color: #333;
            padding-left: 10px;
        }

        .bravo_wrap .bravo_topbar .content .topbar-right {
            font-size: 12px;
            margin-left: 10px;
            padding: 20px;
        }

        .bravo_wrap .bravo_header .content .header-left .bravo-menu {
            padding-left: 90px;
            /* color: #fff; */
        }

        .bravo_wrap .bravo_header .content {
            background: #1a2b48;
            display: flex;
            align-items: center;
            height: 32px;
            font-size: 12px;
            font-weight: 300;
            text-align: center;
            margin-left: 222px;
            color: #fff;
        }

        .bravo_wrap .bravo_topbar {
            background-color: #fff;
        }

        .bravo_wrap .bravo_topbar {
            padding: 15px 0;
            color: #333;
            padding-left: 10px;
            /* margin-left: 10px; */
            height: 78px;
        }

        .bravo_wrap .bravo_topbar .content .socials {
            display: inline-block;
            /* border-right: 1px solid #374969; */
        }

        .bravo_wrap .bravo_topbar .content .topbar-items li a {
            color: #666;
            font-weight: 400;
            font-size: 12px;
            text-decoration: none;
        }

        .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li a {
            padding: 35px 13px;
            display: inline-block;
            font-size: 12px;
            font-weight: 200;
            text-transform: uppercase;
            color: #fff;
            transition: all .3s;
        }

        .bravo_wrap .bravo_topbar .content .topbar-right {
            font-size: 12px;
            padding: 10px;
        }

        .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li > .menu-dropdown li a {
            padding: 15px 0;
            display: block;
            font-size: 14px;
            color: #888;
        }

        .bravo_topbar .topbar-left .slogin {
            display: inline-block;
            color: #d1d4da;
            font-size: 13px;
        }

        .bravo_wrap .bravo_footer .mailchimp .subcribe-form .btn-submit {
            background: #f18411;
        }
    </style>


    @include('Frontend.nav')

    <div class="bravo_detail_tour">

        <div class="bravo_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9">
                        <div class="g-header">
                            <div class="left">
                                <h2>{{$package->name}}</h2>
                            </div>


                            <div class="right">
                      
                            </div>


                        </div>
                        <!-- <div class="g-tour-feature">


                            <div class="row">
                            </div>
                        </div> -->
                        <div class="g-gallery">
                            <div class="fotorama" data-width="100%" data-thumbwidth="135" data-thumbheight="135"
                                 data-thumbmargin="15" data-nav="thumbs" data-allowfullscreen="true">
                                @foreach($package['package_images'] as $key => $value)
                                    <a href="">
                                        <img src="{{asset('storage/tmp/uploads/large').'/'.$value->file_path}}">
                                    </a>
                                @endforeach
                            </div>
                        </div>





 @if(\Session::has('success'))
        <script>
        toastr.success("{{ Session::get('success') }}");
        toastr.options.closeDuration = 500;
        toastr.options.closeEasing = 'swing';
        </script>
    @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 ">
                                    <nav class="tour_detailes">
                                        <div class="nav nav-tabs nav-fill " id="nav-tab" role="tablist">


                                            <a class="nav-item nav-link active" id="nav-overview-tab" data-toggle="tab"
                                               href="#nav-overview" role="tab" aria-controls="nav-overview"
                                               aria-selected="true" padding-left: 21px;>Overview</a>



                                            <a class="nav-item nav-link" id="nav-Itinerary-tab" data-toggle="tab"
                                               href="#nav-Itinerary" role="tab" aria-controls="nav-Itinerary"
                                               aria-selected="true">Itinerary</a>


                                         

                                               
                                            <a class="nav-item nav-link" id="nav-package_includes-tab" data-toggle="tab"
                                               href="#nav-package_includes" role="tab"
                                               aria-controls="nav-package_includes" aria-selected="true">Package
                                               Inclusion</a>


                                 
                                        </div>

                                    </nav>
                                    <div class="tab-content-tour py-3 px-3 px-sm-0" id="nav-tabContent">



                                        <div class="tab-pane fade show active" id="nav-overview" role="tabpanel"
                                             aria-labelledby="nav-overview-tab">
                                            <!DOCTYPE html>
                                            <html>

                                            <head>
                                            </head>

                                            <body>
                                            {!! $package->overview !!}
                                            </body>

                                            </html>
                                        </div>



                                        <div class="tab-pane fade" id="nav-Itinerary" role="tabpanel"
                                             aria-labelledby="nav-Itinerary-tab">
                                            {!! $package->itinerary !!}

                                        </div>


                                        <div class="tab-pane fade" id="nav-package_includes" role="tabpanel"
                                             aria-labelledby="nav-package_includes-tab">
                                            <!DOCTYPE html>
                                            {!! $package->inclusion !!}

                                        </div>


                                  

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                



<div class="col-lg-3  new  bravo_tour_book_wrap"  style="
    margin-top: 57px;
    text-align: center;
    background-color: #fff;
    height: 250px;
        border-top: 5px solid #f18411;
            box-shadow: 5px 10px 9px #aaaaaa;
"
">
<div>
<p class="price"  style="
    font-size: 20px;
    margin-top: 20px;
"></p>
<label style="font-size: 20px; font-weight: 500;">
@if(auth()->user() == true)
From $ 
{{ $package_price['p_p'] }}
@endif
</label>
<hr>
</div>


<form method="GET" action="{{  route('booking', $package->id ) }}" >

<input  class="form-control" type="date"  name="dbook" required>
<input  type="hidden" value="">
<input href="" class="btn btn-large  btn-primary" type="submit" value="BOOK NOW"  style="margin-top: 10px;">
</form>
    

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
                                            <img src="{{ asset('frontend/images/watercolor-football-clipart-2.png') }}" style="
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
                                    <form action="" class="subcribe-form  ">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control email-input" placeholder="Your Email">
                                            <button type="" class="btn-submit">Subscribe
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
                                                <img src="{{ asset('frontend/images/facebook.png') }}" style="width: 10%;">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/whatsapp.png') }}" style="width: 10%;">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/skype.png') }}" style="width:10%">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/twitter.png') }}" style="width:10%">
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
                                        istanbultours
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

                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('destinations') }}">Destinations</a></li>
                                        <li><a href="{{ url('Pack')  }}">Turkey Packages</a></li>
                                        <li><a href="{{ url('about') }}">About Us</a></li>
                                        <li><a href="{{ url('contact')  }}">Contact Us</a></li>
                                        <li><a href="{{ url('blog') }}">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>





            <div class="copy-right">
                <div class="container context">
                    <div class="row">
                        <div class="col-md-12">
                            <!DOCTYPE html>
                            <html>

                            <head>
                            </head>

                            <body>
                            <p>Copyright &copy; 2020 by Cvc travel.tech</p>
                            </body>

                            </html>
                            <div class="f-visa">
                                <!DOCTYPE html>
                                <html>

                                <head>
                                </head>

                                <body>

                                </body>

                                </html>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
        <script>
            var bravo_booking_data = {
                "id": 22,
                "person_types": [],
                "max": 0,
                "open_hours": [],
                "extra_price": [],
                "minDate": "01\/16\/2020"
            }
        </script>
        <script src="{{ asset('frontend/libs/jquery-3.3.1.min.js') }}">
        </script>
        <script src="{{ asset('frontend/libs/vue/vue.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/module/media/js/browser.js') }}"></script>
        <script src="{{ asset('frontend/libs/carousel-2/owl.carousel.min.js') }}"></script>
        <script type="{{ asset('frontend/text/javascript" src="libs/daterange/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/daterangepicker.min.js') }}"></script>
        <script src="{{ asset('frontend/js/functions.js') }}"></script>
        <script src="{{ asset('frontend/js/home.js') }}"></script>
        <script src="{{ asset('frontend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src='https://maps.googleapis.com/maps/api/js?key='></script>
        <script src="{{ asset('frontend/llibs/infobox.js') }}"></script>
        <script src="{{ asset('frontend/module/core/js/map-engine.js') }}"></script>
       
        <script type="text/javascript"
                src="{{ asset('frontend/libs/ion_rangeslider/js/ion.rangeSlider.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/fotorama/fotorama.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/sticky/jquery.sticky.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/module/tour/js/single-tour.js') }}"></script>
        
        
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        
    </div>
</body>

</html>
