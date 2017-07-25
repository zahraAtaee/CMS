@extends('Admin.master')
@section('script')
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            $('#courseId').selectpicker();
        });
        CKEDITOR.replace('description',{
            filebrowserUpload:'/admin/panel/upload-image',
            filebrowserImageUploadUrl:'/admin/panel/upload-image'
        });
    </script>
@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <div class="page-header head-section">
           <h2>  ویدئو ها</h2>
           <a href="{{route('episodes.create')}}" class="btn btn-sm btn-primary">ارسال ویدئو</a>
       </div>
        <form class="form-horizontal" action="{{route('episodes.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('Admin.section.errors')
            <div class="form-group">
                <label for="title" class="control-label">عنوان ویدئو</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="عنوان قسمت" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="course_id" class="control-label">دوره مرتبط</label>
                    <select type="text" class="form-control" name="course_id" id="course_id" >
                            @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->title}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="title" class="control-label">نوع ویدئو</label>
                    <select name="type" id="type" class="form-control">
                        <option value="VIP">اعضای ویژه</option>
                        <option value="cash">نقدی</option>
                        <option value="free">رایگان</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="control-label">متن ویدئو</label>
                <textarea class="form-control" rows="5" name="description" id="description" placeholder="توضیحات را وارد کنید" >{{old('description')}}</textarea>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="time" class="control-label">زمان ویدئو</label>
                    <input type="text" class="form-control" name="time" id="time" placeholder=" زمان ویدئو را وارد کنید" value="{{old('time')}}">
                </div>
                <div class="col-sm-6">
                    <label for="number" class="control-label">شماره قسمت</label>
                    <input type="text" class="form-control" name="number" id="number" placeholder=" شماره قسمت را وارد کنید" value="{{old('number')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="videoUrl" class="control-label">لینک ویدئو</label>
                    <input type="text" class="form-control" name="videoUrl" id="videoUrl" placeholder=" لینک ویدئو را وارد کنید" value="{{old('videoUrl')}}">
                </div>
                <div class="col-sm-6">
                    <label for="tags" class="control-label">تگ ها</label>
                    <input type="text" class="form-control" name="tags" id="tags" placeholder="تگ ها را وارد کنید" value="{{old('tags')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-danger">ارسال</button>
                </div>
            </div>
        </form>
    </div>
@endsection