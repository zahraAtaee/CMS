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
            <h2> ویرایش مقام کاربران</h2>
        </div>
        {{--Todo {{in_array($role->id,$seletcetRole->id) ?'selected' :''}}--}}
        <form class="form-horizontal" action="{{route('level.update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('Admin.section.errors')
            <div class="form-group">
               {{-- <div class="col-md-6">
                    <label for="user" class="control-label">کاربر</label>
                    <select type="text" class="form-control" name="user_id" id="user_id"  data-live-search="true">
                        @foreach($user as $value)
                            <option value="{{$value->id}}" {{in_array($value->id)}}>{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>--}}
                <div class="col-sm-12">
                    <label for="role_id" class="control-label">{{$user->email}}مقام ها--</label>
                    <select type="text" class="form-control" name="role_id" id="role_id"   data-live-search="true">
                        @foreach($roles as $role)
                            <option value="{{$role->id}}" >{{$role->name}}-{{$role->label}}</option>
                        @endforeach
                    </select>
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


