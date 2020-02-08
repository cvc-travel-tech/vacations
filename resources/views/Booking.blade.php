<!DOCTYPE html>
<html lang="en" class="">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="w1XuYo8pQUNLhOdXlMegxKHODEb1l5wpFpKRtE2v">
    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png"/>

    <meta name="google-site-verification" content="cXQuYnA8XdF73KGgCE2FnWcYKDIMB-Cgny1cP6M-QCw"/>

    <title>Checkout </title>
    <meta name="description" content=""/>
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
   

 

    <link href="{{ asset('frontend/module/booking/css/checkout.css') }}" rel="stylesheet">

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
            width: 166px !important;
        }

        .bravo_wrap .bravo_topbar {
            height: auto !important;
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

        .label-acc {
            margin-left: 25px !important;
        }

        .rooms-select {
            margin-bottom: 15px;
        }

        .booking-review-content {
            position: fixed;
            background: white;
            z-index: 999;
        }
    </style>
    @include('Frontend.nav')

    <div style="display: none" class="clone_div">
        <div class="row">
            <div class="col-md-6 field-country">
                <div class="form-group">
                    <label> Gender </label>
                    <select name="gender[]" class="form-control" required>
                        <option value="">-- Select --</option>
                        <option value="Mr">Mr</option>
                        <option value="Mss">Mss</option>
                    </select>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label>First Name <span class="required">*</span></label>
                    <input type="text" placeholder="First Name"
                           class="form-control" required
                           value="" name="first_name[]">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Last Name <span class="required">*</span></label>
                    <input type="text" placeholder="Last Name"
                           class="form-control" required
                           value=""
                           name="last_name[]">
                </div>
            </div>




            <div class="col-md-6">
                <div class="form-group">
                    <label> CellPhone <span class="required">*</span></label>
                    <input type="text" placeholder="Your Phone"
                           class="form-control" required
                           value="" name="phone[]">
                </div>
            </div>

   

            <div class="col-md-6 field-city">
                <div class="form-group">
                    <label>Natinality </label>



            <select name="nationality[]" class="form-control" required>
                                                        <option value="">-- Select --</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Aland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua And Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia</option>
                                                        <option value="BA">Bosnia And Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="BN">Brunei Darussalam</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo</option>
                                                        <option value="CD">Congo, Democratic Republic</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">Cote D&#039;Ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island &amp; Mcdonald Islands</option>
                                                        <option value="VA">Holy See (Vatican City State)</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran, Islamic Republic Of</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle Of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KR">Korea</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Lao People&#039;s Democratic Republic
                                                        </option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libyan Arab Jamahiriya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
                                                        <option value="MK">Macedonia</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia, Federated States Of</option>
                                                        <option value="MD">Moldova</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="AN">Netherlands Antilles</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PS">Palestinian Territory, Occupied</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Reunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russian Federation</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="BL">Saint Barthelemy</option>
                                                        <option value="SH">Saint Helena</option>
                                                        <option value="KN">Saint Kitts And Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="MF">Saint Martin</option>
                                                        <option value="PM">Saint Pierre And Miquelon</option>
                                                        <option value="VC">Saint Vincent And Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">Sao Tome And Principe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia And Sandwich Isl.</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard And Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syrian Arab Republic</option>
                                                        <option value="TW">Taiwan</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad And Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks And Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US">United States</option>
                                                        <option value="UM">United States Outlying Islands</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VE">Venezuela</option>
                                                        <option value="VN">Viet Nam</option>
                                                        <option value="VG">Virgin Islands, British</option>
                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                        <option value="WF">Wallis And Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>




                           
                </div>
            </div>

    
        </div>
    </div>

    <div class="bravo-booking-page padding-content">
        <div class="container">
            <div id="bravo-checkout-page">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="form-title">Booking Submission</h3>
                        <form method="POST" action="{{route('front.booking.save')}}">
                            @csrf

                            <input type="hidden" name="package_id" value="{{$package->id}}">

                            <div class="booking-form">
                                <div class="form-checkout " id="form-checkout">
                                    <div class="form-section">

                                        <div class="row">

                                            <div class="col s6">
                                                <h6>Accommodation Details</h6>
                                                <hr>


                                                <div class="input-field ">
                                                    <select class="browser-default form-control rooms-select"
                                                            id="nrGames"
                                                            name="no_of_rooms" required>
                                                        <option value="" disabled selected>No of Rooms</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>

                                                    </select>
                                                </div>

                                                <div class="input-field " id="games">


                                                </div>



                                            </div>

                                            <div class="bedding col s6">
                                                <img src="images/bed1.jpg" width="300px" alt="">
                                            </div>

                                        </div>

                                        <div class="input-field col-lg-6">
                                                    <select class="browser-default form-control rooms-select"
                                                            id=""
                                                            name="chiled" >
                                                        <option value="" disabled selected>No of childern</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                    

                                                    </select>
                                        </div>


                                        <div class="col-sm-8">

                                            <h4>Optional Tours</h4>
                                            <div style="overflow-x:auto;">
                                                <table
                                                    class="table table-striped table-condensed dates-tabel table-bordered">

                                                    <tbody>
                                                    <tr>
                                                        <td>Tour Name</td>
                                                        <td>Price</td>
                                                        <td>Number of PAX
                                                        </td>
                                                    </tr>





                                                    @foreach($package->package_options as $value)
                                                        <tr>

                                                            <td>

                                                     <input name="package_options[]" multiple
                                                                       value="{{$value->id}}" type="checkbox"
                                                                       data-price="{{ $value->price }}"
                                                                       class="form-check-input package_options_class"

                                                                       id="chkPasspo" style="margin-top:1px">
                                                                <a href="#"
                                                                   style="margin-left:25px"> {{$value->name}}</a>

                                                            </td>
                                                            <td>${{$value->price}}</td>
                                                            <td>
                                                                <div class="input-field ">
                                                                    <select
                                                                        class="browser-default  form-control rooms-select no_of_pax"
                                                                        name="no_of_pax[]" multiple>
                                                                        {{--<option value="" disabled selected>No of PAX--}}
                                                                        {{--</option>--}}
                                                                        <option selected value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                    </select>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    @endforeach












                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        
                                        <div class="row">
            <div class="col-md-6 field-country">
                <div class="form-group">
                    <label>Tourguide Gender </label>
                    <select name="tourgander" class="form-control" required>
                        <option value="">-- Select --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 field-country">
                <div class="form-group">
                    <label>Tourguide Language </label>
                    <select name="tourlang" class="form-control" required>
                        <option value="">-- Select --</option>
                        <option value="English">English</option>
                        <option value="German">German</option>
                    </select>
                </div>
            </div>
    </div>
    <div class="row" >
<!--    <div class="col-sm-6">-->
<!--       <lable>Email</lable>-->

<!--<input name="mainemail" class="form-control" type="email" placeholder="Email">-->

<!--       </div>-->
<!--       <div class="col-sm-6">-->
<!--       <lable>Cell Phone</lable>-->

<!--<input name="mainphone" class="form-control" type="phone" placeholder="Cell Phone">-->

<!--       </div>-->
 
    </div>
  <!--<hr>-->
  <center>
 <h4> Passenger information</h4>
 </center>
  <hr>

                                        <div class="row">


                                            <div class="room_1">
                                            </div>

                                            <div class="room_2">

                                            </div>

                                            <div class="room_3">

                                            </div>

                                            <div class="room_4">

                                            </div>


                                        </div>
                                    </div>


                                    <div class="col-md-12"><label>Special Requirements </label> 
                                    <textarea name="customer_notes" cols="30" rows="6" placeholder="Special Requirements" class="form-control">
                                    </textarea></div>
                                  
                                  
                                    <div class="form-section">
                                        <h4 class="form-section-title">Select Payment Method</h4>
                                        <div class="gateways-table accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="mb-0">
                                                        <label class="" data-toggle="collapse"
                                                               data-target="#gateway_offline_payment">
                                                            <input type="radio" name="payment_method"
                                                                   value="1">
                                                            Payment upon Arrival
                                                        </label>
                                                    </h4>
                                                </div>
                                                <div id="gateway_offline_payment" class="collapse"
                                                     aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="gateway_name">
                                                            Offline Payment
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

<textarea name="x"   style="display:none;" class="val total_label"  hidden>

</textarea>
<input type="hidden" name="date_du" value="{{ $x }}" >

                                    <div class="form-group">
                                        <label class="term-conditions-checkbox">
                                            <input type="checkbox" name="term_conditions"> I have read and accept the <a
                                                target="_blank" href="{{ url('/about') }}">terms and
                                                conditions</a>
                                        </label>
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="html_before_actions"></div>

                                    <p class="alert-text mt10" v-show=" message.content" v-html="message.content"
                                       :class="{'danger':!message.type,'success':message.type}"></p>

                                    <div class="form-actions">
                                        <button class="btn btn-danger" @click="doCheckout">Submit
                                            <i class="fa fa-spin fa-spinner" v-show="onSubmit"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                    </div>

                    
                    <div class="col-md-4">
                        <div class="booking-detail">
                            <div class="booking-review">
                                <h4 class="booking-review-title">Your Booking</h4>
                                <div class="booking-review-content">
                                    <div class="review-section">
                                        <div class="service-info">
                                            <div>
                                                <h3 class="service-name"><a href="#">{{$package->name}}</a></h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="review-section">
                                        <ul class="review-list">
                                            <li>
                                                <div class="label"> Date:</div>
                                                <div class="val">
                                                    &nbsp;{{ $x }}
                                                </div>
                                            </li>
                                            <li>
                                                <div class="label">Duration:</div>
                                                <div class="val">
                                                    {{$package->duration}}
                                                </div>
                                            </li>
                                            <!--   <li>
                                                  <div class="label">Guests:</div>
                                                  <div class="val">
                                                      1
                                                  </div>
                                              </li> -->

                                        </ul>
                                    </div>

                                    <div class="review-section total-review">
                                        <ul class="review-list">
                                         
                                            <li class="final-total">
                                                <div class="label">Total:</div>
                                                 <div class="val total_label">$0</div> 


                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>



@include('Frontend.footer')

    <script src="{{ asset('frontend/module/booking/js/checkout.js') }}"></script>




    <script type="text/javascript">

var room_number = 0;
var total = 0;
var pax_total = 0;

var solo_price = '{{ $package_price->solo }}';
var p_p = '{{ $package_price->p_p }}';
var three_person = '{{ $package_price->three_person }}';
var sgl = '{{ $package_price->sgl }}';

// jQuery(function () {
//     $.ajax({
//         'url': bookingCore.url + '/booking/b8402bb9a01e4b021fbd627686dbe691/check-status',
//         'cache': false,
//         'type': 'GET',
//         success: function (data) {
//             if (data.redirect !== undefined && data.redirect) {
//                 window.location.href = data.redirect
//             }
//         }
//     });
// });

$(document).delegate('#nrGames', 'change', function () {
    room_number = $(this).val();
    var value = +$(this).val();
    var nr = 0;
    var elem = $("#games").empty();
    while (nr < value) {
        $('.room_1').html('');
        $('.room_t_1').html('');
        $('.room_2').html('');
        $('.room_3').html('');
        $('.room_4').html('');

        elem.append(
            $(
                '<select data-number="' + parseInt(nr + 1) + '" name="room_type[]" class="browser-default form-control rooms-select room_type ff' + parseInt(nr + 1) + '"> <option value="" disabled selected>Room Type</option><option value="1">Single</option><option value="2">Double 1 bed </option><option value="4">Double 1 bed +   CHD</option><option value="5">Twin 2 bed +   CHD</option><option value="6">Twin 2 bed </option><option value="3">Triple</option> </select>', {
                    name: "Team1Player" + nr
                }

            )

           
        );
        nr++;
    }
});

$(document).delegate('.room_type', 'change', function () {
    $('.room_' + $(this).data('number')).html('');
    for (var i = 0; i < $(this).val(); i++) {
        $('.room_' + $(this).data('number')).append($('.clone_div').html());
    }
    calculate();
});

function calculate() {
    total = 0;

    if (room_number == 1 && $('.ff1').val() == 1) {
        total = solo_price;
    } else {
        for (var i = 1; i < 5; i++) {
            f($('.ff' + i).val());
        }
    }

    $('.total_label').text('$ ' + (parseInt(total) + parseInt(pax_total)));
}

function f(val) {

    if (val > 0) {

        if (val == 1) {
            total = parseInt(sgl) + parseInt(total);
        } else if (val == 2) {
            total = parseInt(p_p) * 2 + parseInt(total);
        }
         else if (val == 4) {
            total = parseInt(p_p) * 2 + parseInt(total);
        }
         else if (val == 5) {
            total = parseInt(p_p) * 2 + parseInt(total);
        }

        else if (val == 6) {
            total = parseInt(p_p) * 2 + parseInt(total);
        }
        
        else {
            total = parseInt(three_person) * 3 + parseInt(total);
        }

    }
}

$('.package_options_class').change(function () {

    if (this.checked) {
        // pax_total = 0;
        // console.log($(this).closest('tr').find('.no_of_pax').val()[0])
        pax_total = parseInt(pax_total) + (parseInt($(this).data('price')) * parseInt($(this).closest('tr').find('.no_of_pax').val()[0]));
        $('.total_label').text('$ ' + (parseInt(total) + parseInt(pax_total)));

    } else {
        pax_total = parseInt(pax_total) - (parseInt($(this).data('price')) * parseInt($(this).closest('tr').find('.no_of_pax').val()[0]));
        $('.total_label').text('$ ' + (parseInt(total) + parseInt(pax_total)));

    }

});

$('.no_of_pax').change(function () {
    pax_total = 0;

    $('.package_options_class').each(function () {
        if (this.checked) {
            // pax_total = 0;
            // console.log($(this).closest('tr').find('.no_of_pax').val()[0])
            pax_total = parseInt(pax_total) + (parseInt($(this).data('price')) * parseInt($(this).closest('tr').find('.no_of_pax').val()[0]));
            $('.total_label').text('$ ' + (parseInt(total) + parseInt(pax_total)));

        }
    })
    

});


</script>

</div>
</body>

</html>
