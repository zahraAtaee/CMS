@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>مقام ها</h2>
            <div class="btn-group">
                <a href="{{route('roles.create')}}" class="btn btn-sm btn-info">ایجاد مقام </a>
                <a href="{{route('permissions.create')}}" class="btn btn-sm btn-primary">کاربران مدیریت</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام مقام</th>
                    <th>توضیحات</th>
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->label}}</td>
                        <td>
                            <form action="{{route('roles.destroy',['id'=>$role->id])}}" method="post">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <div class="btn-group btn-group-xs" >
                                    <a href="{{route('roles.edit',['id'=>$role->id])}}" class="btn btn-success">ویرایش</a>
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
            {!! $roles->render() !!}
        </div>
    </div>
@endsection