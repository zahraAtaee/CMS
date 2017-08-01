@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <div class="page-header head-section">
           <h2>دسترسی ها</h2>
       </div>
        <form class="form-horizontal" action="{{route('permissions.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('Admin.section.errors')
            <div class="form-group">
                <label for="title" class="control-label">عنوان دسترسی ها</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="دسترسی" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="description" class="control-label">توضیحات کوتاه</label>
                <textarea class="form-control" rows="5" name="label" id="label" placeholder="توضیحات را وارد کنید" >{{old('label')}}</textarea>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-danger">ارسال</button>
                </div>
            </div>
        </form>
    </div>
@endsection