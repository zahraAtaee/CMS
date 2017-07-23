@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <div class="page-header head-section">
           <h2>دوره ها</h2>
           <a href="{{route('courses.create')}}" class="btn btn-sm btn-primary">ایجاد دوره جدید</a>
       </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>عنوان مقاله</th>
                    <th>تعداد نظرات</th>
                    <th>مقدار بازدید</th>
                    <th>تعداد شرکت کننده ها</th>
                    <th>وضعیت دوره</th>
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                <tr>
                    <td><a href="{{$course->path()}}"></a>{{$course->title}}</td>
                    <td>{{$course->commentCount}}</td>
                    <td>{{$course->viewCount}}</td>
                    <td>{{$course->viewCount}}</td>
                    <td>
                        @if($course->type=='free')
                            {{'رایگان'}}
                        @elseif($course->type='VIP')
                            {{'ویژه'}}
                        @elseif($course->type='cash')
                            {{'نقدی'}}
                        @endif
                    </td>
                    <td>
                        <form action="{{route('courses.destroy',['id'=>$course->id])}}" method="post">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                        <div class="btn-group btn-group-xs" >
                            <a href="{{route('courses.edit',['id'=>$course->id])}}" class="btn btn-success">ویرایش</a>
                            <button type="submit" class="btn btn-danger">حذف</button>
                        </div>
                        </form>
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="text-align: center">
            {!! $courses->render() !!}
        </div>
    </div>
@endsection