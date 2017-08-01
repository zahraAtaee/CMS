@extends('Admin.master')
@section('script')
    <script>
        $(document).ready(function () {
            $('#permission_id').selectpicker();
        })
    </script>
@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2> ویرایش مقام</h2>
        </div>
        <form class="form-horizontal" action="{{route('roles.update',['id'=>$role->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            @include('Admin.section.errors')
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="name" class="control-label">عنوان مقام</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="عنوان مقام" value="{{$role->name}}">
                </div>
                <div class="col-sm-6">
                    <label for="permission_id" class="control-label">دسترسی ها</label>
                    <select name="permission_id[]" id="permission_id" class="form-control" multiple>
                        @foreach($permissions as $permission)
                            <option value="{{$permission->id}}" {{in_array(trim($permission->id),$role->permissions()->pluck('id')->toArray()) ? 'selected' : ''}}>{{$permission->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="label" class="control-label">توضیحات کوتاه</label>
                <textarea class="form-control" rows="5" name="label" id="label" placeholder="توضیحات را وارد کنید" >{{$role->label}}</textarea>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-danger">ویرایش</button>
                </div>
            </div>
        </form>
    </div>
@endsection


