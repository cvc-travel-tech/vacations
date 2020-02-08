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
    <link href="{{  asset('Frontend/css/loginn.css') }}" rel="stylesheet">

    <!-- Styles -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154435778-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-154435778-1');
    </script>

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
          @import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300);

  * {
      margin: 0;
      padding: 0;
  }

  a {
      color: #666;
      text-decoration: none;
  }

  a:hover {
      color: #4FDA8C;
  }

  input {
      font: 16px/26px "Raleway", sans-serif;
  }

  body {
      color: #666;
      background-color: #f1f2f2;
      font: 16px/26px "Raleway", sans-serif;
  }

  .form-wrap {
      background-color: #fff;
      width: 800px;
      margin: 3em auto;
      box-shadow: 0px 1px 8px #BEBEBE;
      -webkit-box-shadow: 0px 1px 8px #BEBEBE;
      -moz-box-shadow: 0px 1px 8px #BEBEBE;
      padding:40px;
  }
  
  .form-wrap .tabs {
      overflow: hidden;
  }

  .form-wrap .tabs h3 {
      float: left;
      width: 50%;
  }

  .form-wrap .tabs h3 a {
      padding: 0.5em 0;
      text-align: center;
      font-weight: 400;
      background-color: #e6e7e8;
      display: block;
      color: #666;
  }

  .form-wrap .tabs h3 a.active {
      background-color: #fff;
  }

  .form-wrap .tabs-content {
      padding: 1.5em;
  }

  .form-wrap .tabs-content div[id$="tab-content"] {
      display: none;
  }

  .form-wrap .tabs-content .active {
      display: block !important;
  }

  .form-wrap form .input {
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      color: inherit;
      font-family: inherit;
      padding: 10px;
      border: 1px solid #CFCFCF;
      outline: 0;
      display: inline-block;
      margin: 12px;
      padding-right: 2em;
      width: 95%;
      
  }

  .label-remember {
      margin-left: 40px;
      margin-top: 0px;
      margin-bottom:17px;
  }

  .form-wrap form .button {
      width: 50%;
      padding: .8em 0 10px .8em;
      background-color: #fdaa2a;
      border: none;
      color: #fff;
      cursor: pointer;
      text-transform: uppercase;

  }

  .form-wrap form .signup {

      margin-left: 150px;
      margin-top: 20px;

  }

  .form-wrap form .login {
      margin-left: 188px;
      width: 75%;
  }

  .form-wrap form .button:hover {
      background-color: #fff;
      border: 1px solid #fdaa2a;
      color: #fdaa2a;
  }


  .form-wrap form .checkbox {
      visibility: hidden;
      padding: 20px;
      margin: .5em 0 1.5em;
  }

  .form-wrap form .checkbox:checked+label:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1;
  }

  .form-wrap form label[for] {
      position: relative;
      padding-left: 20px;
      cursor: pointer;
  }

  .form-wrap form label[for]:before {
      content: '';
      position: absolute;
      border: 1px solid #CFCFCF;
      width: 17px;
      height: 17px;
      top: 0px;
      left: -14px;
  }

  .form-wrap form label[for]:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
      content: '';
      position: absolute;
      width: 9px;
      height: 5px;
      background-color: transparent;
      top: 4px;
      left: -10px;
      border: 3px solid #28A55F;
      border-top: none;
      border-right: none;
      -webkit-transform: rotate(-45deg);
      -moz-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      transform: rotate(-45deg);
  }

  .form-wrap .help-text {
      margin-top: .6em;
  }

  .form-wrap .help-text p {
      text-align: center;
      font-size: 14px;
      padding: 0px 5px 0 0px;
  }




  .dropbtn {
      background-color: #fdb74c;
      color: white;
      padding: 6px 5px 22px 10px;
      font-size: 12px;
      border: none;
      border-radius: 5%;
      height: 40px;
      width: 90px;
  }

  .dropdown {
      position: relative;
      display: inline-block;
      text-align: center;
  }

  .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 100px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
  }

  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }

  .dropdown-content a:hover {
      background-color: #ddd;
  }

  .dropdown:hover .dropdown-content {
      display: block;
  }

  .dropdown:hover .dropbtn {
      background-color: #fff;
      color: #fdaa2a;
      border: 1px solid #fdaa2a;
  }
    </style>
    <link href="{{  asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

  
</head>

<body class="">
    <div class="bravo_wrap">


    @include('Frontend.nav')

        
        
        
        
        <div class="form-wrap">
		



        <div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <h1 class="panel-heading" style="margin-bottom:10px; text-align:center">Register</h1>

                <div class="panel-body">



                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                    <div class="row">

                <div class="col-md-12">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus  placeholder="Company Name" style="width:690px">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
</div>


 <div class="col-md-12">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required style="width:690px">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

</div>



 <div class="col-md-12">

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">

                                <input placeholder="call phone" id="phone" type="phone" class="form-control" name="phone" value="{{ old('phone') }}" required style="width:690px">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                        </div>

</div>



<div class="col-md-6">

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input placeholder="Comapny URL" id="url" type="url" class="form-control" name="url" required>

                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
</div>





<div class="col-md-6">


                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">

                             <input placeholder="City" id="city" type="text" class="form-control" name="city" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
</div>




<div class="col-md-6">


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
</div>



<div class="col-md-6">

                        <div class="form-group">

                                <input placeholder="Comfirm-Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                           
 </div>



                        <div class="form-group">
                                <button type="submit" class="btn btn-primary" style="background-color:#fca012; margin-left: 255px; width:200px; margin-top:20px">
                                    Register
                                </button>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>

      


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