@extends('Admin.master')
@section('content')
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN THEME PANEL -->
    <div class="theme-panel hidden-xs hidden-sm">
        <div class="toggler"> </div>
        <div class="toggler-close"> </div>
        <div class="theme-options">
            <div class="theme-option theme-colors clearfix">
                <span> رنگ تم </span>
                <ul>
                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                    <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                </ul>
            </div>
            <div class="theme-option">
                <span> استایل تم </span>
                <select class="layout-style-option form-control input-sm">
                    <option value="square" selected="selected">گوشه های مربعی</option>
                    <option value="rounded">گوشه های انحنادار</option>
                </select>
            </div>
            <div class="theme-option">
                <span> طرح بندی </span>
                <select class="layout-option form-control input-sm">
                    <option value="fluid" selected="selected">Fluid</option>
                    <option value="boxed">Boxed</option>
                </select>
            </div>
            <div class="theme-option">
                <span> هدر </span>
                <select class="page-header-option form-control input-sm">
                    <option value="fixed" selected="selected">ثابت</option>
                    <option value="default">پیش فرض</option>
                </select>
            </div>
            <div class="theme-option">
                <span> منوی بالای کرکره ای </span>
                <select class="page-header-top-dropdown-style-option form-control input-sm">
                    <option value="light" selected="selected">روشن</option>
                    <option value="dark">تیره</option>
                </select>
            </div>
            <div class="theme-option">
                <span> حالت سایدبار </span>
                <select class="sidebar-option form-control input-sm">
                    <option value="fixed">ثابت</option>
                    <option value="default" selected="selected">پیش فرض</option>
                </select>
            </div>
            <div class="theme-option">
                <span> منو سایدبار </span>
                <select class="sidebar-menu-option form-control input-sm">
                    <option value="accordion" selected="selected">آکاردئون</option>
                    <option value="hover">هاوور</option>
                </select>
            </div>
            <div class="theme-option">
                <span> استایل سایدبار </span>
                <select class="sidebar-style-option form-control input-sm">
                    <option value="default" selected="selected">پیش فرض</option>
                    <option value="light">روشن</option>
                </select>
            </div>
            <div class="theme-option">
                <span> مکان سایدبار </span>
                <select class="sidebar-pos-option form-control input-sm">
                    <option value="left">چپ</option>
                    <option value="right" selected="selected">راست</option>
                </select>
            </div>
            <div class="theme-option">
                <span> فوتر </span>
                <select class="page-footer-option form-control input-sm">
                    <option value="fixed">ثابت</option>
                    <option value="default" selected="selected">پیش فرض</option>
                </select>
            </div>
        </div>
    </div>
    <!-- END THEME PANEL -->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">خانه</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>مقالات</span>
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
        <p>
            <a class="btn btn-outline mb1 blue" href="{{route('articles.create')}}" class="btn btn-sm btn-primary">درج مقاله</a>
        </p>
     <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>مقالات </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th>عنوان مقاله</th>
                            <th>تعداد نظرات</th>
                            <th>مقدار بازدید</th>
                            <th>تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td><a href="{{$article->path()}}">{{$article->title}}</a></td>
                                <td>{{$article->commentCount}}</td>
                                <td>{{$article->viewCount}}</td>
                                <td>
                                    <form action="{{route('articles.destroy',['id'=>$article->id])}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <div class="btn-group btn-group-circle">
                                            <a href="{{route('articles.edit',['id'=>$article->id])}}" class="btn btn-outline green btn-sm">ویرایش</a>
                                            <button type="submit" class="btn btn-outline red btn-sm">حذف</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
