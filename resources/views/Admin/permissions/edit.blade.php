@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2> ویرایش دسترسی ها</h2>
        </div>
        <form class="form-horizontal" action="{{route('permissions.update',['id'=>$permission->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            @include('Admin.section.errors')
            <div class="form-group">
                <label for="name" class="control-label">عنوان دسترسی</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="عنوان دسترسی" value="{{$permission->name}}">
            </div>
            <div class="form-group">
                <label for="label" class="control-label">توضیحات</label>
                <textarea class="form-control" rows="5" name="label" id="label" placeholder="توضیحات را وارد کنید" >{{$permission->label}}</textarea>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-danger">ویرایش</button>
                </div>
            </div>
        </form>
    </div>
@endsection


