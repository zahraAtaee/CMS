<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@lang('messages.title')@endlang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate(true) !!}

    <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
    <link href="/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/viewSite/css/font-awesome.min.css">
    <link rel="stylesheet" href="/viewSite/css/owl.carousel.css">
    <link rel="stylesheet" href="/viewSite/css/owl.transitions.css">
    <link rel="stylesheet" href="/viewSite/css/animate.min.css">
    <link rel="stylesheet" href="/viewSite/css/lightbox.css">
    <link rel="stylesheet" href="/viewSite/css/preloader.css">
    <link rel="stylesheet" href="/viewSite/css/image.css">
    <link rel="stylesheet" href="/viewSite/css/icon.css">
    <link rel="stylesheet" href="/viewSite/css/style.css">
    <link rel="stylesheet" href="/viewSite/css/responsive.css">
    {{--<link rel="stylesheet" href="/viewSite/css/bootstrap.min.css">--}}
    {{--<link href="/css/home.css" rel="stylesheet">--}}
    <link rel="alternate"  type="application/rss+xml" href="/feed/articles" title="فیلد مقالات فروشگاه ">
</head>
<body id="top">

@include("Home.section.header")

<div class="wrapper">
    @include("Home.section.baner")
    @include("Home.section.features")
    @include("Home.section.counter")
    @include("Home.section.portfolio")
    @include("Home.section.playVideo")
    @include("Home.section.team")
    @include("Home.section.pricing-table")
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    @include("Home.section.testimonial")
    @include("Home.section.clientLogo")
    @include("Home.section.contactForm")
    @include("Home.section.footer")
</div>

<!-- load Js -->
{{--<script src="/js/viewSite.js"></script>
@include("Home.section.blog")--}}

<script src="/viewSite/js/jquery-1.11.3.min.js"></script>
<script src="/viewSite/js/bootstrap.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>
<script src="/viewSite/js/waypoints.min.js"></script>
<script src="/viewSite/js/lightbox.js"></script>
<script src="/viewSite/js/jquery.counterup.min.js"></script>
<script src="/viewSite/js/owl.carousel.min.js"></script>
<script src="/viewSite/js/html5lightbox.js"></script>
<script src="/viewSite/js/jquery.mixitup.js"></script>
<script src="/viewSite/js/wow.min.js"></script>
<script src="/viewSite/js/jquery.scrollUp.js"></script>
<script src="/viewSite/js/jquery.sticky.js"></script>
<script src="/viewSite/js/jquery.nav.js"></script>
<script src="/viewSite/js/main.js"></script>

</body>
</html>