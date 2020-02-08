@extends('Frontend.main')

@section('content')<!DOCTYPE html>


    <title>Discover The Best Turkey Tour - Tareek Al-Ofuk</title>


    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/daterange/daterangepicker.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css' href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600&display=swap' type='text/css' media='all' />
    
    <!-- Styles -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154435778-1"></script>
   
    <link href="{{ asset('frontend/module/tour/css/tour.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}" />

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
        .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li:hover>a,
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
            color: #5191fa!important;
        }
        
        .bravo-news .widget_category ul li span,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .g-button-submit button,
        .bravo_wrap .bravo_search_tour .bravo_filter .filter-title:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-bar,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-handle>i:first-child,
        .bravo-news .header .cate ul li,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit button,
        .bravo_wrap .page-template-content .bravo-list-locations .list-item .destination-item .image .content .desc {
            background: #5191fa;
        }
        
        .bravo-pagination ul li.active a,
        .bravo-pagination ul li.active span {
            border-color: #5191fa!important;
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
        
        .bravo_wrap .bravo_search_tour .bravo_banner h1 {
            text-align: center;
        }
        
        .bravo_wrap .bravo_footer .mailchimp .subcribe-form .btn-submit {
            background-color: #f18411;
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
            
            .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li>.menu-dropdown li a {
                padding: 15px 0;
                display: block;
                font-size: 14px;
                color: #888;
            }
            
            .bravo_topbar .topbar-left .slogin {
                display: inline-block;
                font-weight: bolder;
                color: #d1d4da;
                font-size: 13px;
            }
            
            .content-tour {
                padding-top: 40px;
                padding-bottom: 30px;
            }
            
            a.bravo-logo img {
                width: 166px !important;
            }
                 .package-title{
    padding: 0 15px 0 !important;
    font-size: 14px !important;
    line-height: 18px !important;
    min-height: 70px !important;
        </style>
    @include('Frontend.nav')

 


        <div class="bravo_search_tour">
            <div class="bravo_banner" style="background-image: url({{ asset('frontend/images/636615511596718861LA.jpg')}});padding:200px 0 ;">
                <div class="container">
                    <h1>
                        <!-- Discover The Best istanbul Tour -->
                    </h1>
                </div>
            </div>

            <div class="container">
                <div class="content-tour">
                    <h1 style="text-align: center;">The Best istanbul Tour</h1>
                </div>
                <div class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="bravo-list-item">
                            <div class="topbar-search">
                                <div class="text">
                                </div>
                                <div class="control">

                                </div>
                            </div>
                            <div class="list-item">
                                <div class="row">


                




                               
                                @foreach($Package as $pac)


                                    <div class="col-lg-4 col-md-6">
                                        <div class="item-tour" style="height:390px">
                                            <div class="thumb-image ">
                                                <a target="_blank" href="{{ url('Package/'.$pac['slug']) }}">
                                                    <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($pac['images'][0])->file_path) }}">
                                                </a>

                                            </div>
                                            <div class="location">
                                            </div>
                                            <div class="item-title package-title">
                                                <a target="_blank" href="{{ url('Package/'.$pac['slug']) }}">
                                                    <h4 style="font-size: 16px; color:#777;font-weight:100">
                                                    {{ $pac['name'] }}
                                                    </h4>
                                                </a>


                                            </div>

                                            <div class="info">
                                                <div class="duration">
                                                    <i class="icofont-wall-clock"></i> Day
                                                </div>
                                                <div class="g-price">
                                                    <div class="prefix">
                                                        <!--<i class="icofont-flash"></i>-->
                                                        <!--<span class="fr_text">from</span>-->
                                                    </div>
                                                    <div class="price">
                                                        <span class="onsale"></span>
                                                        <!--<span class="text-price">$ 0</span>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach





                                </div>
                            </div>
</div>
</div>
      @endsection
      