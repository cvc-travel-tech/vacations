@extends('Frontend.main')

@section('content')

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154435778-1"></script>
  

    <link href="{{ asset('frontend/css/tour.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}" />

    <style id="custom-css">
        body {
            font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ;
        }
 
 .inf0 p {
     margin-top:12px;
 }
    </style>

    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

   
</head>

<body class="">
    <div class="bravo_wrap">


        @include('Frontend.nav')

     
        <div class="bravo_search_tour">
            <div class="bravo_banner">
                <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($destinations_details['img'])->file_path) }}" width="1900px" height="400px" alt="">
                <div class="container">
                    <h1>

                    </h1>
                </div>
            </div>

            <div class="container">


                <div class="content">
                    <div class="container">
                        <h3>{{ $destinations_details['name'] }} </h3>
                        {!!  $destinations_details['description'] !!}
                    </div>

                </div>


@foreach ($destinations_details->locations  ?? [] as  $value)

{{ $value['tital'] }} 
<h5 style="margin-left:16px;">Blue Mosque</h5>
          
                <div class="row">
                    <div class="col-md-3 img-info">
                       <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($value['tmp_img'])->file_path) }} "  width="230px" height="100px"  >
                    </div>
                    <div class="col-md-9 inf0">
             <p>  The Sultan Ahmed Mosque has one main dome, six minarets, and eight secondary domes. The design is the culmination of two centuries of Ottoman mosque development. It incorporates some Byzantine Christian elements of the neighboring Hagia Sophia with traditional Islamic architecture and is considered to be the last great mosque of the classical period.  </p>
                </div>
<!--{!! $value['description'] !!} -->

<!--<img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($value['tmp_img'])->file_path) }}" >-->
  
@endforeach 
                <div class="row">

                    <div class="col-lg-9 col-md-12">
                        <div class="bravo-list-item">
                            <div class="topbar-search">
                                <div class="text">
                                     Hotels For This destinations
                                </div>
                                <div class="control">

                                </div>
                            </div>


                            <div class="list-item">
                                <div class="row">


                     @foreach($hotels as $value)

                                    <div class="col-lg-4 col-md-6">
                                        <div class="item-tour ">
                                            <div class="thumb-image ">
                                                <a target="_blank" href="{{ url('hotel_ditails/'.$value['id']) }}">

                                                    <img class='img-responsive lazy' data-src="{{ asset('storage/tmp/uploads/'.\App\Images::find($value['images'][0])->file_path) }}" alt=''>
                                                </a>
                                            </div>
                                            <div class="location">
                                                <i class="icofont-paper-plane"></i> Istanbul
                                            </div>
                                            <div class="item-title">
                                                <a target="_blank" href="{{ url('hotel_ditails/'.$value['id']) }}">

                                                {{ $value['name'] }}
                                                </a>
                                            </div>
                                            <div class="service-review tour-review" style="padding: 10px 15px 15px !important;">
                                                <div class="list-star" style="display: inline-block !important;
    line-height: 13px !important;
    position: relative !important;">
                                                    <ul class="booking-item-rating-stars" style="    padding: 0;
    margin: 0;
    width: 170px;">
                                                      <li style="list-style: none;
    float: left;
    margin-right: 5px;"><i style="font-size: 15px;
    color: #ffdc00;
}"class="fa fa-star"></i></li>
                                                       <li style="list-style: none;
    float: left;
    margin-right: 5px;"><i style="font-size: 15px;
    color: #ffdc00;
}"class="fa fa-star"></i></li>
                                                        <li style="list-style: none;
    float: left;
    margin-right: 5px;"><i style="font-size: 15px;
    color: #ffdc00;
}"class="fa fa-star"></i></li>
                                                      <li style="list-style: none;
    float: left;
    margin-right: 5px;"></li>
                                                    </ul>
                                                    <div class="booking-item-rating-stars-active" style="">
                                                        <ul style="padding: 0;
    margin: 0;
    width: 170px;" class="booking-item-rating-stars">
<!--                                                            <li style="list-style: none;-->
<!--    float: left;-->
<!--    margin-right: 5px;"><i style="font-size: 15px;-->
<!--    color: #ffdc00;-->
<!--}"class="fa fa-star"></i></li>-->
<!--                                                           <li style="list-style: none;-->
<!--    float: left;-->
<!--    margin-right: 5px;"><i style="font-size: 15px;-->
<!--    color: #ffdc00;-->
<!--}"class="fa fa-star"></i></li>-->
<!--                                                            <li style="list-style: none;-->
<!--    float: left;-->
<!--    margin-right: 5px;"><i style="font-size: 15px;-->
<!--    color: #ffdc00;-->
<!--}"class="fa fa-star"></i></li>-->
 <li style="list-style: none;
    float: left;
    margin-right: 5px;"><i style="font-size: 15px;
    color: #ffdc00;
}"class="fa fa-star"></i></li>
                                                            <li style="list-style: none;
    float: left;
    margin-right: 5px;"><i style="font-size: 15px;
    color: #ffdc00;
}"class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>



@endforeach

                                </div>
                            </div>
                            <div class="bravo-pagination">

                                <!--<span class="count-string">Showing 1 - of Hotel</span>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection