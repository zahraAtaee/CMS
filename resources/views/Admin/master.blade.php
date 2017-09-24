<!doctype html>
<html lang="en" dir="rtl">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('Admin.section.style')
    <link rel="shortcut icon" href="" />
</head>
<!-- END HEAD -->
<body  class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <div id="app" class="page-wrapper">
        @include('Admin.section.header')
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
            <div class="page-container">
                @include('Admin.section.sidebar')
                <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper">
                        <!-- BEGIN CONTENT BODY -->
                        <div class="page-content">
                            {{--@include('Admin.section.themePanel')--}}
                            @yield('content')
                        </div>
                        <!-- END CONTENT BODY -->
                    </div>
                <!-- END CONTENT -->
                @include('Admin.section.quickSidebar')
            </div>
        <!-- END CONTAINER -->
        @include('Admin.section.footer')
    </div>
        @include('Admin.section.quickNavbar')
        @include('Admin.section.script')
</body>
</html>