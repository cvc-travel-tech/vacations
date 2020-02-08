@extends('Frontend.main')

@section('content')

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-154435778-1');
    </script>


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
        .package-title{
    padding: 0 15px 0 !important;
    font-size: 14px !important;
    line-height: 18px !important;
    min-height: 95px !important;
   
}
.bravo_wrap .page-template-content .bravo-list-tour .item-tour .item-title h6 {
    color:#777;
    font-size:16px;
    font-weight:500;
}
.bravo_wrap .page-template-content .bravo-list-tour .item-tour .info .duration  {
           width: 64%;
    float: left;
    align-items: center;
    color: #5e6d77;
    position: relative;
  top:0px;
}
}
    </style>
    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">


    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


    <!--Start of Tawk.to Script-->

    <!--End of Tawk.to Script-->
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
                color: #bbbaba;
            }

            .bravo_topbar .topbar-left .slogin {
                display: inline-block;
                font-weight: bolder;
                color: #d1d4da;
                font-size: 13px;
            }

            a.bravo-logo img {
                width: 166px !important;
            }
           .packages{
                height:350px;
            }
        </style>

        
 @if(\Session::has('success'))
        <script>
        toastr.success("{{ Session::get('success') }}");
        toastr.options.closeDuration = 500;
        toastr.options.closeEasing = 'swing';
        </script>
    @endif

        @include('Frontend.nav')

        
        <div class="page-template-content">
            <div class="bravo-form-search-tour"
                 style="background-image: url('{{ asset('storage/tmp/uploads/'.\App\Images::find($setting['site[mine-img]'])->file_path) }}' ) !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-heading text-center">Love where you&#039;re going</h1>
                            <div class="sub-heading text-center">Book incredible things to do around the world.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bravo-featured-item">
                <div class="container">
                    <div class="row">
                        @foreach($setting['site[features]'] as $value)
                            <div class="col-md-4">
                                <div class="featured-item">
                                    <div class="image">
                                        <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($value['icon'])->file_path) }}" width="80px" height="80px"
                                             class="img-responsive">

                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            {{ $value['tital'] }}
                                        </h4>
                                        <div class="desc">
                                            {{ $value['description'] }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bravo-list-locations">
                    <div class="title">
                        Top Destinations
                    </div>
                    <div class="list-item">
                        <div class="row">

                            @if(isset($destinations[0]))
                                <div class="col-lg-8">
                                    <div class="destination-item ">
                                        <a href="{{ url('destinations_details/'.$destinations[0]->id) }}">
                                            <div class="image"
                                                 style="background: url('storage/tmp/uploads/{{ $destinations[0]->tmpImg->file_path }}')">
                                                <div class="effect">

                                                </div>
                                                <div class="content">
                                                    <h4 class="title">{{ $destinations[0]->name }}</h4>
                                                    <div class="desc"
                                                         style="background: #ec991f;">{{ $destinations[0]->hotels_count }}
                                                        Hotels
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif

                            @foreach($destinations as $key => $value)
                                @if($key!=0)
                                    <div class="col-lg-4">
                                        <div class="destination-item ">
                                            <a href="{{ url('destinations_details/'.$value->id) }}">
                                                <div class="image"
                                                     style="background: url('storage/tmp/uploads/{{ $value->tmpImg->file_path }}')">
                                                    <div class="effect">

                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title">{{ $value->name }}</h4>
                                                        <div class="desc"
                                                             style="background: #ec991f;">{{ $value->hotels_count }}
                                                            Hotels
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>





            <div class="container">
                <div class="bravo-list-tour">
                    <div class="title">
                        Turkey Packages
                    </div>



                    <div class="list-item">
                        <div class="owl-carousel">


@foreach($Package as $pac)


                            <div class="item-tour packages">
                                <div class="thumb-image ">
                                    <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($pac['images'][0])->file_path) }}">
                                </div>
                                <div class="location">
                                </div>
                                <div class="item-title  package-title">
                                    <a href="{{ url('Package/'.$pac['slug']) }}">
                                        <h6>
                                        {{ $pac['name'] }}

                                        </h6>
                                    </a>


                                </div>

                                <div class="info">
                                    <div class="duration">
                                        <i class="icofont-wall-clock"></i> {{$pac['duration']}}
                                    </div>
                                    <div class="g-price">
                                        <div class="prefix">
                                            <!--<i class="icofont-flash"></i>-->
                                            <!--<span class="fr_text">from </span>-->
                                        </div>
                                        <div class="price">
                                            <span class="onsale"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

@endforeach

                        </div>
                    </div>
                </div>
            </div>





            
            <div class="container">
                <div class="bravo-list-tour">
                    <div class="title">
                        Hotels
                    </div>
                    <div class="list-item">
                        <div class="owl-carousel">

                            @foreach($hotels as $value)
                                <div class="item-tour ">
                                    <div class="thumb-image ">

                                        <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($value['images'][1])->file_path) }}">
                                
                                    </div>
                                    <div class="location">
                                        <i class="icofont-paper-plane">
                                            <p>Turkey</p>
                                        </i>
                                        
                                    </div>
                                    <div class="item-title">
                <a href="{{ url('hotel_ditails/'.$value['id']) }}">
                                        {{ $value->name }}
        </a>
                                    </div>
                                    <div class="service-review tour-review">
                                        <div class="list-star">
                                            <ul class="booking-item-rating-stars">
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <div class="booking-item-rating-stars-active" style="">
                                                <ul class="booking-item-rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>