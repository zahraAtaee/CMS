@extends('Admin.master')
@section('style')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
    <link href="/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
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
                <span>کاربران</span>
            </li>
        </ul>
        <div class="page-toolbar">
            @include('Admin.section.pageTools')
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> کاربران سیستم
        <small>لیست کاربران ...</small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <div class="btn-group btn-group-circle btn-group ">
                                <a href="{{route('roles.index')}}" class="btn btn-sm btn-danger">سطوح دسترسی</a>
                                <a href="{{route('level.index')}}" class="btn btn-sm btn-info">کاربران مدیریت  </a>
                                <a href="{{route('users.create')}}" class="btn btn-sm btn-primary">کاربر جدید</a>
                        </span>
                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                        <tr>
                            <th>نام کاربر</th>
                            <th>نام </th>
                            <th>فامیلی</th>
                            <th>تاریخ تولد</th>
                            <th>موقعیت</th>
                            <th>توضیحات</th>
                            <th>ایمیل</th>
                            <th>وضعیت ایمیل</th>
                            <th>تنظیمات</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>نام کاربر</th>
                            <th>نام </th>
                            <th>فامیلی</th>
                            <th>تاریخ تولد</th>
                            <th>موقعیت</th>
                            <th>توضیحات</th>
                            <th>ایمیل</th>
                            <th>وضعیت ایمیل</th>
                            <th>تنظیمات</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->username}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->family}}</td>
                                <td>{{jDate::forge($user->birthday)->format('%B %d، %Y')}}</td>
                                <td>{{$user->position}}</td>
                                <td>{{$user->description}}</td>
                                <td>{{$user->email}}</td>
                                <td>0</td>
                                <td>
                                    <form action="{{route('users.destroy',['id'=>$user->id])}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <div class="btn-group btn-group-circle">
                                            <a href="{{route('users.edit',['id'=>$user->id])}}"class="btn btn-outline green btn-sm">ویرایش</a>
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
@section('script')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection