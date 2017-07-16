@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <div class="page-header head-section">
           <h2> ایجاد مقالات</h2>
           <a href="{{route('articles.create')}}" class="btn btn-sm btn-primary">درج مقاله</a>
       </div>
        <form class="form-horizontal" action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">

            {{csrf_field()}}
            <div class="form-group">
                <label for="title" class="control-label">عنوان مقاله</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="عنوان مقاله" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="description" class="control-label">توضیحات</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="توضیحات را وارد کنید" value="{{old('description')}}">
            </div>
            <div class="form-group">
                <label for="body" class="control-label">متن مقاله</label>
                <textarea rows="6"  class="form-control" name="body" id="body" placeholder="متن مقاله را وارد کنید" value="{{old('body')}}"></textarea>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="imageUrl" class="control-label">تصویر مقاله</label>
                    <input type="file" class="form-control" name="imageUrl" id="imageUrl" placeholder="تصویر مقاله را وارد کنید" value="{{old('imageUrl')}}">
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