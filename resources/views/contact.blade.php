           @include('Frontend.head')


    <link href="{{ asset('frontend/css/contact.css') }}" rel="stylesheet">

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
    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

   
</head>

<body class="">
    <div class="bravo_wrap">


           @include('Frontend.nav')

        
        
        <div id="bravo_content-wrapper">
            <div class="bravo_content">
                <div class="container">
                    <div class="row section">
                        <div class="col-md-5">
                            <div role="form" class="form_wrapper" lang="en-US" dir="ltr">
                                <form method="post" action="{{Route('contact')}}" class="bookcore-form">
    @csrf
                                    <div style="display: none;">
                                        <input type="hidden" name="g-recaptcha-response" value="">
                                    </div>
                                    <div class="contact-form">
                                        <div class="contact-header">
                                            <h3>We&#039;d love to hear from you </h3>
                                            <p>Send us a message and we&#039;ll respond as soon as possible </p>

                                        </div>

                                        <div class="contact-form">
                                            <div class="form-group">
                                                <input type="text" value="" placeholder=" Name " name="name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" value="" placeholder="Email" name="email" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <textarea name="body" cols="40" rows="10" class="form-control textarea" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group">

                                            </div>
                                            <p><input type="submit" value="SEND MESSAGE" class="form-control submit btn btn-primary send-btn"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="offset-md-2 col-md-5">
                            <div class="contact-info">
                                <div class="info-bg">

                                    <img src="{{ asset('frontend/images/contact.jpg') }}" class="img-responsive" alt="Background Contact Info">
                                </div>
                                <div class="info-content">
                                    <h3>TAREEK AL OFUK</h3>
                                    <div class="sub">
                                        <p></p>
                                        <p>Tell. +90 536 434 7663</p>
                                        <p>Email. info@to-istanbultours.com</p>
                                        <p class="address"> addess.HALASKARGAZİ CD. MISIRLI PLAZA 51/2 HARBİYE İSTANBUL
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


  
        
        <div class="container " style="padding-top: 40px;padding-bottom: 40px;">
            <div class="blog-content">

            </div>
        </div>

           @include('Frontend.footer')








    


        <script src="{{ asset('frontend/libs/lazy-load/intersection-observer.js') }}"></script>
        <script async src="{{ asset('frontend/libs/lazy-load/lazyload.min.js') }}"></script>
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


    </div>
</body>

</html>