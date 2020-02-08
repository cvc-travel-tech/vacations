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
            font-weight: bolder;
            color: #d1d4da;
            font-size: 13px;
        }
    </style>


    @include('Frontend.nav')


    <div class="page-template-content">
        <div class="container">
            <div class="bravo-list-locations">
                <div class="title">
                    Destinations
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
                                                <div class="effect"></div>
                                                <div class="content">
                                                    <h4 class="title">{{ $value->name }}</h4>
                                                    <div class="desc">{{ $value->hotels_count }} Hotels</div>
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
    </div>
    <div class="container " style="padding-top: 40px;padding-bottom: 40px;">
        <div class="blog-content">


        </div>
    </div>
    
@endsection
