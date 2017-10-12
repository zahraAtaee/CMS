@extends('Home.master')
@section('content')
    <section id="global-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1>{{$course->title}}</h1>
                        <p>{{$course->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog-right">
        <div class="container">
            <div class="row pageRtl" >
                <div class="col-md-3 col-md-offset-1 col-sm-4">

                    @include('Home.layout.search')

                    @include('Home.layout.categoryPost',['widget'=>$course])

                    @include('Home.layout.aboutMe',['widget'=>$course])

                    @if(auth()->check() && auth()->user()->checkLearning($course)==0)
                        @include('Home.layout.shoppingCart',['widget'=>$course,'url'=>'payment.course'])
                    @endif

                    @include('Home.layout.popularPost')

                    @include('Home.layout.tag',['widget'=>$course])

                    @include('Home.layout.commentSidebar')

                    @include('Home.layout.pictureDay')

                </div>
                <div class="col-md-8 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    {{--<div class="blog-img row">
                        <div class="col-md-12">
                            <img class="img-responsive" src="/viewSite/img/blog-details-img2.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img class="img-responsive" src="/viewSite/img/blog-details-img3.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img class="img-responsive" src="/viewSite/img/blog-details-img4.jpg" alt="">
                        </div>
                    </div>--}}
                    <div class="block">
                        <span class="first-child-span">{{$course->title}}</span>
                        <p class="first-child">
                            {{$course->description}}
                        </p>

                        <blockquote>
                            {!! $course->body !!}
                            <div class="footer">
                                {{$course->user->name}}
                            </div>
                        </blockquote>
                        <div class="tags">
                            <h5>تگ ها</h5>
                            <?php  $tags=explode(",",$course->tags); ?>
                            @foreach($tags as $value)
                                <a href="#">{{$value}}</a>,
                            @endforeach
                        </div>
                        <div class="blog-comment">
                            <a class="comment-img" href="#"><img class="img-responsive" src="{{$course->user->images['thumb']}}" alt=""></a>
                            <div class="comment-text">
                                <h5><a href="#">درباره نویسنده</a></h5>
                                <span>{{$course->user->description}}</span>
                                <p>
                                    @if(strlen($course->user->description)<=0)
                                        {{'هیچ اطلاعاتی برای نمایش وجود ندارد'}}
                                    @else
                                        {{$course->user->description}}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <!-- social media icon -->
                        <div class="media-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    @include('Home.layout.commentSend',['subject'=>$course])
                    @include('Home.layout.commentShow',['comments'=>$comments])
                </div>
            </div>
        </div>
    </section>
@endsection
