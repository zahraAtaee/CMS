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
                <span>پرداخت های ناموفق</span>
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
    <h1 class="page-title">پرداخت ها
        <small>لیست پرداختهای ناموفق ....</small>
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

                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                        <tr>
                            <th>نام کاربر</th>
                            <th>مقدار پرداختی</th>
                            <th>نوع پرداخت</th>
                            <th>تنظیمات</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>نام کاربر</th>
                            <th>مقدار پرداختی</th>
                            <th>نوع پرداخت</th>
                            <th>تنظیمات</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($payments as $payment)
                            <tr>
                                <td>{{$payment->user->name}}</td>
                                <td>{{$payment->price}}</td>
                                @if($payment->course_id=='VIP')
                                    <td>{{'بابت عضویت ویژه'}} </td>
                                @else
                                    <td>{{$payment->course->title}}</td>
                                @endif
                                <td>
                                    <div style="display: flex">
                                        <form action="{{route('payments.destroy',['id'=>$payment->id])}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('delete')}}

                                            <button type="submit" class="btn  btn-xs btn-danger">حذف</button>
                                        </form>
                                        <form style="margin-right: 5px" action="{{route('payments.update',['id'=>$payment->id])}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('patch')}}
                                            <button type="submit" class="btn btn-xs btn-success">تایید</button>
                                        </form>
                                    </div>
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