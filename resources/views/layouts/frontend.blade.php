<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.com/html/pictor/index-animated.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Oct 2022 08:47:02 GMT -->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheets/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheets/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheets/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheets/colors/color1.css') }}" id="colors">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheets/animate.css') }}">

    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <title>@yield('title')</title>
    @yield('css')

</head>

<body class="header-sticky">
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading...</h2>
        </div>
    </section>

    <div class="boxed">
        @include('frontend/partials/topbar')
        @include('frontend/partials/header')
        @yield('content')
        @include('frontend/partials/footer')
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/imagesloaded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/jquery.tweet.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/gmap3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/main.js') }}"></script>

    <script type="text/javascript" src="{{ asset('frontend/javascript/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/javascript/slider.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

    @yield('js')
</body>

<!-- Mirrored from themesflat.com/html/pictor/index-animated.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Oct 2022 08:47:39 GMT -->

</html>
