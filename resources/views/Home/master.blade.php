<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>@lang('messages.title')@endlang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate(true) !!}
    @include('Home.section.style')
    <link rel="alternate"  type="application/rss+xml" href="/feed/articles" title="فیلد مقالات فروشگاه ">
</head>
<body id="top">

@include("Home.section.header")

<div class="wrapper">

    @yield('content')

</div>

<!-- load Js -->
{{--<script src="/js/viewSite.js"></script>
@include("Home.section.blog")--}}

<script src="/viewSite/js/jquery-1.11.3.min.js"></script>
<script src="/viewSite/js/bootstrap.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB5bKr7r4KJkvlApP-suXOTT-4J3Tp-Vek&amp;sensor=true"></script>
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