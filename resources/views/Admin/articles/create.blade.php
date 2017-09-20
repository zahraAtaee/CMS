@extends('Admin.master')
@section('content')
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">خانه</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>ایجاد مقالات</span>
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
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form role="form"  action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" id="title" >
                                <label for="title">عنوان مقاله</label>
                            </div>
                            <div class="form-group form-md-line-input">
                                <select name="lang" id="lang" class="form-control">
                                    <option value="fa">فارسی</option>
                                    <option value="en">انگلیسی</option>
                                </select>
                                <label for="lang" class="control-label">زبان مقاله</label>
                            </div>
                            <div class="form-group form-md-line-input">
                                <textarea class="form-control"  rows="2" name="description" id="description"></textarea>
                                <label for="description">توضیحات</label>
                            </div>
                            <div class="form-group form-md-line-input">
                                <textarea class="form-control"  rows="5" name="body" id="body"></textarea>
                                <label for="body"> مقاله</label>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label for="images" class="control-label">تصویر مقاله</label>
                                <input type="file" class="form-control" name="images" id="images" placeholder="تصویر مقاله را وارد کنید" value="{{old('images')}}">
                            </div>

                        </div>

                        <div class="form-actions noborder">
                            <button type="button" class="btn blue">ارسال</button>
                            <button type="button" class="btn default">انصراف</button>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
