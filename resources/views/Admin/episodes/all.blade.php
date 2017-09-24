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
                <span>ویدئو ها</span>
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
    <h1 class="page-title"> ویدئو های تخصصی
        <small>لیست ویدئو های ارسالی ....</small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <div class="btn-group btn-group-circle btn-group ">
                            <a href="{{route('episodes.create')}}" class="btn btn-sm btn-primary">ایجاد دوره جدید</a>
                            <a href="{{route('courses.index')}}" class="btn btn-sm btn-danger">بازگشت به دوره ها
                                <span class="ladda-label">
                                 <i class="icon-logout"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                        <tr>
                            <th>عنوان ویدئو</th>
                            <th>تعداد نظرات</th>
                            <th>مقدار بازدید</th>
                            <th>تعداد دانلود</th>
                            <th>شماره</th>
                            <th>وضعیت ویدئو</th>
                            <th>تنظیمات</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>عنوان ویدئو</th>
                            <th>تعداد نظرات</th>
                            <th>مقدار بازدید</th>
                            <th>تعداد دانلود</th>
                            <th>شماره</th>
                            <th>وضعیت ویدئو</th>
                            <th>تنظیمات</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($episodes as $episode)
                            <tr>
                                <td><a href="{{$episode->path()}}">{{$episode->title}}</a></td>
                                <td>{{$episode->commentCount}}</td>
                                <td>{{$episode->viewCount}}</td>
                                <td>{{$episode->downloadCount}}</td>
                                <td>{{$episode->number}}</td>
                                <td>
                                    @if($episode->type=='free')
                                        {{'رایگان'}}
                                    @elseif($episode->type=='VIP')
                                        {{'ویژه'}}
                                    @else
                                        {{'نقدی'}}
                                    @endif
                                </td>
                                <td>
                                    <form action="{{route('episodes.destroy',['id'=>$episode->id])}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <div class="btn-group btn-group-circle">
                                            <a  href="{{route('episodes.edit',['id'=>$episode->id])}}"  class="btn btn-outline green btn-sm">ویرایش</a>
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
