@extends('Admin.master')
@section('style')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link href="/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
@endsection
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
                <span>ویرایش مقالات</span>
            </li>
        </ul>
        <div class="page-toolbar">
            @include('Admin.section.pageTools')
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> درج مقالات
        <small>اطلاعات مورد نظر جهت درج این مطلب...</small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <span class="caption-subject bold uppercase"> </span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form"  action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @include('Admin.section.errors')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <input type="text" class="form-control"  name="title"   >
                                            <label for="form_control_1">عنوان مقاله </label>
                                            <span class="help-block">عنوان مقاله را وارد کنید...</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <select name="lang" id="lang" class="form-control">
                                            <option value="fa" >فارسی</option>
                                            <option value="en" >انگلیسی</option>
                                        </select>
                                        <label for="lang" class="control-label">زبان مقاله</label>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <textarea class="form-control"  rows="2" name="description" id="description"-></textarea>
                                            <label for="description">توضیحات</label>
                                            <span class="help-block">توضیحات مقاله را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <textarea class="form-control"  rows="5" name="body" id="body"></textarea>
                                            <label for="body"> متن</label>
                                            <span class="help-block">متن مقاله را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <label for="images" class="control-label">تصویر مقاله</label>
                                            <input type="file" class="form-control" name="images" id="images" placeholder="تصویر مقاله را وارد کنید" value="{{old('images')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon"><br/>
                                            <input type="text" name="tags" id="tags" class="form-control input-large" data-role="tagsinput"  />
                                            <label for="form_control_1">تگ ها </label>
                                            <span class="help-block">تگ های مقاله را وارد کنید...</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-actions noborder">
                            <button type="submit" class="btn blue">ارسال</button>
                            <a href="{{route('article.index')}}" class="btn default">انصراف</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
@endsection
@section('script')
    <script src="/ckeditor/ckeditor.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js" type="text/javascript"></script>
    <script src="/global/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
    <script src="/global/plugins/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/pages/scripts/components-bootstrap-tagsinput.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        CKEDITOR.replace('body',{
            filebrowserUpload:'/admin/panel/upload-image',
            filebrowserImageUploadUrl:'/admin/panel/upload-image'
        });
    </script>
@endsection
