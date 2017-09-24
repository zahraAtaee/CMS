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
                <span>ویرایش ویدئو ها</span>
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
    <h1 class="page-title"> درج ویدئو
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
                    <form role="form"  action="{{route('episodes.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @include('Admin.section.errors')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <input type="text" class="form-control"  name="title"   >
                                            <label for="form_control_1">عنوان ویدئو </label>
                                            <span class="help-block">عنوان ویدئو را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <select type="text" class="form-control" name="course_id" id="course_id" >
                                            @foreach($courses as $course)
                                                <option value="{{$course->id}}">{{$course->title}}</option>
                                            @endforeach
                                        </select>
                                        <label for="lang" class="control-label">دوره های مرتبط</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <select name="type" id="type" class="form-control">
                                            <option value="VIP"  >اعضای ویژه</option>
                                            <option value="cash" >نقدی</option>
                                            <option value="free" >رایگان</option>
                                        </select>
                                        <label for="type" class="control-label">نوع ویدئو</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <textarea class="form-control"  rows="2" name="description" id="description" ></textarea>
                                            <label for="description">توضیحات</label>
                                            <span class="help-block">توضیحات ویدئو را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-md-line-input has-success">
                                      <input type="text" class="form-control"  name="time"   >
                                      <label for="form_control_1">زمان ویدئو</label>
                                      <span class="help-block">زمان ویدئو را وارد کنید...</span>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <input type="text" class="form-control"  name="number"   >
                                        <label for="form_control_1">شماره قسمت </label>
                                        <span class="help-block">شماره قسمت را وارد کنید...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <input type="text" class="form-control"  name="videoUrl"   >
                                            <label for="form_control_1">لینک ویدئو </label>
                                            <span class="help-block">لینک ویدئو را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon"><br/>
                                            <input type="text" name="tags" id="tags" class="form-control input-large" data-role="tagsinput"  />
                                            <label for="form_control_1">تگ ها </label>
                                            <span class="help-block">تگ های ویدئو را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-actions noborder">
                            <button type="submit" class="btn blue">ارسال</button>
                            <a href="{{route('episodes.index')}}"  class="btn default">انصراف</a>
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
        CKEDITOR.replace('description',{
            filebrowserUpload:'/admin/panel/upload-image',
            filebrowserImageUploadUrl:'/admin/panel/upload-image'
        });
    </script>
@endsection