@extends('Admin.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>کاربران</h2>
            <div class="btn-group">
                <a href="{{route('roles.index')}}" class="btn btn-sm btn-info">سطوح دسترسی</a>
                <a href="{{route('level.index')}}" class="btn btn-sm btn-primary">کاربران مدیریت  </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام کاربر</th>
                    <th>ایمیل</th>
                    <th>وضعیت ایمیل</th>
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>0</td>
                        <td>
                            <form action="{{route('users.destroy',['id'=>$user->id])}}" method="post">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <div class="btn-group btn-group-xs" >
                                    <a href="{{route('users.edit',['id'=>$user->id])}}" class="btn btn-success">ویرایش</a>
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
            {!! $users->render() !!}
        </div>
    </div>
@endsection