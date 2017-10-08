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
                <span>مقام کاربران</span>
            </li>
        </ul>
        <div class="page-toolbar">
            @include('Admin.section.pageTools')
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> ثبت مقام کاربران
        <small>اطلاعات مورد نظر جهت  ثبت مقام کاربران...</small>
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
                        <form  action="{{route('level.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @include('Admin.section.errors')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input has-success">
                                            <div class="input-icon">
                                                <select name="user_id" id="user_id" class="form-control">
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                                <label for="user_id" class="control-label">کاربر</label>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input has-success">
                                            <div class="input-icon">
                                                <select type="text" class="form-control" name="role_id" id="role_id"   data-live-search="true">
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}">{{$role->name}}-{{$role->label}}</option>
                                                    @endforeach
                                                </select>
                                                <label for="role_id" class="control-label">مقام ها</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-danger">ارسال</button>
                                    <a href="{{route('level.index') }}" type="submit"  class="btn default">انصراف</a>
                                </div>
                            </div>
                        </form>
                </div>
             </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
        </div>
@endsection
