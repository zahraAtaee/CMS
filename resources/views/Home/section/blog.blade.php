<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>مقالات</h2>
                    <p>در این قسمت شما قادر به مشاهده آخرین مقالات تخصصی هستید و می توانید با ارائه نظرات و پیشنهاداتتون <br>ما را در کیفیت هر چه بهتر مقالات یاری کنید.</p>
                </div>
                <div id="blog-post" class="owl-carousel">
                    @foreach($articles as $article)
                        <div>
                            <div class="block">
                                <img src="{{$article->images['thumb']}}" alt=""  class="img-responsive">
                                <div class="content">
                                    <h4><a href="{{$article->path()}}">‌{{$article->title}}</a></h4>
                                    <small>{{$article->user->name}}/ {{jdate($article->create_at)->ago()}}/ {{Redis::get("views.{$article->id}.articles")}}</small>
                                    <p>
                                        {{str_limit($article->description,157)}}
                                    </p>
                                    <a href="{{$article->path()}}" class="btn btn-read">ادامه مطلب</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>