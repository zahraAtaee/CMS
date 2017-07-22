@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <div class="page-header head-section">
           <h2>مقالات</h2>
           <a href="{{route('articles.create')}}" class="btn btn-sm btn-primary">درج مقاله</a>
       </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>عنوان مقاله</th>
                    <th>تعداد نظرات</th>
                    <th>مقدار بازدید</th>
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                <tr>
                    <td><a href="{{$article->path()}}"></a> {{$article->title}}</td>
                    <td>{{$article->commentCount}}</td>
                    <td>{{$article->viewCount}}</td>
                    <td>
                        <form action="{{route('articles.destroy',['id'=>$article->id])}}" method="post">
                            {{csrf_field()}}
                            {{method_field('delete')}}

                        <div class="btn-group btn-group-xs" >
                            <a href="{{route('articles.edit',['id'=>$article->id])}}" class="btn btn-success">ویرایش</a>
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
            {!! $articles->render() !!}
        </div>
    </div>
@endsection