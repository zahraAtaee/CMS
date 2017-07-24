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
           <h2> ویرایش ویدئو</h2>
       </div>
        <form class="form-horizontal" action="{{route('courses.update',['id'=>$course->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            @include('Admin.section.errors')
            <div class="form-group">
                <label for="title" class="control-label">عنوان ویدئو</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="عنوان ویدئو" value="{{$course->title}}">
            </div>
            <div class="form-group">
                <label for="title" class="control-label">نوع ویدئو</label>
                <select name="type" id="type" class="form-control">
                    <option value="VIP"  {{$course->type=='VIP' ? 'selected' : ''}} >اعضای ویژه</option>
                    <option value="cash" {{$course->type=='cash' ? 'selected' : ''}} >نقدی</option>
                    <option value="free" {{$course->type=='free' ? 'selected' : ''}} >رایگان</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description" class="control-label">توضیحات کوتاه</label>
                <textarea class="form-control" rows="5" name="description" id="description" placeholder="توضیحات را وارد کنید" >{{$course->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="body" class="control-label">متن ویدئو</label>
                <textarea rows="6"  class="form-control" name="body" id="body" placeholder="متن ویدئو را وارد کنید" >{{$course->body}}</textarea>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                        <label for="images" class="control-label">تصویر ویدئو</label>
                        <input type="file" class="form-control" name="images" id="images" placeholder="تصویر دوره را وارد کنید" >
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        @foreach($course->images['images'] as $key=>$image)
                         <div class="col-sm-2">
                             <div class="control-label">
                                 {{$key}}
                                 <input type="radio" name="imagesThumb" value="{{$image}}" {{$course->images['thumb']==$image ?'checked' : ''}} />
                                 <a href="{{$image}}"><img src="{{$image}}" alt="{{$key}}" width="70%"></a>
                             </div>
                         </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="price" class="control-label">قیمت</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="قیمت را وارد کنید" value="{{$course->price}}">
                </div>
                <div class="col-sm-6">
                    <label for="tags" class="control-label">تگ ها</label>
                    <input type="text" class="form-control" name="tags" id="tags" placeholder="تگ ها را وارد کنید" value="{{$course->tags}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-danger">ویرایش</button>
                </div>
            </div>
        </form>
    </div>
@endsection