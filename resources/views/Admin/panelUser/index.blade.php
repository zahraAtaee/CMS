@extends('Admin.master')
@section('style')
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/global/css/components-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/global/css/plugins-rtl.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/pages/css/profile-2-rtl.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/layouts/layout/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="/layouts/layout/css/themes/darkblue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/layouts/layout/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    @endsection
@section('content')
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN THEME PANEL -->

    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">

        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">خانه</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>کاربران</span>
            </li>
        </ul>
        <div class="page-toolbar">
            @include('Admin.section.pageTools')
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> پروفایل شخصی کاربر
        <small>{{auth()->user()->name}}</small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="profile">
        <div class="tabbable-line tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_1_1" data-toggle="tab"> مرور کلی </a>
                </li>
                <li>
                    <a href="#tab_1_3" data-toggle="tab"> حساب کاربری </a>
                </li>
                <li>
                    <a href="#tab_1_6" data-toggle="tab"> راهنما </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1_1">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-unstyled profile-nav">
                                <li>
                                    <img src="{{auth()->user()->images['thumb']}}" class="img-responsive pic-bordered" alt="" />
                                    <a href="javascript:;" class="profile-edit"> ویرایش </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> پروژه ها </a>
                                </li>
                                <li>
                                    <a href="#comments"> پیغام ها
                                        <span> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> دوستان </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> تنظیمات </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-8 profile-info">
                                    <h1 class="font-green sbold uppercase">{{auth()->user()->name .' '.auth()->user()->family }}</h1>
                                    <p> {{auth()->user()->description}} </p>
                                    <p>
                                        <a href="javascript:;"> www.mywebsite.com </a>
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <i class="fa fa-map-marker"></i> تهران </li>
                                        <li>
                                            <i class="fa fa-calendar"></i>   {{jDate::forge(now())->format('%B %d، %Y')}} </li>
                                        <li>
                                            <i class="fa fa-briefcase"></i> طراح </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                           {{-- @if(user()->upgradeLevels())


                                                {{'عضویت ویژه'}}

                                            @else

                                                {{' ارتقا حساب کاربری '}}

                                            @endif--}}
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i> لایک </li>
                                    </ul>
                                </div>
                                <!--end col-md-8-->
                                <div class="col-md-4">
                                    <div class="portlet sale-summary">
                                        <div class="portlet-title">
                                            <div class="caption font-red sbold"> خلاصه فروش </div>
                                            <div class="tools">
                                                <a class="reload" href="javascript:;"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <ul class="list-unstyled">
                                                <li>
                                                                        <span class="sale-info"> امروز
                                                                            <i class="fa fa-img-up"></i>
                                                                        </span>
                                                    <span class="sale-num"> 23 </span>
                                                </li>
                                                <li>
                                                                        <span class="sale-info"> فروش هفته
                                                                            <i class="fa fa-img-down"></i>
                                                                        </span>
                                                    <span class="sale-num"> 87 </span>
                                                </li>
                                                <li>
                                                    <span class="sale-info"> کل فروش </span>
                                                    <span class="sale-num"> 2377 </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-md-4-->
                            </div>
                            <!--end row-->
                            <div class="tabbable-line tabbable-custom-profile">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_11" data-toggle="tab">آخرین سفارشات   </a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_22" data-toggle="tab">فعالیت ها  </a>
                                    </li>
                                    <li>
                                        <a href="#comments" data-toggle="tab"> گفتگو ها  </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_11">
                                        @component('Admin.panelUser.history', ['payments' => $payments])
                                        @slot('title')
                                        تاریخچه پرداخت ها
                                        @endslot
                                        @endcomponent
                                    </div>
                                    <!--tab-pane-->
                                    <div class="tab-pane" id="tab_1_22">
                                        <div class="tab-pane active" id="tab_1_1_1">
                                            <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                                <ul class="feeds">
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> 4 وظیفه انجام نشده دارید.
                                                                        <span class="label label-danger label-sm"> اقدام به انجام
                                                                                                <i class="fa fa-share"></i>
                                                                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> اکنون </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> نسخه جدید v1.4 راه اندازی شد! </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> 20 دقیقه </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-danger">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> دیتابیس سرور #12 پربار است. لطفا مشکل را رفع کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 24 دقیقه </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 30 دقیقه </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 40 دقیقه </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-warning">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> کاربر جدید ثبت نام کرد. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 1.5 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سخت افزار وب سرور باید ارتقا یابد.
                                                                        <span class="label label-inverse label-sm"> از کار افتاده </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 2 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-default">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 3 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-warning">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 5 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 18 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-default">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 21 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 22 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-default">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 21 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 22 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-default">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 21 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 22 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-default">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 21 ساعت </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 22 ساعت </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-pane-->
                                    <div class="tab-pane" id="comments">
                                        <div class="tab-pane active" id="tab_1_1_1">
                                            <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                                <ul class="chats">
                                                    @foreach($comments as $comment)
                                                        <li class="in">
                                                            <img class="avatar" alt="" src="{{$comment->user->images['thumb']}}">
                                                            <div class="message">
                                                                <span class="arrow"> </span>
                                                                <a href="javascript:;" class="name"> {{$comment->user->name}} </a>
                                                                <span class="datetime"> در {{jdate($comment->created_at)->ago()}} </span>
                                                                <span class="body">{!! $comment->comment !!}</span>
                                                            </div>
                                                        </li>

                                                        @if(count($comment->comments))
                                                            @foreach($comment->comments as $child)
                                                                <li class="out">
                                                                    <img class="avatar" alt="" src="{{$child->user->images['thumb']}}">
                                                                    <div class="message">
                                                                        <span class="arrow"> </span>
                                                                        <a href="javascript:;" class="name"> {{$child->user->name}} </a>
                                                                        <span class="datetime"> در {{jdate($child->created_at)->ago()}} </span>
                                                                        <span class="body">{!! $child->comment !!} </span>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar2.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> آناهیتا </a>
                                                            <span class="datetime"> در 20:11 </span>
                                                            <span class="body"> لورم ایپسوم یا طرح&zwnj;نما به متنی آزمایشی و بی&zwnj;معنی در صنعت چاپ، صفحه&zwnj;آرایی و طراحی گرافیک گفته می&zwnj;شود. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar2.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> آناهیتا </a>
                                                            <span class="datetime"> در 20:11 </span>
                                                            <span class="body"> لورم ایپسوم یا طرح&zwnj;نما به متنی آزمایشی و بی&zwnj;معنی در صنعت چاپ، صفحه&zwnj;آرایی و طراحی گرافیک گفته می&zwnj;شود. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> کوروش </a>
                                                            <span class="datetime"> در 20:30 </span>
                                                            <span class="body"> لورم ایپسوم یا طرح&zwnj;نما به متنی آزمایشی و بی&zwnj;معنی در صنعت چاپ، صفحه&zwnj;آرایی و طراحی گرافیک گفته می&zwnj;شود. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> کوروش </a>
                                                            <span class="datetime"> در 20:30 </span>
                                                            <span class="body"> لورم ایپسوم یا طرح&zwnj;نما به متنی آزمایشی و بی&zwnj;معنی در صنعت چاپ، صفحه&zwnj;آرایی و طراحی گرافیک گفته می&zwnj;شود. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar3.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> محمد </a>
                                                            <span class="datetime"> در 20:33 </span>
                                                            <span class="body"> لورم ایپسوم یا طرح&zwnj;نما به متنی آزمایشی و بی&zwnj;معنی در صنعت چاپ، صفحه&zwnj;آرایی و طراحی گرافیک گفته می&zwnj;شود. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar3.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> محمد </a>
                                                            <span class="datetime"> در 20:35 </span>
                                                            <span class="body"> لورم ایپسوم یا طرح&zwnj;نما به متنی آزمایشی و بی&zwnj;معنی در صنعت چاپ، صفحه&zwnj;آرایی و طراحی گرافیک گفته می&zwnj;شود. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> کوروش </a>
                                                            <span class="datetime"> در 20:40 </span>
                                                            <span class="body"> لورم ایپسوم یا طرح&zwnj;نما به متنی آزمایشی و بی&zwnj;معنی در صنعت چاپ، صفحه&zwnj;آرایی و طراحی گرافیک گفته می&zwnj;شود. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar3.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> محمد </a>
                                                            <span class="datetime"> در 20:40 </span>
                                                            <span class="body"> لورم ایپسوم یا طرح&zwnj;نما به متنی آزمایشی و بی&zwnj;معنی در صنعت چاپ، صفحه&zwnj;آرایی و طراحی گرافیک گفته می&zwnj;شود. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> کوروش </a>
                                                            <span class="datetime"> در 20:54 </span>
                                                            <span class="body"> لورم ایپسوم یا طرح&zwnj;نما به متنی آزمایشی و بی&zwnj;معنی در صنعت چاپ، صفحه&zwnj;آرایی و طراحی گرافیک گفته می&zwnj;شود.
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="chat-form">
                                                <div class="input-cont">
                                                    <input class="form-control" type="text" placeholder="پیغام خود را تایپ کنید..."> </div>
                                                <div class="btn-cont">
                                                    <span class="arrow"> </span>
                                                    <a href="" class="btn blue icn-only">
                                                        <i class="fa fa-check icon-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-pane-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab_1_2-->
                <div class="tab-pane" id="tab_1_3">
                    <div class="row profile-account">
                        <div class="col-md-3">
                            <ul class="ver-inline-menu tabbable margin-bottom-10">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab_1-1">
                                        <i class="fa fa-cog"></i> اطلاعات شخصی </a>
                                    <span class="after"> </span>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_2-2">
                                        <i class="fa fa-picture-o"></i> تغییر آواتار </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_3-3">
                                        <i class="fa fa-lock"></i> تغییر کلمه عبور </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_4-4">
                                        <i class="fa fa-eye"></i> تنظیمات خصوصی </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_4-4">
                                {{-- @if(user()->upgradeLevels())

                                    <i class="fa fa-eye"></i> {{'عضویت ویژه'}}

                                    @else

                                    <i class="fa fa-eye"></i>{{' ارتقا حساب کاربری '}}
                                 @endif--}}

                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div id="tab_1-1" class="tab-pane active">
                                    <form role="form" action="#">
                                        <div class="form-group">
                                            <label class="control-label">نام</label>
                                            <input type="text" value="" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">نام خانوادگی</label>
                                            <input type="text" value="" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">شماره موبایل</label>
                                            <input type="text" value="" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">موقعیت</label>
                                            <input type="text" placeholder="Design, Web etc." class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">توضیحات</label>
                                            <input type="text" value="" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">درباره</label>
                                            <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">آدرس سایت</label>
                                            <input type="text" placeholder="http://www.mywebsite.com" class="form-control" /> </div>
                                        <div class="margiv-top-10">
                                            <a href="javascript:;" class="btn green"> ذخیره تغییرات </a>
                                            <a href="javascript:;" class="btn default"> لغو </a>
                                        </div>
                                    </form>
                                </div>
                                <div id="tab_2-2" class="tab-pane">
                                    <p> تغییر عکس پروفایل  </p>
                                    <form action="#" role="form">
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> انتخاب عکس </span>
                                                                            <span class="fileinput-exists"> تغییر </span>
                                                                            <input type="file" name="..."> </span>
                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> حذف </a>
                                                </div>
                                            </div>
                                            <div class="clearfix margin-top-10">
                                                <span class="label label-danger"> توجه! </span>
                                                <span> عکس منتخب حجمش نباید از 10M بیشتر باشد. </span>
                                            </div>
                                        </div>
                                        <div class="margin-top-10">
                                            <a href="javascript:;" class="btn green"> ارسال </a>
                                            <a href="javascript:;" class="btn default"> لغو </a>
                                        </div>
                                    </form>
                                </div>
                                <div id="tab_3-3" class="tab-pane">
                                    <form action="#">
                                        <div class="form-group">
                                            <label class="control-label">کلمه عبور فعلی</label>
                                            <input type="password" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">کلمه عبور جدید</label>
                                            <input type="password" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">تکرار کلمه عبور جدید</label>
                                            <input type="password" class="form-control" /> </div>
                                        <div class="margin-top-10">
                                            <a href="javascript:;" class="btn green"> تغییر کلمه عبور </a>
                                            <a href="javascript:;" class="btn default"> لغو </a>
                                        </div>
                                    </form>
                                </div>
                                <div id="tab_4-4" class="tab-pane">
                                    <form action="#">
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <td> عدم نمایش ایمیل در پست ها</td>
                                                <td>
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios1" value="option1" /> بله
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios1" value="option2" checked/> خیر
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>عدم نمایش نام خانوادگی در پیامها </td>
                                                <td>
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios21" value="option1" /> بله
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios21" value="option2" checked/> خیر
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> عدم نمایش عکس پروفایل در سایت </td>
                                                <td>
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios31" value="option1" /> بله
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios31" value="option2" checked/> خیر
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> عدم اجازه جهت گفتگوی شخصی </td>
                                                <td>
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios41" value="option1" /> بله
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios41" value="option2" checked/> خیر
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--end profile-settings-->
                                        <div class="margin-top-10">
                                            <a href="javascript:;" class="btn green"> ذخیره تغییرات</a>
                                            <a href="javascript:;" class="btn default"> لغو </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end col-md-9-->
                    </div>
                </div>
                <!--end tab-pane-->
                <div class="tab-pane" id="tab_1_6">
                    <div class="row">
                        <div class="col-md-2">
                            <ul class="ver-inline-menu tabbable margin-bottom-10">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab_1">
                                        <i class="fa fa-briefcase"></i> General Questions </a>
                                    <span class="after"> </span>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_2">
                                        <i class="fa fa-group"></i> Membership </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_3">
                                        <i class="fa fa-leaf"></i> Terms Of Service </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_1">
                                        <i class="fa fa-info-circle"></i> License Terms </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_2">
                                        <i class="fa fa-tint"></i> Payment Rules </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_3">
                                        <i class="fa fa-plus"></i> Other Questions </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content">
                                <div id="tab_1" class="tab-pane active">
                                    <div id="accordion1" class="panel-group">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion1_1" class="panel-collapse collapse in">
                                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                    wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                    haven't heard of them accusamus labore sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion1_2" class="panel-collapse collapse">
                                                <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                    enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                    sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion1_3" class="panel-collapse collapse">
                                                <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                    enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                    sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion1_4" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion1_5" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion1_6" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion1_7" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab_2" class="tab-pane">
                                    <div id="accordion2" class="panel-group">
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion2_1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                                        beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                                        you probably haven't heard of them accusamus labore sustainable VHS. </p>
                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                                        beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                                        you probably haven't heard of them accusamus labore sustainable VHS. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion2_2" class="panel-collapse collapse">
                                                <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                    enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                    sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion2_3" class="panel-collapse collapse">
                                                <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                    enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                    sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion2_4" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion2_5" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion2_6" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion2_7" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab_3" class="tab-pane">
                                    <div id="accordion3" class="panel-group">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion3_1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
                                                    <p> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                                        craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                        nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion3_2" class="panel-collapse collapse">
                                                <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                    enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                    sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion3_3" class="panel-collapse collapse">
                                                <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                    enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                    sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion3_4" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion3_5" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion3_6" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                </h4>
                                            </div>
                                            <div id="accordion3_7" class="panel-collapse collapse">
                                                <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end tab-pane-->
            </div>
        </div>
    </div>

@endsection
