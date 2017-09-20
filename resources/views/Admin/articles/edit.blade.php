@extends('Admin.master')
@section('style')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
<link href="/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('content')
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">خانه</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>ویرایش مقالات</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp;
                <span class="thin uppercase hidden-xs"></span>&nbsp;
                <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>مقالات </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form role="form"  action="{{route('articles.update',['id'=>$article->id])}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        @include('Admin.section.errors')
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="title" id="title" value="{{$article->title}}" >
                                <label for="title">عنوان مقاله</label>
                            </div>
                            <div class="form-group form-md-line-input">
                                <select name="lang" id="lang" class="form-control">
                                    <option value="fa" {{$article->lang=='fa' ? 'selected' :''}} >فارسی</option>
                                    <option value="en" {{$article->lang=='en' ? 'selected' :''}}>انگلیسی</option>
                                </select>
                                <label for="lang" class="control-label">زبان مقاله</label>
                            </div>
                            <div class="form-group form-md-line-input">
                                <textarea class="form-control"  rows="2" name="description" id="description">{{$article->description}}</textarea>
                                <label for="description">توضیحات</label>
                            </div>
                            <div class="form-group form-md-line-input">
                                <textarea class="form-control"  rows="5" name="body" id="body">{{$article->body}}</textarea>
                                <label for="body"> مقاله</label>
                            </div>
                            <div class="form-group form-md-line-input">
                                <div class="col-sm-12">
                                    <label for="images" class="control-label">تصویر مقاله</label>
                                    <input type="file" class="form-control" name="images" id="images" placeholder="تصویر مقاله را وارد کنید" >
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        @foreach($article->images['images'] as $key=>$image)
                                            <div class="col-sm-2">
                                                <div class="control-label">
                                                    {{$key}}
                                                    <input type="radio"  name="imagesThumb" value="{{$image}}" {{$article->images['thumb']==$image ?'checked' : ''}} />
                                                    <a href="{{$image}}"><img src="{{$image}}" alt="{{$key}}" width="70%"></a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div><br/><br/>
                            <div class="form-group form-md-line-input">
                                <label for="tags" class="control-label ">تگ ها</label>
                                <input type="text" name="tags" id="tags" class="form-control input-large" data-role="tagsinput" style="display: none;" value="{{$article->tags}}">
                            </div>
                        </div>
                        <div class="form-actions noborder">
                            <button type="submit" class="btn blue">ویرایش</button>
                            <button type="button" class="btn default">انصراف</button>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
