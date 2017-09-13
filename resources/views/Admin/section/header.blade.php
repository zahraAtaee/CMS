<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">@lang('messages.title')@endlang</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">داشبورد</a></li>
                <li><a href="#">تنظیمات</a></li>
                <li><a href="#">پروفایل</a></li>
                <li><a href="#">راهنما</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>

            <div class="navbar-left">
                <a href="/logOut" class="btn btn sm btn-warning" style="margin: 15px">خروج از پنل کاربری</a>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li  class="active"><a href="{{route('PanelAdmin')}}"> پنل اصلی<span class="sr-only">(current)</span></a></li>
                <li><a href="{{route('articles.index')}}">مقاله ها</a></li>
                <li><a href="{{route('courses.index')}}">دوره ها</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="{{route('users')}}">کاربران<span class="badge">0</span></a></li>
                <li><a href="{{route('payments.index')}}">پرداختی های موفق<span class="badge">{{$paymentSuccess}}</span></a></li>
                <li><a href="{{route('payment.unsuccessfull')}}">پرداختی های ناموفق<span class="badge">{{$paymentUnsuccess}}</span></a></li>
                <li><a href="">گزارشات</a></li>
                {{--<li><a href="">More navigation</a></li>--}}
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="{{route('comments.index')}}">همه نظرات<span class="badge">{{$commentSuccess}}</span></a></li>
                <li><a href="{{route('comments.unsuccessfull')}}">نظرات تایید نشده <span class="badge">{{$commentUnsuccess}}</span></a></li>
                {{--<li><a href="">Another nav item</a></li>--}}
            </ul>
        </div>