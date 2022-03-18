<!DOCTYPE html>
<html lang="en">

<head>
    <!--Metas-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" id="viewport" content="width=device-width; initial-scale=1">
    <meta name="description" content="Teamboard Creative Template">
    <title>Teamboard Creative Template</title>
    <!--External Stylesheets css-->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap.min.css') }}">
    <!--   icon font -->
    <link rel="stylesheet" href="{{ asset('auth/css/icofont.min.css') }}">
    <!--Animate -->
    <link rel="stylesheet" href="{{ asset('auth/css/animate.css') }}">
    <!--Slick -->
    <link rel="stylesheet" href="{{ asset('auth/css/slick.css') }}">

    <!-- Magnific Popup-->
    <link rel="stylesheet" href="{{ asset('auth/css/magnific-popup.css') }}">
    <!--Template Stylesheets css-->
    <link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/responsive.css') }}">
    <!-- Fonts styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700,700i" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('auth/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('auth/images/favicon.png') }}" type="image/x-icon">
    <script src="{{ asset('auth/js/modernizr.js') }}"></script>
</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

    <!-- Page Preloader -->
    <div id="loading-page">
        <div id="loading-center-page">
            <div id="loading-center-absolute">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- Page Preloader -->
    <!-- Content Page -->
    <div class="warpper clearfix">

        <div class="warpper-inner">

            <section class="login-page web-login">

                <div class="row row-0">

                    <div class="col-12 col-lg-7 col-md-7">

                        @yield('body')

                    </div>

                    <div class="col-12 col-lg-5 col-md-5 ipad-login">

                        <div class="topbar-login">

                            <div class="float-right">

                                <ul>
                                    @yield('button')
                                </ul>

                            </div>

                        </div>

                        <div class="bg-login"></div>

                    </div>

                </div>

            </section>

            <section class="login-page mobile-login">

                <div class="row row-0">

                    <div class="col-12 col-lg-5 col-md-5 ipad-login">

                        <div class="topbar-login">

                            <div class="float-right">

                                <ul>
                                    yield('button')
                                </ul>

                            </div>

                        </div>

                        <div class="bg-login"></div>

                    </div>

                    <div class="col-12 col-lg-7 col-md-7">

                        @yield('body')

                    </div>

                </div>
                
            </section>

        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('auth/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap Plugins -->
    <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('auth/js/jquery-latest.min.js') }}"></script>
    <script src="{{ asset('auth/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('auth/js/wow.min.js') }}"></script>
    <script src="{{ asset('auth/js/slick.min.js') }}"></script>
    <script src="{{ asset('auth/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('auth/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('auth/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Main js -->
    <script src="{{ asset('auth/js/main.js') }}"></script>

</body>