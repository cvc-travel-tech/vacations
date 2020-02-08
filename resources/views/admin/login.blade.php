<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->


    <title>Login </title>
    <meta name="description" content="" />

    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/login.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
 


    <!--End of Tawk.to Script-->
</head>

<body style="background-color: #d5d5d5;">
    <div class="cont">
        <div class="demo">
            <div class="login">
                <!-- <div class="login__check"></div> -->
                <div class="logo-tech">
                    <img src="{{ asset('frontend/images/Najaf.png') }}" style="width: 78%;
    margin-top: 78px;
    margin-left: 20px;">
                </div>

                
    <form method="POST" action="{{ route('admin.dologin') }}">
        @csrf


        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror


                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                <div class="login__form">
                    <div class="login__row">
                        <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                        </svg>
                        <input name="email"  value="{{ old('email') }}"  type="text" class="login__input name  @error('email') is-invalid @enderror " placeholder="Username" />
                     
                    </div>


                    <div class="login__row">
                        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                        </svg>
                        <input type="password" name="password" class="login__input pass   @error('password') is-invalid @enderror " placeholder="Password" value="{{ old('password') }}" />
            
                    </div>

 

                    <button type="submit" class="login__submit">Sign in</button>
                </div>

</form>


            </div>




     
    <script>
        $(document).ready(function () {

            var animating = false,
                submitPhase1 = 1100,
                submitPhase2 = 400,
                logoutPhase1 = 800,
                $login = $(".login"),
                $app = $(".app");

            function ripple(elem, e) {
                $(".ripple").remove();
                var elTop = elem.offset().top,
                    elLeft = elem.offset().left,
                    x = e.pageX - elLeft,
                    y = e.pageY - elTop;
                var $ripple = $("<div class='ripple'></div>");
                $ripple.css({ top: y, left: x });
                elem.append($ripple);
            };

            $(document).on("click", ".login__submit", function (e) {
                if (animating) return;
                animating = true;
                var that = this;
                ripple($(that), e);
                $(that).addClass("processing");
                setTimeout(function () {
                    $(that).addClass("success");
                    setTimeout(function () {
                        $app.show();
                        $app.css("top");
                        $app.addClass("active");
                    }, submitPhase2 - 70);
                    setTimeout(function () {
                        $login.hide();
                        $login.addClass("inactive");
                        animating = false;
                        $(that).removeClass("success processing");
                    }, submitPhase2);
                }, submitPhase1);
            });

            $(document).on("click", ".app__logout", function (e) {
                if (animating) return;
                $(".ripple").remove();
                animating = true;
                var that = this;
                $(that).addClass("clicked");
                setTimeout(function () {
                    $app.removeClass("active");
                    $login.show();
                    $login.css("top");
                    $login.removeClass("inactive");
                }, logoutPhase1 - 120);
                setTimeout(function () {
                    $app.hide();
                    animating = false;
                    $(that).removeClass("clicked");
                }, logoutPhase1);
            });

        });
    </script>

</body>