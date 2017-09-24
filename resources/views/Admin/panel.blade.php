@extends('Admin.master')
@section('content')

        <!-- BEGIN PAGE HEADER-->
       @include('Admin.section.themePanel')
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">خانه</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>پیشخوان</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp;
                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                    <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> پیشخوان مدیر                            <small>آمار، نمودار ها، رویدادهای اخیر و گزارش ها</small>
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS 1-->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="1349">0</span>
                        </div>
                        <div class="desc"> بازخورد های جدید </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="12,5">0</span>میلیون تومان </div>
                        <div class="desc"> سود کل </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                    <div class="visual">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="549">0</span>
                        </div>
                        <div class="desc"> سفارشات جدید </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                    <div class="visual">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="details">
                        <div class="number"> +
                            <span data-counter="counterup" data-value="89"></span>% </div>
                        <div class="desc"> محبوبیت برند </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- END DASHBOARD STATS 1-->
        <div class="row">

            <div class="col-lg-6 col-xs-12 col-sm-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bar-chart font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">پرداخت ها</span>
                            <span class="caption-helper">آمار ماهانه...</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                <label class="btn red btn-outline btn-circle btn-sm active">
                                    <input type="radio" name="options" class="toggle" id="option1">جدید</label>
                                <label class="btn red btn-outline btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">بازگشتی</label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">

                        <payment :values="{{json_encode($values)}}"  :labels="{{json_encode($lables)}}" ></payment>


                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-share font-red-sunglo hide"></i>
                            <span class="caption-subject font-dark bold uppercase">بازیدهای سایت</span>
                            <span class="caption-helper">آمار هفتگی...</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a href="" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> فیلترکردن محدوده
                                    <span class="fa fa-angle-down"> </span>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;"> Q1 2014
                                            <span class="label label-sm label-default"> گذشته </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> Q2 2014
                                            <span class="label label-sm label-default"> گذشته </span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="javascript:;"> Q3 2014
                                            <span class="label label-sm label-success"> فعلی </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> Q4 2014
                                            <span class="label label-sm label-warning"> آینده </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="site_activities_loading">
                            <img src="/global/img/loading.gif" alt="loading" /> </div>
                        <div id="site_activities_content" class="display-none">
                            <div id="site_activities" style="height: 228px;"> </div>
                        </div>
                        <div style="margin: 20px 0 10px 30px">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                    <span class="label label-sm label-success"> درآمد: </span>
                                    <h3>T 13,234</h3>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                    <span class="label label-sm label-info"> مالیات: </span>
                                    <h3>T 134,900</h3>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                    <span class="label label-sm label-danger"> حمل و نقل: </span>
                                    <h3>T 1,134</h3>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                    <span class="label label-sm label-warning"> سفارشات: </span>
                                    <h3>235090</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light bordered">
                    <div class="portlet-title tabbable-line">
                        <div class="caption">
                            <i class=" icon-social-twitter font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">نظرات</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_actions_pending" data-toggle="tab"> درانتظار </a>
                            </li>
                            <li>
                                <a href="#tab_actions_completed" data-toggle="tab"> تایید شده </a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_actions_pending">
                                <!-- BEGIN: Actions -->
                                <div class="mt-actions">
                                    @foreach($commentsDeActive as $comment)
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="/pages/media/users/avatar10.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class="icon-magnet"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">{{$comment->user->name}}</span>
                                                        <p class="mt-action-desc">{{$comment->comment}}</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">{{jdate($comment->created_at)->ago()}}</span>
                                                    <span class="mt-action-dot bg-green"></span>
                                                    <span class="mt=action-time">{{jdate($comment->created_at)->getDateTime()}}</span>
                                                </div>
                                                <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">ویرایش</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">حذف</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- END: Actions -->
                            </div>
                            <div class="tab-pane" id="tab_actions_completed">
                                <!-- BEGIN:Completed-->
                                <div class="mt-actions">
                                    @foreach($commentsDeActive as $comment)
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="/pages/media/users/avatar1.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class="icon-action-redo"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">{{$comment->user->name}}</span>
                                                        <p class="mt-action-desc">{{$comment->comment}}</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">3{{jdate($comment->created_at)->ago()}}</span>
                                                    <span class="mt-action-dot bg-red"></span>
                                                    <span class="mt=action-time">{{jdate($comment->created_at)->getDateTime()}}</span>
                                                </div>
                                                <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">ویرایش</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">حذف</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- END: Completed -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light bordered">
                    <div class="portlet-title tabbable-line">
                        <div class="caption">
                            <i class="icon-bubbles font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">نظرات</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#portlet_comments_1" data-toggle="tab"> درانتظار </a>
                            </li>
                            <li>
                                <a href="#portlet_comments_2" data-toggle="tab"> تایید شده </a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="portlet_comments_1">
                                <!-- BEGIN: Comments -->
                                <div class="mt-comments">
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="/pages/media/users/avatar1.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">مایکل</span>
                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                            </div>
                                            <div class="mt-comment-text"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-pending">در انتظار</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">ویرایش سریع</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">نمایش</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">حذف</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="/pages/media/users/avatar6.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">لاریسا</span>
                                                <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                            </div>
                                            <div class="mt-comment-text"> این یک واقعیت طولانی است که یک خواننده هیجان زده خواهد شد. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-rejected">رد شده</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">ویرایش سریع</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">نمایش</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">حذف</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="/pages/media/users/avatar8.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">ناتاشا</span>
                                                <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                            </div>
                                            <div class="mt-comment-text"> از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-pending">در انتظار</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">ویرایش سریع</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">نمایش</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">حذف</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="/pages/media/users/avatar4.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">سباستین دیویدسون</span>
                                                <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                            </div>
                                            <div class="mt-comment-text"> آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-rejected">رد شده</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">ویرایش سریع</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">نمایش</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">حذف</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Comments -->
                            </div>
                            <div class="tab-pane" id="portlet_comments_2">
                                <!-- BEGIN: Comments -->
                                <div class="mt-comments">
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="/pages/media/users/avatar4.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">مایکل</span>
                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                            </div>
                                            <div class="mt-comment-text"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-approved">تایید شده</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">ویرایش سریع</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">نمایش</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">حذف</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="/pages/media/users/avatar8.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">لاریسا</span>
                                                <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                            </div>
                                            <div class="mt-comment-text">  و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-approved">تایید شده</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">ویرایش سریع</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">نمایش</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">حذف</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="/pages/media/users/avatar6.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">ناتاشا</span>
                                                <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                            </div>
                                            <div class="mt-comment-text"> از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-approved">تایید شده</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">ویرایش سریع</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">نمایش</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">حذف</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="/pages/media/users/avatar1.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">سباستین دیویدسون</span>
                                                <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                            </div>
                                            <div class="mt-comment-text"> بخش استاندارد Lorem Ipsum از سال 1500 استفاده می شود </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-approved">تایید شده</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">ویرایش سریع</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">نمایش</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">حذف</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Comments -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-directions font-green hide"></i>
                            <span class="caption-subject bold font-dark uppercase "> فعالیت ها</span>
                            <span class="caption-helper">تایم لاین افقی</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn blue btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> اقدامات
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;"> اقدام 1</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;">اقدام 2</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">اقدام 3</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">اقدام 4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="cd-horizontal-timeline mt-timeline-horizontal" data-spacing="60">
                            <div class="timeline">
                                <div class="events-wrapper">
                                    <div class="events">
                                        <ol>
                                            <li>
                                                <a href="#0" data-date="16/01/2014" class="border-after-red bg-after-red selected">16 Jan</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="28/02/2014" class="border-after-red bg-after-red">28 Feb</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="20/04/2014" class="border-after-red bg-after-red">20 Mar</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="20/05/2014" class="border-after-red bg-after-red">20 May</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="09/07/2014" class="border-after-red bg-after-red">09 Jul</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="30/08/2014" class="border-after-red bg-after-red">30 Aug</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="15/09/2014" class="border-after-red bg-after-red">15 Sep</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="01/11/2014" class="border-after-red bg-after-red">01 Nov</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="10/12/2014" class="border-after-red bg-after-red">10 Dec</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="19/01/2015" class="border-after-red bg-after-red">29 Jan</a>
                                            </li>
                                            <li>
                                                <a href="#0" id="test_pest" data-date="03/03/2015" class="border-after-red bg-after-red">3 Mar - 1</a>
                                            </li>
                                        </ol>
                                        <span class="filling-line bg-red" aria-hidden="true"></span>
                                    </div>
                                    <!-- .events -->
                                </div>
                                <!-- .events-wrapper -->
                                <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                    <li>
                                        <a href="#0" class="prev inactive btn btn-outline red md-skip">
                                            <i class="fa fa-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="next btn btn-outline red md-skip">
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- .cd-timeline-navigation -->
                            </div>
                            <!-- .timeline -->
                            <div class="events-content">
                                <ol>
                                    <li class="selected" data-date="16/01/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">کاربر جدید</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_3.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">16 January 2014 : 7:45 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, mi felis, aliquam at iaculis mi felis, aliquam
                                                at iaculis finibus eu ex. Integer efficitur tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non est rhoncus volutpat.</p>
                                            <a href="javascript:;" class="btn btn-circle red btn-outline">ادامه مطلب</a>
                                            <a href="javascript:;" class="btn btn-circle btn-icon-only blue">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li data-date="28/02/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">Sending Shipment</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_3.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Hugh Grant</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">28 February 2014 : 10:15 AM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle btn-outline green-jungle">Download Shipment List</a>
                                            <div class="btn-group dropup pull-right">
                                                <button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> اقدامات
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right" role="menu">
                                                    <li>
                                                        <a href="javascript:;">اقدام </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">اقدامی دیگر </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> چیزی دیگر </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">لینک جدا </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-date="20/04/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">Blue Chambray</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_1.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue">Rory Matthew</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">20 April 2014 : 10:45 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                            <a href="javascript:;" class="btn btn-circle red">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="20/05/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_2.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">20 May 2014 : 12:20 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="09/07/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">Event Success</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_1.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Matt Goldman</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">9 July 2014 : 8:15 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                            <a href="javascript:;"
                                               class="btn btn-circle btn-outline purple-medium">View Summary</a>
                                            <div class="btn-group dropup pull-right">
                                                <button class="btn btn-circle green dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> اقدامات
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right" role="menu">
                                                    <li>
                                                        <a href="javascript:;">اقدام </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">اقدامی دیگر </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> چیزی دیگر </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">لینک جدا </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-date="30/08/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">Conference Call</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_1.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Rory Matthew</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">30 August 2014 : 5:45 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <img class="timeline-body-img pull-left" src="/pages/media/blog/5.jpg" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                            <a href="javascript:;" class="btn btn-circle red">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="15/09/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">Conference Decision</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_5.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Jessica Wolf</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">15 September 2014 : 8:30 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <img class="timeline-body-img pull-right" src="/pages/media/blog/6.jpg" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                qui ut.</p>
                                            <a href="javascript:;" class="btn btn-circle green-sharp">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="01/11/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_2.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">1 November 2014 : 12:20 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="10/12/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_2.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">10 December 2015 : 12:20 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="19/01/2015">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_2.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">19 January 2015 : 12:20 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="03/03/2015">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_2.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">3 March 2015 : 12:20 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <!-- .events-content -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-directions font-green hide"></i>
                            <span class="caption-subject bold font-dark uppercase"> رخدادها</span>
                            <span class="caption-helper">تایم لاین افقی</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                <label class="btn green btn-outline btn-circle btn-sm active">
                                    <input type="radio" name="options" class="toggle" id="option1">اقدامات</label>
                                <label class="btn  green btn-outline btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">ابزارها</label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="cd-horizontal-timeline mt-timeline-horizontal" data-spacing="60">
                            <div class="timeline mt-timeline-square">
                                <div class="events-wrapper">
                                    <div class="events">
                                        <ol>
                                            <li>
                                                <a href="#0" data-date="16/01/2014" class="border-after-blue bg-after-blue selected"> نمایشگاه 2016 </a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="28/02/2014" class="border-after-blue bg-after-blue"> تبلیغ جدید </a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="20/04/2014" class="border-after-blue bg-after-blue"> نشست </a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="20/05/2014" class="border-after-blue bg-after-blue">ناهار</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="09/07/2014" class="border-after-blue bg-after-blue">جشن</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="30/08/2014" class="border-after-blue bg-after-blue"> گزارشات </a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="15/09/2014" class="border-after-blue bg-after-blue">HR</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="01/11/2014" class="border-after-blue bg-after-blue">IPO</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="10/12/2014" class="border-after-blue bg-after-blue"> هیئت مدیره </a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="19/01/2015" class="border-after-blue bg-after-blue">درآمد</a>
                                            </li>
                                            <li>
                                                <a href="#0" data-date="03/03/2015" class="border-after-blue bg-after-blue"> شام </a>
                                            </li>
                                        </ol>
                                        <span class="filling-line bg-blue" aria-hidden="true"></span>
                                    </div>
                                    <!-- .events -->
                                </div>
                                <!-- .events-wrapper -->
                                <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                    <li>
                                        <a href="#0" class="prev inactive btn blue md-skip">
                                            <i class="fa fa-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="next btn blue md-skip">
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- .cd-timeline-navigation -->
                            </div>
                            <!-- .timeline -->
                            <div class="events-content">
                                <ol>
                                    <li class="selected" data-date="16/01/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">Expo 2016 Launch</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_2.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Lisa Bold</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">23 February 2014</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod mi felis, aliquam at iaculis eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis mi felis, aliquam
                                                at iaculis eu, onsectetur adipiscing elit finibus eu ex. Integer efficitur leo eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas onsectetur adipiscing elit nunc. Suspendisse
                                                potenti</p>
                                            <a href="javascript:;" class="btn btn-circle dark btn-outline">ادامه مطلب</a>
                                            <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li data-date="28/02/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">Sending Shipment</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_3.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Hugh Grant</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">28 February 2014 : 10:15 AM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle btn-outline green-jungle">Download Shipment List</a>
                                            <div class="btn-group dropup pull-right">
                                                <button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> اقدامات
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right" role="menu">
                                                    <li>
                                                        <a href="javascript:;">اقدام </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">اقدامی دیگر </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> چیزی دیگر </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">لینک جدا </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-date="20/04/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">Blue Chambray</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_1.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue">Rory Matthew</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">20 April 2014 : 10:45 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                            <a href="javascript:;" class="btn btn-circle red">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="20/05/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_2.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">20 May 2014 : 12:20 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="09/07/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">Event Success</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_1.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Matt Goldman</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">9 July 2014 : 8:15 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                            <a href="javascript:;"
                                               class="btn btn-circle btn-outline purple-medium">View Summary</a>
                                            <div class="btn-group dropup pull-right">
                                                <button class="btn btn-circle green dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> اقدامات
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right" role="menu">
                                                    <li>
                                                        <a href="javascript:;">اقدام </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">اقدامی دیگر </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> چیزی دیگر </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">لینک جدا </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-date="30/08/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">Conference Call</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_1.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Rory Matthew</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">30 August 2014 : 5:45 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <img class="timeline-body-img pull-left" src="/pages/media/blog/5.jpg" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                            <a href="javascript:;" class="btn btn-circle red">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="15/09/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title">Conference Decision</h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_5.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Jessica Wolf</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">15 September 2014 : 8:30 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <img class="timeline-body-img pull-right" src="/pages/media/blog/6.jpg" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                qui ut.</p>
                                            <a href="javascript:;" class="btn btn-circle green-sharp">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="01/11/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_2.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">1 November 2014 : 12:20 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="10/12/2014">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_2.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">10 December 2014 : 12:20 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="19/01/2015">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_2.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">19 January 2015 : 12:20 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                        </div>
                                    </li>
                                    <li data-date="03/03/2015">
                                        <div class="mt-title">
                                            <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                        </div>
                                        <div class="mt-author">
                                            <div class="mt-avatar">
                                                <img src="/pages/media/users/avatar80_2.jpg" />
                                            </div>
                                            <div class="mt-author-name">
                                                <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                            </div>
                                            <div class="mt-author-datetime font-grey-mint">3 March 2015 : 12:20 PM</div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="mt-content border-grey-steel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                dignissim luctus risus sed sodales.</p>
                                            <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <!-- .events-content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-share font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">فعالیت های اخیر</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn btn-sm blue btn-outline btn-circle" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> فیلتر بر اساس
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                    <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" /> امورمالی
                                        <span></span>
                                    </label>
                                    <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" checked="" /> عضویت
                                        <span></span>
                                    </label>
                                    <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" /> پشتیبانی مشتریان
                                        <span></span>
                                    </label>
                                    <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" checked="" /> HR
                                        <span></span>
                                    </label>
                                    <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" /> سیستم
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                            <ul class="feeds">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> 4 وظیفه انجام نشده دارید.
                                                    <span class="label label-sm label-warning "> اقدام به انجام
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
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> گزارش مالی سال 2013 منتشر شده است. </div>
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
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
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
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> سفارش جدید دریافت شد با
                                                    <span class="label label-sm label-success"> شماره مرجع: DR23923 </span>
                                                </div>
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
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
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
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> سخت افزار وب سرور باید ارتقا یابد.
                                                    <span class="label label-sm label-default "> از کار افتاده </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 ساعت </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> گزارش IPO سال 2013 منتشر شده است. </div>
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
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> 4 وظیفه انجام نشده دارید.
                                                    <span class="label label-sm label-warning "> اقدام به انجام
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
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> گزارش مالی سال 2013 منتشر شده است. </div>
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
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
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
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> سفارش جدید دریافت شد با
                                                    <span class="label label-sm label-success"> شماره مرجع: DR23923 </span>
                                                </div>
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
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
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
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> سخت افزار وب سرور باید ارتقا یابد.
                                                    <span class="label label-sm label-default "> از کار افتاده </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 ساعت </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> گزارش IPO سال 2013 منتشر شده است. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 دقیقه </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="scroller-footer">
                            <div class="btn-arrow-link pull-right">
                                <a href="javascript:;"> مشاهده تمام سوابق </a>
                                <i class="icon-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light tasks-widget bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-share font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">وظایف</span>
                            <span class="caption-helper">خلاصه وظایف...</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn blue-oleo btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> بیشتر
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;"> همه پروژه ها </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;"> AirAsia </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> Cruise </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> HSBC </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;"> در انتظار
                                            <span class="badge badge-danger"> 4 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> تکمیل شده
                                            <span class="badge badge-success"> 12 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> سررسید
                                            <span class="badge badge-warning"> 9 </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="task-content">
                            <div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">
                                <!-- START TASK LIST -->
                                <ul class="task-list">
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> آمار سالانه IPO در سال 2013 در جلسه هیئت مدیره </span>
                                            <span class="label label-sm label-success">شرکت</span>
                                            <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> تکمیل </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> ویرایش </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> لغو </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> برگزاری یک مصاحبه برای موقعیت مدیر بازاریابی </span>
                                            <span class="label label-sm label-danger">بازاریابی</span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> تکمیل </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> ویرایش </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> لغو </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> جلسه داخلی پروژه سیستم اینترانت ایرآسیا </span>
                                            <span class="label label-sm label-success">AirAsia</span>
                                            <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> تکمیل </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> ویرایش </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> لغو </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> جلسه مدیریت فنی </span>
                                            <span class="label label-sm label-warning">شرکت</span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> تکمیل </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> ویرایش </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> لغو </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> شروع توسعه اپلیکیشن اندروید CRM شرکت </span>
                                            <span class="label label-sm label-info">محصولات داخلی</span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> تکمیل </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> ویرایش </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> لغو </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> آماده سازی پیشنهاد تجاری برای وب سایت  </span>
                                            <span class="label label-sm label-danger">چشم انداز هوشمند</span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> تکمیل </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> ویرایش </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> لغو </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> ثبت قرارداد تجاری با AutoSmart</span>
                                            <span class="label label-sm label-default">AutoSmart</span>
                                            <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group dropup">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> تکمیل </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> ویرایش </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> لغو </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> جلسه هیئت مدیره شرکت </span>
                                            <span class="label label-sm label-success">Cruise</span>
                                            <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group dropup">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> تکمیل </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> ویرایش </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> لغو </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="last-line">
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> بحث سرمایه گذاری KeenThemes </span>
                                            <span class="label label-sm label-warning">KeenThemes </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group dropup">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> تکمیل </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> ویرایش </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> لغو </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- END START TASK LIST -->
                            </div>
                        </div>
                        <div class="task-footer">
                            <div class="btn-arrow-link pull-right">
                                <a href="javascript:;"> مشاهده تمام سوابق </a>
                                <i class="icon-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-cursor font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase"> آمار عمومی </span>
                        </div>
                        <div class="actions">
                            <a href="javascript:;" class="btn btn-sm btn-circle red easy-pie-chart-reload">
                                <i class="fa fa-repeat"></i> بارگذاری مجدد </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="easy-pie-chart">
                                    <div class="number transactions" data-percent="55">
                                        <span>+55</span>% </div>
                                    <a class="title" href="javascript:;"> معاملات
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="margin-bottom-10 visible-sm"> </div>
                            <div class="col-md-4">
                                <div class="easy-pie-chart">
                                    <div class="number visits" data-percent="85">
                                        <span>+85</span>% </div>
                                    <a class="title" href="javascript:;"> بازدیدهای جدید
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="margin-bottom-10 visible-sm"> </div>
                            <div class="col-md-4">
                                <div class="easy-pie-chart">
                                    <div class="number bounce" data-percent="46">
                                        <span>-46</span>% </div>
                                    <a class="title" href="javascript:;"> بونس
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-equalizer font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">وضعیت سرور</span>
                            <span class="caption-helper">آمار ماهانه...</span>
                        </div>
                        <div class="tools">
                            <a href="" class="collapse"> </a>
                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                            <a href="" class="reload"> </a>
                            <a href="" class="remove"> </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="sparkline-chart">
                                    <div class="number" id="sparkline_bar5"></div>
                                    <a class="title" href="javascript:;"> شبکه
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="margin-bottom-10 visible-sm"> </div>
                            <div class="col-md-4">
                                <div class="sparkline-chart">
                                    <div class="number" id="sparkline_bar6"></div>
                                    <a class="title" href="javascript:;"> بارگذاری CPU
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="margin-bottom-10 visible-sm"> </div>
                            <div class="col-md-4">
                                <div class="sparkline-chart">
                                    <div class="number" id="sparkline_line"></div>
                                    <a class="title" href="javascript:;"> نرخ بارگیری
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <!-- BEGIN REGIONAL STATS PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-share font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase"> آمار منطقه ای </span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-cloud-upload"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" data-container="false" data-placement="bottom" href="javascript:;"> </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="region_statistics_loading">
                            <img src="/global/img/loading.gif" alt="loading" /> </div>
                        <div id="region_statistics_content" class="display-none">
                            <div class="btn-toolbar margin-bottom-10">
                                <div class="btn-group btn-group-circle" data-toggle="buttons">
                                    <a href="" class="btn grey-salsa btn-sm active"> کاربران </a>
                                    <a href="" class="btn grey-salsa btn-sm"> سفارشات </a>
                                </div>
                                <div class="btn-group pull-right">
                                    <a href="" class="btn btn-circle grey-salsa btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> انتخاب منطقه
                                        <span class="fa fa-angle-down"> </span>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;" id="regional_stat_world"> جهان </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" id="regional_stat_usa"> آمریکا </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" id="regional_stat_europe"> اروپا </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" id="regional_stat_russia"> روسیه </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" id="regional_stat_germany"> آلمان </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="vmap_world" class="vmaps display-none"> </div>
                            <div id="vmap_usa" class="vmaps display-none"> </div>
                            <div id="vmap_europe" class="vmaps display-none"> </div>
                            <div id="vmap_russia" class="vmaps display-none"> </div>
                            <div id="vmap_germany" class="vmaps display-none"> </div>
                        </div>
                    </div>
                </div>
                <!-- END REGIONAL STATS PORTLET-->
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title tabbable-line">
                        <div class="caption">
                            <i class="icon-globe font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">فید</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" class="active" data-toggle="tab"> سیستم </a>
                            </li>
                            <li>
                                <a href="#tab_1_2" data-toggle="tab"> فعالیت ها </a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <!--BEGIN TABS-->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1_1">
                                <div class="scroller" style="height: 339px;" data-always-visible="1" data-rail-visible="0">
                                    <ul class="feeds">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> 4 وظیفه انجام نشده دارید.
                                                            <span class="label label-sm label-info"> اقدام به انجام
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
                                                            <div class="label label-sm label-success">
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
                                                        <div class="label label-sm label-danger">
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
                                                        <div class="label label-sm label-info">
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
                                                        <div class="label label-sm label-success">
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
                                                        <div class="label label-sm label-warning">
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
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> سخت افزار وب سرور باید ارتقا یابد.
                                                            <span class="label label-sm label-default "> از کار افتاده </span>
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
                                                        <div class="label label-sm label-default">
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
                                                        <div class="label label-sm label-warning">
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
                                                        <div class="label label-sm label-info">
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
                                                        <div class="label label-sm label-default">
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
                                                        <div class="label label-sm label-info">
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
                                                        <div class="label label-sm label-default">
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
                                                        <div class="label label-sm label-info">
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
                                                        <div class="label label-sm label-default">
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
                                                        <div class="label label-sm label-info">
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
                                                        <div class="label label-sm label-default">
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
                                                        <div class="label label-sm label-info">
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
                            <div class="tab-pane" id="tab_1_2">
                                <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                    <ul class="feeds">
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> اکنون </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> سفارش جدید دریافت شد </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 10 دقیقه </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> سفارش #24DOP4 رد شد.
                                                            <span class="label label-sm label-danger "> اقدام به انجام
                                                                                <i class="fa fa-share"></i>
                                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 24 دقیقه </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> اکنون </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> اکنون </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> اکنون </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> اکنون </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> اکنون </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> اکنون </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> اکنون </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--END TABS-->
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet light calendar bordered">
                    <div class="portlet-title ">
                        <div class="caption">
                            <i class="icon-calendar font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">فید</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="calendar"> </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bubble font-hide hide"></i>
                            <span class="caption-subject font-hide bold uppercase">گفتگو</span>
                        </div>
                        <div class="actions">
                            <div class="portlet-input input-inline">
                                <div class="input-icon right">
                                    <i class="icon-magnifier"></i>
                                    <input type="text" class="form-control input-circle" placeholder="جستجو..."> </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body" id="chats">
                        <div class="scroller" style="height: 525px;" data-always-visible="1" data-rail-visible1="1">
                            <ul class="chats">
                                <li class="out">
                                    <img class="avatar" alt="" src="/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> آناهیتا </a>
                                        <span class="datetime"> در 20:11 </span>
                                        <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> آناهیتا </a>
                                        <span class="datetime"> در 20:11 </span>
                                        <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> کوروش </a>
                                        <span class="datetime"> در 20:30 </span>
                                        <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> کوروش </a>
                                        <span class="datetime"> در 20:30 </span>
                                        <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> محمد </a>
                                        <span class="datetime"> در 20:33 </span>
                                        <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> محمد </a>
                                        <span class="datetime"> در 20:35 </span>
                                        <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> کوروش </a>
                                        <span class="datetime"> در 20:40 </span>
                                        <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> محمد </a>
                                        <span class="datetime"> در 20:40 </span>
                                        <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> کوروش </a>
                                        <span class="datetime"> در 20:54 </span>
                                        <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.
                                                            </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-form">
                            <div class="input-cont">
                                <input class="form-control" type="text" placeholder="پیغام خود را تایپ کنید..." /> </div>
                            <div class="btn-cont">
                                <span class="arrow"> </span>
                                <a href="" class="btn blue icn-only">
                                    <i class="fa fa-check icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bubble font-dark hide"></i>
                            <span class="caption-subject font-hide bold uppercase">آخرین کاربران</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> اقدامات
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;"> گزینه 1</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;">گزینه 2</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">گزینه 3</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">گزینه 4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <!--begin: widget 1-1 -->
                                <div class="mt-widget-1">
                                    <div class="mt-icon">
                                        <a href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="mt-img">
                                        <img src="/pages/media/users/avatar80_8.jpg"> </div>
                                    <div class="mt-body">
                                        <h3 class="mt-username">Diana Ellison</h3>
                                        <p class="mt-user-title"> لورم ایپسوم یک متن آزمایشی است. </p>
                                        <div class="mt-stats">
                                            <div class="btn-group btn-group btn-group-justified">
                                                <a href="javascript:;" class="btn font-red">
                                                    <i class="icon-bubbles"></i> 1,7k </a>
                                                <a href="javascript:;" class="btn font-green">
                                                    <i class="icon-social-twitter"></i> 2,6k </a>
                                                <a href="javascript:;" class="btn font-yellow">
                                                    <i class="icon-emoticon-smile"></i> 3,7k </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: widget 1-1 -->
                            </div>
                            <div class="col-md-4">
                                <!--begin: widget 1-2 -->
                                <div class="mt-widget-1">
                                    <div class="mt-icon">
                                        <a href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="mt-img">
                                        <img src="/pages/media/users/avatar80_7.jpg"> </div>
                                    <div class="mt-body">
                                        <h3 class="mt-username">Jason Baker</h3>
                                        <p class="mt-user-title"> لورم ایپسوم یک متن آزمایشی است. </p>
                                        <div class="mt-stats">
                                            <div class="btn-group btn-group btn-group-justified">
                                                <a href="javascript:;" class="btn font-yellow">
                                                    <i class="icon-bubbles"></i> 1,7k </a>
                                                <a href="javascript:;" class="btn font-blue">
                                                    <i class="icon-social-twitter"></i> 2,6k </a>
                                                <a href="javascript:;" class="btn font-green">
                                                    <i class="icon-emoticon-smile"></i> 3,7k </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: widget 1-2 -->
                            </div>
                            <div class="col-md-4">
                                <!--begin: widget 1-3 -->
                                <div class="mt-widget-1">
                                    <div class="mt-icon">
                                        <a href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="mt-img">
                                        <img src="/pages/media/users/avatar80_6.jpg"> </div>
                                    <div class="mt-body">
                                        <h3 class="mt-username">Julia Berry</h3>
                                        <p class="mt-user-title"> لورم ایپسوم یک متن آزمایشی است. </p>
                                        <div class="mt-stats">
                                            <div class="btn-group btn-group btn-group-justified">
                                                <a href="javascript:;" class="btn font-yellow">
                                                    <i class="icon-bubbles"></i> 1,7k </a>
                                                <a href="javascript:;" class="btn font-red">
                                                    <i class="icon-social-twitter"></i> 2,6k </a>
                                                <a href="javascript:;" class="btn font-green">
                                                    <i class="icon-emoticon-smile"></i> 3,7k </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: widget 1-3 -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-microphone font-dark hide"></i>
                            <span class="caption-subject bold font-dark uppercase"> آخرین کارها</span>
                            <span class="caption-helper">گزینه پیش فرض...</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                <label class="btn red btn-outline btn-circle btn-sm active">
                                    <input type="radio" name="options" class="toggle" id="option1">تنظیمات</label>
                                <label class="btn  red btn-outline btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">ابزارها</label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-widget-2">
                                    <div class="mt-head" style="background-image: url(/pages/img/background/32.jpg);">
                                        <div class="mt-head-label">
                                            <button type="button" class="btn btn-success">منهتن</button>
                                        </div>
                                        <div class="mt-head-user">
                                            <div class="mt-head-user-img">
                                                <img src="/pages/img/avatars/team7.jpg"> </div>
                                            <div class="mt-head-user-info">
                                                <span class="mt-user-name">کریس جگرز</span>
                                                <span class="mt-user-time">
                                                                    <i class="icon-emoticon-smile"></i> 3 دقیقه قبل </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-body">
                                        <h3 class="mt-body-title"> توماس کلارک </h3>
                                        <p class="mt-body-description"> این یک واقعیت طولانی است که یک خواننده هیجان زده خواهد شد </p>
                                        <ul class="mt-body-stats">
                                            <li class="font-green">
                                                <i class="icon-emoticon-smile"></i> 3,7k</li>
                                            <li class="font-yellow">
                                                <i class=" icon-social-twitter"></i> 3,7k</li>
                                            <li class="font-red">
                                                <i class="  icon-bubbles"></i> 3,7k</li>
                                        </ul>
                                        <div class="mt-body-actions">
                                            <div class="btn-group btn-group btn-group-justified">
                                                <a href="javascript:;" class="btn">
                                                    <i class="icon-bubbles"></i> نشان گذاری </a>
                                                <a href="javascript:;" class="btn ">
                                                    <i class="icon-social-twitter"></i> اشتراک </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-widget-2">
                                    <div class="mt-head" style="background-image: url(/pages/img/background/43.jpg);">
                                        <div class="mt-head-label">
                                            <button type="button" class="btn btn-danger">لندن</button>
                                        </div>
                                        <div class="mt-head-user">
                                            <div class="mt-head-user-img">
                                                <img src="/pages/img/avatars/team3.jpg"> </div>
                                            <div class="mt-head-user-info">
                                                <span class="mt-user-name">هری هریس</span>
                                                <span class="mt-user-time">
                                                                    <i class="icon-user"></i> 3 دقیقه قبل </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-body">
                                        <h3 class="mt-body-title"> کریستین دیویدسون </h3>
                                        <p class="mt-body-description"> این یک واقعیت طولانی است که یک خواننده هیجان زده خواهد شد </p>
                                        <ul class="mt-body-stats">
                                            <li class="font-green">
                                                <i class="icon-emoticon-smile"></i> 3,7k</li>
                                            <li class="font-yellow">
                                                <i class=" icon-social-twitter"></i> 3,7k</li>
                                            <li class="font-red">
                                                <i class="  icon-bubbles"></i> 3,7k</li>
                                        </ul>
                                        <div class="mt-body-actions">
                                            <div class="btn-group btn-group btn-group-justified">
                                                <a href="javascript:;" class="btn ">
                                                    <i class="icon-bubbles"></i> نشان گذاری </a>
                                                <a href="javascript:;" class="btn ">
                                                    <i class="icon-social-twitter"></i> اشتراک </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-microphone font-dark hide"></i>
                            <span class="caption-subject bold font-dark uppercase"> آخرین پروژه ها </span>
                            <span class="caption-helper">گزینه پیش فرض...</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                <label class="btn blue btn-outline btn-circle btn-sm active">
                                    <input type="radio" name="options" class="toggle" id="option1">اقدامات</label>
                                <label class="btn  blue btn-outline btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">ابزارها</label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mt-widget-4">
                                    <div class="mt-img-container">
                                        <img src="/pages/img/background/34.jpg" /> </div>
                                    <div class="mt-container bg-purple-opacity">
                                        <div class="mt-head-title"> اصلاح و راه اندازی وب سایت </div>
                                        <div class="mt-body-icons">
                                            <a href="#">
                                                <i class=" icon-pencil"></i>
                                            </a>
                                            <a href="#">
                                                <i class=" icon-map"></i>
                                            </a>
                                            <a href="#">
                                                <i class=" icon-trash"></i>
                                            </a>
                                        </div>
                                        <div class="mt-footer-button">
                                            <button type="button" class="btn btn-circle btn-danger btn-sm">Dior</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mt-widget-4">
                                    <div class="mt-img-container">
                                        <img src="/pages/img/background/46.jpg" /> </div>
                                    <div class="mt-container bg-green-opacity">
                                        <div class="mt-head-title"> توسعه و گسترش CRM </div>
                                        <div class="mt-body-icons">
                                            <a href="#">
                                                <i class=" icon-social-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class=" icon-bubbles"></i>
                                            </a>
                                            <a href="#">
                                                <i class=" icon-bell"></i>
                                            </a>
                                        </div>
                                        <div class="mt-footer-button">
                                            <button type="button" class="btn btn-circle blue-ebonyclay btn-sm">Nike</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mt-widget-4">
                                    <div class="mt-img-container">
                                        <img src="/pages/img/background/37.jpg" /> </div>
                                    <div class="mt-container bg-dark-opacity">
                                        <div class="mt-head-title"> کمپین های بازاریابی </div>
                                        <div class="mt-body-icons">
                                            <a href="#">
                                                <i class=" icon-bubbles"></i>
                                            </a>
                                            <a href="#">
                                                <i class=" icon-map"></i>
                                            </a>
                                            <a href="#">
                                                <i class=" icon-cup"></i>
                                            </a>
                                        </div>
                                        <div class="mt-footer-button">
                                            <button type="button" class="btn btn-circle btn-success btn-sm">Honda</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-microphone font-dark hide"></i>
                            <span class="caption-subject bold font-dark uppercase"> فعالیت ها</span>
                            <span class="caption-helper">گزینه پیش فرض...</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn red btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> اقدامات
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;"> گزینه 1</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;">گزینه 2</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">گزینه 3</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">گزینه 4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mt-widget-3">
                                    <div class="mt-head bg-blue-hoki">
                                        <div class="mt-head-icon">
                                            <i class=" icon-social-twitter"></i>
                                        </div>
                                        <div class="mt-head-desc"> لورم ایپسوم متن آزمایشی است... </div>
                                        <span class="mt-head-date"> 25 شهریور, 2015 </span>
                                        <div class="mt-head-button">
                                            <button type="button" class="btn btn-circle btn-outline white btn-sm">افزودن</button>
                                        </div>
                                    </div>
                                    <div class="mt-body-actions-icons">
                                        <div class="btn-group btn-group btn-group-justified">
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-align-justify"></i>
                                                                </span>رکورد </a>
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-camera"></i>
                                                                </span>عکس </a>
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                                </span>تاریخ </a>
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-record"></i>
                                                                </span>رنک </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mt-widget-3">
                                    <div class="mt-head bg-red">
                                        <div class="mt-head-icon">
                                            <i class="icon-user"></i>
                                        </div>
                                        <div class="mt-head-desc"> لورم ایپسوم متن آزمایشی است... </div>
                                        <span class="mt-head-date"> 12 مرداد, 2016 </span>
                                        <div class="mt-head-button">
                                            <button type="button" class="btn btn-circle btn-outline white btn-sm">افزودن</button>
                                        </div>
                                    </div>
                                    <div class="mt-body-actions-icons">
                                        <div class="btn-group btn-group btn-group-justified">
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-align-justify"></i>
                                                                </span>رکورد </a>
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-camera"></i>
                                                                </span>عکس </a>
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                                </span>تاریخ </a>
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-record"></i>
                                                                </span>رنک </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mt-widget-3">
                                    <div class="mt-head bg-green">
                                        <div class="mt-head-icon">
                                            <i class=" icon-graduation"></i>
                                        </div>
                                        <div class="mt-head-desc"> لورم ایپسوم متن آزمایشی است... </div>
                                        <span class="mt-head-date"> 3 تیر, 2015 </span>
                                        <div class="mt-head-button">
                                            <button type="button" class="btn btn-circle btn-outline white btn-sm">افزودن</button>
                                        </div>
                                    </div>
                                    <div class="mt-body-actions-icons">
                                        <div class="btn-group btn-group btn-group-justified">
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-align-justify"></i>
                                                                </span>رکورد </a>
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-camera"></i>
                                                                </span>عکس </a>
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                                </span>تاریخ </a>
                                            <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-record"></i>
                                                                </span>رنک </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection