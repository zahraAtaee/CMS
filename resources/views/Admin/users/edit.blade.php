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
                <span>ویرایش کاربر</span>
            </li>
        </ul>
        <div class="page-toolbar">
            @include('Admin.section.pageTools')
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> ویرایش کاربر
        <small>اطلاعات مورد نظر جهت ویرایش این کاربر...</small>
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
                    <form role="form"  action="{{route('users.update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        @include('Admin.section.errors')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <input type="text" class="form-control"  name="username" value="{{$user->username}}"  >
                                            <label for="user">نام کاربری </label>
                                            <span class="help-block">نام کاربری را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <input type="text" class="form-control"  name="name"  value="{{$user->name}}"  >
                                        <label for="name">نام</label>
                                        <span class="help-block">نام را وارد کنید...</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <input type="text" class="form-control"  name="family"  value="{{$user->family}}"  >
                                        <label for="family">خانوادگی </label>
                                        <span class="help-block">خانوادگی را وارد کنید...</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <input type="text" class="form-control"  name="birthday"  value="{{$user->birthday}}"  >
                                            <label for="birthday">تاریخ تولد</label>
                                            <span class="help-block">تاریخ تولد را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <input type="text" class="form-control"  name="position"  value="{{$user->position}}"  >
                                            <label for="position">موقعیت </label>
                                            <span class="help-block">موقعیت را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <input type="text" class="form-control"  name="email" value="{{$user->email}}"   >
                                            <label for="email">ایمیل </label>
                                            <span class="help-block">ایمیل را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <input type="password" class="form-control"  name="password" value="{{$user->password}}"  >
                                            <label for="password"> رمز عبور</label>
                                            <span class="help-block">رمز عبور را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <input type="password" class="form-control"  name="repassword" value="{{$user->password}}" >
                                            <label for="password"> تکرار رمز عبور</label>
                                            <span class="help-block">تکرار رمز عبور را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <input type="text" class="form-control"  name="description" value="{{$user->description}}"   >
                                            <label for="description">توضیحات </label>
                                            <span class="help-block">توضیحات را وارد کنید...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <label for="images" class="control-label">تصویر کاربر </label>
                                            <input type="file" class="form-control" name="images" id="images" placeholder="تصویر کاربر  را وارد کنید" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        @if(count($user->images['images'])>1)
                                            @foreach($user->images['images'] as $key=>$image)
                                                <div class="col-sm-2">
                                                    <div class="control-label">
                                                        {{$key}}
                                                        <input type="radio" class="md-radiobtn"  name="imagesThumb" value="{{$image}}" {{$user->images['thumb']==$image ?'checked' : ''}} />
                                                        <a href="{{$image}}"><img src="{{$image}}" alt="{{$key}}" width="70%"></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions noborder">
                            <button type="submit" class="btn blue">ارسال</button>
                            <button type="button" class="btn default">انصراف</button>
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
