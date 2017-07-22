@extends('Admin.master')
@section('script')
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body',{
            filebrowserUpload:'/admin/panel/upload-image',
            filebrowserImageUploadUrl:'/admin/panel/upload-image'
        });
    </script>
@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <div class="page-header head-section">
           <h2> ایجاد دوره ها</h2>
           <a href="{{route('courses.create')}}" class="btn btn-sm btn-primary">درج دوره</a>
       </div>
        <form class="form-horizontal" action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('Admin.section.errors')
            <div class="form-group">
                <label for="title" class="control-label">عنوان دوره</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="عنوان دوره" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="title" class="control-label">نوع دوره</label>
                <select name="type" id="type" class="form-control">
                    <option value="VIP">اعضای ویژه</option>
                    <option value="cash">نقدی</option>
                    <option value="free">رایگان</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description" class="control-label">توضیحات</label>
                <textarea class="form-control" rows="5" name="description" id="description" placeholder="توضیحات را وارد کنید" >{{old('description')}}</textarea>
            </div>
            <div class="form-group">
                <label for="body" class="control-label">متن دوره</label>
                <textarea rows="6"  class="form-control" name="body" id="body" placeholder="متن دوره را وارد کنید" >{{old('body')}}</textarea>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="images" class="control-label">تصویر دوره</label>
                    <input type="file" class="form-control" name="images" id="images" placeholder="تصویر دوره را وارد کنید" value="{{old('images')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="price" class="control-label">قیمت</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="قیمت را وارد کنید" value="{{old('price')}}">
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