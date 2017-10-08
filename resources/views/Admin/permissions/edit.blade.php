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
                <span>ویرایش دسترسی ها</span>
            </li>
        </ul>
        <div class="page-toolbar">
            @include('Admin.section.pageTools')
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> ویرایش دسترسی ها
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
        <form class="form-horizontal" action="{{route('permissions.update',['id'=>$permission->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            @include('Admin.section.errors')
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input has-success">
                            <div class="input-icon">
                                <input type="text" class="form-control"  name="name"  value="{{$permission->name}}" >
                                <label for="name">عنوان دسترسی </label>
                                <span class="help-block">عنوان دسترسی را وارد کنید...</span>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group form-md-line-input has-success">
                            <div class="input-icon">
                                <input type="text" class="form-control"  name="label"  value="{{$permission->label}}" >
                                <label for="label">توضیحات </label>
                                <span class="help-block">توضیحات را وارد کنید...</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">ارسال</button>
                <a href="{{route('permissions.index')}}" class="btn default">انصراف</a>
            </div>
        </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
@endsection


