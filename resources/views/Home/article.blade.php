@extends('Home.master')
@section('content')
    <section id="global-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1>{{$article->title}}</h1>
                        <p>{{$article->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog-left">
        <div class="container">
            <div class="row pageRtl" >
                <div class="col-md-3 col-md-offset-1 col-sm-4">
                    <div class="widget">
                        <form>
                            <i class="fa fa-search"></i>
                            <input type="text" name="search" class="" placeholder="TYPE KEYWORD HERE...">
                        </form>
                    </div>
                    <div class="widget">
                        <span>Categories</span>
                        <div class="widget-body">
                            <ul class="category-list">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Featured Blog</a></li>
                                <li><a href="#">Photography Idea</a></li>
                                <li><a href="#">Design Tutorials</a></li>
                                <li><a href="#">News and Events</a></li>
                                <li><a href="#">Arts and Entertainment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <span>ABOUT ME</span>
                        <div class="widget-body">
                            <img class="img-responsive" src="/viewSite/img/blog-img8.jpg" alt="">
                            <span class="title">JOHN DEO</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard.</p>
                        </div>
                    </div>
                    <div class="widget">
                        <span>TEXT WIDGET</span>
                        <div class="widget-body">
                            <p>Lorem Ipsum is simply dummy text of printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the of type and scrambled it to make a type specimen.</p>
                        </div>
                    </div>
                    <div class="widget">
                        <span>POPULAR POSTS</span>
                        <div class="widget-body">
                            <ul class="category-list">
                                <li><a class="items" href="#">Standard Post with Gallery</a>Saturday - June 15, 2013</li>
                                <li><a class="items" href="#">Standard post with preview Video</a>Saturday - June 20, 2013</li>
                                <li><a class="items" href="#">Standard post with preview Picture</a>Saturday - June 25, 2013</li>
                                <li><a class="items" href="#">Standard Post with Gallery</a>Saturday - June 15, 2013</li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget sidebar-tags">
                        <span>Tags</span>
                        <div class="widget-body">
                            <a href="#">Advertisement</a>
                            <a href="#">Fashion</a>
                            <a href="#">Sea</a>
                            <a href="#">Forest</a>
                            <a href="#">Nature</a>
                            <a href="#">Portrait</a>
                            <a href="#">Wordpress</a>
                            <a href="#">Photo</a>
                            <a href="#">Sky</a>
                        </div>
                    </div>
                    <div class="widget">
                        <span>RECENT COMMENTS</span>
                        <div class="widget-body">
                            <ul class="category-list">
                                <li><a href="#">Standard Post with Gallery</a>Saturday - June 15, 2013</li>
                                <li><a href="#">Standard post with preview Video</a>Saturday - June 20, 2013</li>
                                <li><a href="#">Standard post with preview Picture</a>Saturday - June 25, 2013</li>
                                <li><a href="#">Standard Post with Gallery</a>Saturday - June 15, 2013</li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <a href="#">
                            <img class="img-responsive" src="/viewSite/img/blog-img7.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <div class="blog-img row">
                        <div class="col-md-12">
                            <img class="img-responsive" src="/viewSite/img/blog-details-img2.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img class="img-responsive" src="/viewSite/img/blog-details-img3.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img class="img-responsive" src="/viewSite/img/blog-details-img4.jpg" alt="">
                        </div>
                    </div>
                    <div class="block">
                        <span class="first-child-span">{{$article->title}}</span>
                        <p class="first-child">
                            {{$article->description}}
                        </p>

                        <blockquote>
                            {!! $article->body !!}
                            <div class="footer">
                                {{$article->user->name}}
                            </div>
                        </blockquote>
                        <div class="tags">
                            <h5>تگ ها</h5>
                            <?php  $tags=explode(",",$article->tags); ?>
                            @foreach($tags as $value)
                                <a href="#">{{$value}}</a>,
                            @endforeach
                        </div>
                        <div class="blog-comment">
                            <a class="comment-img" href="#"><img class="img-responsive" src="/viewSite/img/avtar6.jpg" alt=""></a>
                            <div class="comment-text">
                                <h5><a href="#">درباره نویسنده</a></h5>
                                <span>{{$article->user->description}}</span>
                                <p>
                                    @if(strlen($article->user->description)<=0)
                                    {{'هیچ اطلاعاتی برای نمایش وجود ندارد'}}
                                    @else
                                    {{$article->user->description}}
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
                    @include('Home.layout.comment',['comments'=>$comments,'subject'=>$article])
                </div>
            </div>
        </div>
    </section>
@endsection