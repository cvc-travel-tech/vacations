<!DOCTYPE html>
<html lang="en" class="">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="dx09wqHz2p501bse26bgUn9DDCCddmJeYFolwobs">
    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png" />
    
    <meta name="google-site-verification" content="cXQuYnA8XdF73KGgCE2FnWcYKDIMB-Cgny1cP6M-QCw" />

    <title> Booking History</title>
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
        href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600&display=swap' type='text/css'>
  
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154435778-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-154435778-1');
    </script>

        <style type="text/css">
        .bravo_topbar, .bravo_header, .bravo_footer {
            display: none;
        }
        html, body, .bravo_wrap, .bravo_user_profile, .row-eq-height > .col-md-3 {
            min-height: 100vh !important;
        }
    </style>
    <link href="{{ asset('frontend/module/user/css/user.css') }}" rel="stylesheet">
    
    <style id="custom-css">
    body{
                                      font-family:;
                              color:;
                              font-size:;
                              line-height:;
                              font-weight:;
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
    .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .render
    {
        color:#5191fa
    }
    .bravo-pagination ul li.active a, .bravo-pagination ul li.active span
    {
        color:#5191fa!important;
    }
    .bravo-news .widget_category ul li span,
    .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .g-button-submit button,
    .bravo_wrap .bravo_search_tour .bravo_filter .filter-title:before,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-bar,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from, .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to, .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-handle>i:first-child,
    .bravo-news .header .cate ul li,
    .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit button,
    .bravo_wrap .page-template-content .bravo-list-locations .list-item .destination-item .image .content .desc
    {
        background: #5191fa;
    }
    .bravo-pagination ul li.active a, .bravo-pagination ul li.active span
    {
        border-color:#5191fa!important;
    }
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from:before, .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to:before, .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single:before,
    .bravo-reviews .review-form .form-wrapper,
    .bravo_wrap .bravo_detail_tour .bravo_content .bravo_tour_book
    {
        border-top-color:#5191fa;
    }

    .bravo_wrap .bravo_footer .main-footer .nav-footer .context .contact{
        border-left-color:#5191fa;
    }

    .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-detination {
    padding : 0 0 10px 0;    
}

.bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .form-date-search {
    padding : 0 0 10px 0;    

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
a.bravo-logo img{

    width: 80px !important; 

}

.bravo_wrap .bravo_topbar {

    height: auto !important;
}
.bravo_wrap .bravo_user_profile .booking-history-manager .tabbable .ht-nav-tabs li.active a {
    color: #fdb74c !important;
    border-bottom: 3px solid #fdb74c !important;
}
.bravo_wrap .bravo_user_profile .sidebar-user .logo .avatar-text {
    background: #ffffff;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    text-align: center;
    position: relative;
    font-size: 34px;
    top: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #1a2b47;
    margin-right: 103px;
}
</style>
    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

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




.bravo_wrap .bravo_topbar{


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

.bravo_topbar .topbar-left .slogin{
    display:inline-block;
}
</style>

<div class="bravo_topbar">
    <div class="container">
        <div class="content">
            <div class="topbar-left">

                                <a href="" class="bravo-logo">
                                                                    <img src="images/Najaf Logo (1).png" width="135"  alt="">
                                        


                </a>

        
                 <h6  class="slogin">  Your Luxury DMC in Turkey </h6>
            </div>

            <div>
                


            </div>
            <div class="topbar-right">

                           <div>
                
                                            <div class="st-list socials">
                                                    <a href="#" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                                                    <a href="#" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                                                    <a href="#" target="_blank">
                                <i class="fa fa-google-plus"></i>
                            </a>
                                            </div>
                                
                                    <ul class="topbar-items">
                        <li class="hidden-xs hidden-sm"><a href="mailto:info@to-istanbultours.com 
" target="">info@to-istanbultours.com 
</a>
                        </li>
                    </ul>
                                  <ul class="topbar-items">
                                            <li class="login-item dropdown">
                            <a href="#" data-toggle="dropdown" class="login">Hi, Abdullah abdel hamed
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu text-left">
                                <li><a href=""><i class="icon ion-md-construct"></i> My profile</a></li>

                                                                <li class="menu-hr">
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
    <i class="fa fa-sign-out"></i>
</a>



<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

                                          </li>
                            </ul>
                            <form id="logout-form-topbar" action="" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="dx09wqHz2p501bse26bgUn9DDCCddmJeYFolwobs">
                            </form>
                        </li>
                                </div>
              
                </ul>
            </div>
        </div>
    </div>
</div>
        <div class="bravo_header">
    <div class="container">
        <div class="content">
            <div class="header-left">

                <div class="bravo-menu">
                    <ul class="main-menu menu-generated"><li class=""><a  target="" href="index.html" >Home</a></li><li class="   "><a  target="" href="destinations.html" >Destinations <i class="fa fa-angle-down"></i></a><ul class="children-menu menu-dropdown"><li class=" "><a  target="" href="destination-details.html" >Istanbul</a></li><li class="  "><a  target="" href="destination-details.html" >Isanbul</a></li><li class="  "><a  target="" href="destination-details.html" >Istanbul</a></li><li class=" "></ul></li><li class="    "><a  target="" href="tour.html" >Turkey Packages</a></li><li class="  "><a  target="" href="about.html" >About Us</a></li><li class=""><a  target="" href="contact-us.html" >Contact Us</a></li></ul>                </div>
            </div>
            <div class="header-right">
                                <button class="bravo-more-menu">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="bravo-menu-mobile">
        <div class="user-profile">
            <div class="b-close"><i class="icofont-scroll-left"></i></div>
            <div class="avatar">
                                                                                <i class="icofont-user-alt-2"></i>
                                                </div>
            <ul>
                                    <li>
                        <a href="">
                            <i class="icofont-user-suited"></i> Hi, Abdullah abdel hamed
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="icon ion-md-construct"></i> My profile
                        </a>
                    </li>
                                        <li>
                        <a  href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                        <form id="logout-form" action="" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="dx09wqHz2p501bse26bgUn9DDCCddmJeYFolwobs">
                        </form>
                    </li>
                            </ul>
        </div>
        <div class="g-menu">
            <ul class="main-menu menu-generated"><li class=""><a  target="" href="index.html" >Home</a></li><li class="   "><a  target="" href="destinations.html" >Destinations <i class="fa fa-angle-down"></i></a><ul class="children-menu menu-dropdown"><li class=" "><a  target="" href="destination-details.html" >Istanbul</a></li><li class="  "><a  target="" href="destination-details.html" >Istanbul</a></li></ul></li><li class="    "><a  target="" href="tour.html" >Turkey Packages</a></li><li class="  "><a  target="" href="about.html" >About Us</a></li><li class=""><a  target="" href="contact-us.html" >Contact Us</a></li></ul>        </div>
    </div>
</div>            <div class="bravo_user_profile">
        <div class="container-fluid">
            <div class="row row-eq-height">
                <div class="col-md-3">
                    <div class="sidebar-user">
    <div class="bravo-close-menu-user"><i class="icofont-scroll-left"></i></div>
    <div class="logo">
                    <span class="avatar-text">       {{str_limit(strip_tags(auth()->user()->name),1)}}	</span>
            </div>
    <div class="user-profile-avatar">
        <div class="info-new">
            <h5>{{ auth()->user()->name }}</h5>
           
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="main-menu">
                     
                            <li class="active">
                    <a href="{{ url('my_profile/'. auth()->user()->id) }}">
                                                    <span class="icon text-center"><i class="fa fa-clock-o"></i></span>
                                                Booking History

                    </a>
                                                        </li>
                    </ul>
    </div>
    <div class="logout">
        <form id="logout-form" action="" method="POST" style="display: none;">
            <input type="hidden" name="_token" value="dx09wqHz2p501bse26bgUn9DDCCddmJeYFolwobs">
        </form>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Log Out
        </a>
    </div>
    <div class="logout">
        <a href="{{ url('/')  }}"><i class="fa fa-long-arrow-left"></i> Back to Homepage</a>
    </div>
</div>
                </div>
                <div class="col-md-9">
                    <div class="user-form-settings">
    <div class="breadcrumb-page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <!--<a href="">-->
                <!--    Home-->
                <!--</a>-->
                <i class="fa fa-angle-right"></i>
            </li>
            <li>&nbsp; Booking History </li>
        </ul>
        <div class="bravo-more-menu-user">
            <i class="icofont-settings"></i>
        </div>
    </div>
    <h5 class="title-bar no-border-bottom">
        Booking Details For File Number : {{ $Booking_D->id }}
    </h5>
    
        <div class="booking-history-manager">
        <!--<div class="tabbable">-->
        <!--    <ul class="nav nav-tabs ht-nav-tabs">-->
        <!--                        <li class=" active ">-->
        <!--            <a href="user/booking-history">All Booking</a>-->
        <!--        </li>-->
        <!--                </li>-->
        <!--                                        </ul>-->
                            <!--No Booking History-->
        <!--            </div>-->
        <div class="accomidation_details">
        <h6 style="color:#ec991f;">Accomadition</h6>
         @foreach($booking_acoms as $acoms)
<ul>
    <li>{{$acoms->d_from}} / {{$acoms->d_to}} /{{$acoms->hotel}} /{{$acoms->location}} / {{$acoms->notes}}</li>
 
</ul>@endforeach
        </div>
     
    </div>
    <div class="booking-history-manager">
        <!--<div class="tabbable">-->
        <!--    <ul class="nav nav-tabs ht-nav-tabs">-->
        <!--                        <li class=" active ">-->
        <!--            <a href="user/booking-history">All Booking</a>-->
        <!--        </li>-->
        <!--                </li>-->
        <!--                                        </ul>-->
                            <!--No Booking History-->
        <!--            </div>-->
        <div class="accomidation_details">
        <h6 style="color:#ec991f;">Optional Tours</h6>
    <ul>
     @foreach($data->booking_package_options as $key => $value)
         <li>{{$value->package_option->name}} / {{$value->no_of_pax}}  /  {{$value->price}}</li>
  
                                @endforeach
        </ul>
        </div>
        
                    
    </div>
        <!--<div class="tabbable">-->
        <!--    <ul class="nav nav-tabs ht-nav-tabs">-->
        <!--                        <li class=" active ">-->
        <!--            <a href="user/booking-history">All Booking</a>-->
        <!--        </li>-->
        <!--                </li>-->
        <!--                                        </ul>-->
                            <!--No Booking History-->
        <!--            </div>-->

    <div class="booking-history-manager">
        <!--<div class="tabbable">-->
        <!--    <ul class="nav nav-tabs ht-nav-tabs">-->
        <!--                        <li class=" active ">-->
        <!--            <a href="user/booking-history">All Booking</a>-->
        <!--        </li>-->
        <!--                </li>-->
        <!--                                        </ul>-->
                            <!--No Booking History-->
        <!--            </div>-->
         <h6 style="color:#ec991f;">Transfers : </h6>
 <div>
<ul>
        
 <div>
<ul>
    

@if($booking_Trans != '')
 @foreach($booking_Trans as $value)



<li>{{$value['date_t'] ." " ." ". $value['type'] ." from " .  $value['from_t']  ." " . " to " . $value['to_t'] .", via " . $value['arrive_via'] . " at " . $value['arrive_at']    }}</li>

@endforeach

@else

<p>No Transfers is added</p>

@endif
<div class="accomidation_details" style="margin-top:20px;">
        <h6 style="color:#ec991f;">booking_complimentary</h6>
        </div>
        @foreach($comp as $c)
<ul>
    <li>{{$c->name_c}} /{{$c->description_c}}</li>
</ul>@endforeach
</div>

         <div class="accomidation_details"  style="margin-top:20px;">
        <h6 style="color:#ec991f;">Room Types</h6>
        <ul>
            
        @foreach($roomdata as $room)
        
          <li>
               @if($room->room_type ==1)
                single
              @elseif($room->room_type ==2)
                 double
                 @elseif($room->room_type ==3)
                 triple
              @endif
              
          </li>
        
                  Passinger information : 
        
        <br>
        
@foreach($roomdata as $room)
        
 
              Name: {{$room->first_name}} {{$room->last_name}}  ' | ' {{$room->phone}} ' | '  {{$room->nationality}} ' | '  {{$room->gender}}
              <br>
          
@endforeach

        @endforeach
<hr>


        </ul>
        </div>
        <div class="accomidation_details" style="margin-top:20px;">
        <h6 style="color:#ec991f;">special_requirements</h6>
        </div>
        {{ $Booking_D->special_requirements }}

    
</div>
 </ul>
 </div>
                    
    </div>
</div>                </div>
            </div>
        </div>
    </div>
        <div class="bravo_footer">
    <div class="mailchimp">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-xs-12  col-md-7 col-lg-6">
                            <div class="media ">
                                <div class="media-left hidden-xs">
                                    <i class="icofont-hill"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Get Updates &amp; More</h4>
                                    <p>Thoughtful thoughts to your inbox</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5 col-lg-6">
                            <form action="newsletter/subscribe" class="subcribe-form bravo-subscribe-form bravo-form">
                                <input type="hidden" name="_token" value="dx09wqHz2p501bse26bgUn9DDCCddmJeYFolwobs">                                <div class="form-group">
                                    <input type="text" name="email" class="form-control email-input" placeholder="Your Email">
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
                <img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_facebook_footer.png">
            </a>
            <a href="#">
                <img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_twitter_footer.png">
            </a>
            <a href="#">
                <img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_instagram_footer.png">
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
    
    
    <li><a href="destinations.html">Destinations</a></li>
    <li><a href="tour.html">Turkey Packages</a></li>
<li><a href="about.html">About Us</a></li>
    <li><a href="contact-us.html">Contact Us</a></li>
    <li><a href="blogo.html">Blog</a></li>
</ul>
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
<p>Copyright &copy; 2020 by Tech Center</p>
</body>
</html>
                    <div class="f-visa">
                        <!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
TAREEK AL OFUK

</p>
</body>
</html>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>














<script src="{{ asset('frontend/libs/lazy-load/intersection-observer.js')  }}"></script>
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

    <script type="text/javascript" src="{{ asset('frontend/module/user/js/user.js') }}"></script>
    </div>
</body>
</html>
